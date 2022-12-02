<?php
    include('header.php');
    ?>
<main>
    <script>
        function numOnly(event) {
            var key = event.keyCode;
            return ((key >= 48 && key <= 57) || (key >= 96 && key <= 105) || key == 8 || key == 13 || key == 17);
        };
    </script>
    <div class="product">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title_product">Nasze produkty</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="filter">
                        <div class="sidebar">
                            <form method="POST" action="nasze-produkty.php">
                                <input type="text" name="search" class="searchInput">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" onkeydown="return numOnly(event);" inputmode="numeric" placeholder="od" min="1" name="price_begin" class="price priceBegin">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" onkeydown="return numOnly(event);" inputmode="numeric" placeholder="do" name="price_end" class="price priceEnd">
                                    </div>
                                </div>
                                <p>Kategorie</p>
                                <?php
                                    $categories=$db_con->query("SELECT category_id, category_name FROM categories");
                                    while ($row = $categories->fetch()){
                                        ?>
                                        <input type="radio" id="<?php print($row['category_id']); ?>" value="<?php print($row['category_id']); ?>" name="categories">
                                        <label for="<?php print($row['category_id']); ?>"><span><?php print($row['category_name']); ?></span></label>
                                    <?php }
                                ?>
                                <p>Sposób wyświetlania</p>
                                <input type="radio" id="kafelki" value="kafelki" name="wyswietl"><label for="kafelki"><span>Kafelki</span></label>
                                <input type="radio" id="lista" value="lista" name="wyswietl"><label for="lista"><span>Lista</span></label>
                                <input class="buttonClear" type="reset" value="Wyczyść filtr">
                                <button class="buttonBlue buttonSearch" type="submit">Szukaj</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <?php
                        $maxPrice=$db_con->query("SELECT MAX(price) from products");
                        $maxPrice=$maxPrice->fetch();
                        $valMaxPrice=0+$maxPrice[0];
                        $minPrice=$db_con->query("SELECT MIN(price) from products");
                        $minPrice=$minPrice->fetch();
                        $valMinPrice=0+$minPrice[0];
                        $stmt=null;
                            if(!isset($_POST['search'])&& !isset($_POST['price_begin']) && !isset($_POST['price_end'])){
                                $stmt = $db_con->query("SELECT * FROM products");
                            }else{
                                if($_POST['price_begin']==null){
                                    $_POST['price_begin']=$valMinPrice;
                                }
                                if($_POST['price_end']==null){
                                    $_POST['price_end']=$valMaxPrice;
                                }
                                if(!isset($_POST['categories'])){
                                    $stmt = $db_con->query("SELECT * FROM products WHERE product_name like '".$_POST['search']."%' AND price BETWEEN '".$_POST['price_begin']."' AND '".$_POST['price_end']."'");
                                }else{
                                    $stmt = $db_con->query("SELECT * FROM products WHERE product_name like '".$_POST['search']."%' AND price BETWEEN '".$_POST['price_begin']."' AND '".$_POST['price_end']."' AND category_id like '".$_POST['categories']."'");
                                }
                            }
                            while ($row = $stmt->fetch()) {
                                if(!isset($_POST['wyswietl']) || $_POST['wyswietl']=='kafelki'){
                                ?>
                                <div class='col-md-12 col-lg-6 col-xxl-4 productsShowcase active'>
                                <div class='imgShowcase'>
                                <img src="<?=$row['image']?>" class='img-fluid' alt='Zdjęcie produktu'>
                                </div>
                                <h4><?=$row['product_name']?> <button class="btn fav1 btn-rounded mr-1" data-toggle="tooltip" title="" data-original-title="Add to Fav">
                                       <i class="bi bi-heart"></i> 
                                 </button></h4>
                                 <p style="text-align: center;"><?=$row['price']?>$ </p>
                                <form method="post">
                                <button type="submit" name="produkt" value="<?=$row['product_id']?>" class="buttonBlue">Sprawdź</button>
                                
                            </form>
                                </div>
                                <?php
                                }
                                else{
                                    ?>

                                
                                <div class="row justify-content-center mb-3">
                                <div class="col-md-12 col-xl-10">
                                    <div class="card shadow-0 border rounded-3">
                                    <div class="card-body">
                                        <div class="row">
                                        <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                            <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                            <img src="<?=$row['image']?>"
                                                class="w-100" />
                                            <a href="#!">
                                                <div class="hover-overlay">
                                                <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                                </div>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xl-6">
                                            <h5><?=$row['product_name']?></h5>
                                            <div class="d-flex flex-row">
                                            <div class="text-danger mb-1 me-2">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            </div>
                                            <div class="mt-1 mb-0 text-muted small">
                                            <span>Kategoria</span>
                                            </div>
                                            <p class="text-truncate mb-4 mb-md-0">
                                            <?=$row['description']?>
                                            </p>
                                        </div>
                                        <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                            <div class="d-flex flex-row align-items-center mb-1">
                                            <h4 class="mb-1 me-1"><?=$row['price']?> $</h4>
                                            </div>
                                            <h6 class="text-success">Free shipping</h6>
                                            <div class="d-flex flex-column mt-4">
                                                <form method="post">
                                                <button type="submit" name="produkt" value="<?=$row['product_id']?>" class="buttonBlue">Sprawdź</button>
                                                <a href="actions.php?action_type=add_item&product_id=<?= $row['product_id'] ?>&product_name=<?= $row['product_name'] ?>&image=<?= $row['image'] ?>&quantity=1&price=<?= $row['price'] ?>"
                                                                class="btn btn-dark btn-rounded mr-1"> <i class="bi bi-bag cart"></i></a>
                                            </form>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <?php 
                                }                       
                            }
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
    include('footer.php');
    ?>
