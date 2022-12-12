<?php
include('header.php'); ?>
<div class="container">
    <main>
        <style>
            table{
                margin-top: 20px;
            }
            img {
                max-width: 400px;
                max-height: 300px;
                display: block;
                margin-left: auto;
                margin-right: auto;


            }

            .btn {
                margin-top: 30%;
                margin-left: auto;
                margin-right: auto;
               

            }
        </style>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Nazwa produktu</th>
                    <th scope="col">Zdjęcie poglądowe</th>
                    <th scope="col">Pobieranie</th>

                </tr>
            </thead>
            <?php
            $orders_stmt = "SELECT * FROM products WHERE product_id IN (SELECT product_id FROM order_info WHERE order_id IN (SELECT order_id FROM orders WHERE user_id LIKE " . $_SESSION['user_idx'] . " ))";
            $orders = $db_con->query("SELECT * FROM products WHERE product_id IN (SELECT product_id FROM order_info WHERE order_id IN (SELECT order_id FROM orders WHERE user_id LIKE " . $_SESSION['user_idx'] . " ))");
            while ($order = $orders->fetch()) {
                ?>
                <tr>
                <td><?=$order['product_name']?></td>
                <td><img src="<?=$order['image']?>" class="border border-grey rounded" alt='Zdjęcie produktu'></td>
                <td><a class='buttonAdd btn' href="<?=$order['image']?>" download>Pobierz zdjęcie</a></td>
                </tr>
            <?php
            }

            ?>
        </table>
    </main>
</div>
<?php
include('footer.php'); ?>
