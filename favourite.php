<?php
include('header.php'); ?>
<div class="product">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="title_product">Ulubione Produkty</h1>
            </div>
        </div>
        <div class="row">

            <div class="col-md-12">
                <div class="row">
                    <?php


                    $stmt = $db_con->query("SELECT * FROM products");
                    while ($row = $stmt->fetch()) {

                    ?>
                    <div class='col-md-12 col-lg-4 col-xxl-2 productsShowcase active'>
                        <div class='imgShowcase'>
                            <img src="<?= $row['image'] ?>" class='img-fluid' alt='Zdjęcie produktu'>
                        </div>
                        <h4><?= $row['product_name'] ?>

                            </button></h4>
                        <form method="post">
                            <button type="submit" name="produkt" value="<?= $row['product_id'] ?>"
                                class="buttonBlue">Sprawdz </button>

                        </form>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</main>