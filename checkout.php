<?php
include('header.php');
if(!isset($_SESSION['cart']) || $_SESSION['cart']==null){
    header("Location: index.php");
}
?>
    <script>
        function numOnly(event) {
            var key = event.keyCode;
            return ((key >= 48 && key <= 57) || (key >= 96 && key <= 105) || key == 8 || key == 13 || key == 17);
        };
    </script>
    <style>
        label::before {
            visibility: hidden;
        }

        label::after {
            visibility: hidden;
        }
    </style>

    <div class="container">
        <div class="py-5 text-center">
            <h2>Płatność</h2>
        </div>

        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Twój koszyk</span>
                    <span class="badge badge-secondary badge-pill">3</span>
                </h4>
                <?php
                $Total = 0;
                if (isset($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as $key => $val) {
                $totalPrice = $val['price'];
                $Total = $Total + $totalPrice;
                ?>
                <ul class="list-group mb-3 sticky-top">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0"><?php echo $val['product_name']; ?></h6>
                            <img style="height: auto; max-width: 200px;" src="<?php echo $val['image']; ?>"
                                 alt="Zdjęcie produktu">
                        </div>
                        <span class="text-muted"><?php echo $val['price']; ?> $</span>
                    </li>
                    <?php
                    }
                    ?>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Łączna cena (USD)</span>
                        <strong><?php echo $Total; ?> $</strong>
                        <?php
                        }
                        ?>
                    </li>
                </ul>
            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Informacje rozliczeniowe</h4>
                <form method="post" class="needs-validation" action="checkout.php">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Imię</label>
                            <input type="text" name="fname" class="form-control" id="firstName" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Nazwisko</label>
                            <input type="text" name="lname" class="form-control" id="lastName" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" required>
                    </div>
                    <hr class="mb-4">
                    <h4 class="mb-3">Dane karty kredytowej</h4>
                    <div class="row">
                        <div class="mb-3">
                            <label for="cc-number">Numer karty kredytowej</label>
                            <input type="text" class="form-control" maxlength="16" onkeydown="return numOnly(event);" id="cc-number" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="cc-expiration">Data ważności</label>
                            <input type="date" class="form-control" id="cc-expiration" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cc-cvv">CVV / CVC (Kod bezpieczeństwa)</label>
                            <input type="text" class="form-control" id="cc-cvv"  onkeydown="return numOnly(event);" maxlength="3" required>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <button name="checkoutBtn" class="btn btn-primary btn-lg btn-block" type="submit">Continue to
                        checkout
                    </button>
                </form>
                <?php
                if (isset($_POST['checkoutBtn'])) {
                    $date = date('Y-m-d');
                    $time = date('H:i:s');
                    $fname = $_POST['fname'];
                    $lname = $_POST['lname'];
                    $email = $_POST['email'];
                    $user_id = $_SESSION['user_idx'];
                    $sql_stmt = "INSERT INTO orders (user_id, order_date, order_time, total_price, fname, lname) VALUES (
                    '" . $user_id . "', '" . $date . "', '".$time."', '" . $Total . "','" . $fname . "','" . $lname . "');";
                    $commit = $db_con->query($sql_stmt);
                    $order_id_stmt = $db_con->query("SELECT * from ORDERS where user_id like " . $user_id . " AND order_date like '" . $date . "' AND order_time like '" . $time . "' AND total_price like '" . $Total . "%%%' AND fname like '" . $fname . "'  AND lname like '" . $lname . "';");
                    $result=$order_id_stmt->fetch();
                    $result_oid = $result['order_id'];
                    if (isset($_SESSION['cart'])) {
                        foreach ($_SESSION['cart'] as $key => $val) {
                            $sql_oid = "INSERT INTO order_info (order_id, product_id) VALUES (
                                                      '".$result_oid."', '".$val['product_id']."')";
                            $oinfocommit=$db_con->query($sql_oid);
                        }
                    }
                    echo "<script> location.href='order-download.php'; </script>";
                    exit;
                }
                ?>
            </div>
        </div>
    </div>
    <br>
<?php
include('footer.php');
?>
