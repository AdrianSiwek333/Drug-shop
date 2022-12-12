<?php
include('header.php');
?>
<main>
    <div class="col-md-12">

        <?php
        $Total = 0;
        ?>
    </div>

    <section class="h-100 gradient-custom">

        <div class="container py-5">
            <div class="row d-flex justify-content-center my-4">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Koszyk</h5>
                        </div>
                        <?php
                        if (isset($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $key => $val) {
                                $totalPrice = $val['price'];
                                $Total = $Total + $totalPrice;
                                ?>
                                <div class="card-body">

                                    <div class="row">


                                        <div class="row">
                                            <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                                                <div class="bg-image hover-overlay hover-zoom ripple rounded"
                                                     data-mdb-ripple-color="light">

                                                    <img class="w-100 border border-grey rounded" src="<?= $val['image'] ?>">

                                                </div>
                                            </div>

                                            <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                                                <p><strong>
                                                        <?= $val['product_name'] ?>
                                                    </strong></p>
                                                <p></p>
                                                <p><?=$val['description']?></p>


                                                <a type="button"
                                                   href="actions.php?action_type=remove_item&index=<?= $key ?>"
                                                   class="btn btn-danger btn-md mb-2" data-mdb-toggle="tooltip">
                                                    Usuń

                                                </a>
                                            </div>

                                            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                                <p class="text-start text-md-center">
                                                    <strong>Cena: <?= $val['price'] ?> $</strong>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                
                                <?php
                            }
                        }
                        ?>

                    </div>

                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-header py-3">
                                <h5 class="mb-0">Podsumowanie</h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">

                                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                        Przesyłka
                                        <span>Gratis</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                        <div>
                                            <strong>Łączna cena</strong>
                                            <strong>
                                                <p class="mb-0">(wliczając VAT)</p>
                                            </strong>
                                        </div>
                                        <span><strong>
                      <?= $Total ?> $
                    </strong></span>
                                    </li>
                                </ul>
                                <?php
                                if (isset(($_SESSION['login'])) && ($_SESSION['login'] == 1 || $_SESSION['login'] == 2)) {
                                    if (isset($_SESSION['cart']) && $_SESSION['cart'] != null) {
                                        ?>
                                        <form method="post" action="checkout.php">
                                            <button type="submit" class="buttonBlue buttonSearch">
                                                Przejdź do płatności
                                            </button>
                                        </form>
                                        <?php
                                    } else {
                                        ?>
                                        <form method="post" action="nasze-produkty.php">
                                            <button type="submit" class="buttonBlue buttonSearch">
                                                Dodaj produkt do koszyka
                                            </button>
                                        </form>
                                        <?php
                                    }
                                } else {
                                    ?>
                                    <a href="login.php" class="buttonBlue buttonSearch">
                                        Zalogowanie wymagane do zakupu
                                    </a>
                                    <?php
                                }
                                ?>

                            </div>
                        </div>
                    </div>

                </div>

            </div>

    </section>
</main>
<?php
include('footer.php');
?>
