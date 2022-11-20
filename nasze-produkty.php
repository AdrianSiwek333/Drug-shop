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
                                <input class="buttonClear" type="reset" value="Wyczyść filtr">
                                <button class="buttonBlue buttonSearch" type="submit">Szukaj</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <?php
                        $stmt=null;
                            if(!isset($_POST['search'])&& !isset($_POST['price_begin']) && !isset($_POST['price_end'])){
                                $stmt = $db_con->query("SELECT * FROM products");
                            }else{
                                if($_POST['price_begin']==null){
                                    $_POST['price_begin']=1;
                                }
                                if($_POST['price_end']==null){
                                    $_POST['price_end']=100000;
                                }
                                if(!isset($_POST['categories'])){
                                    $stmt = $db_con->query("SELECT * FROM products WHERE product_name like '".$_POST['search']."%' AND price BETWEEN '".$_POST['price_begin']."' AND '".$_POST['price_end']."'");
                                }else{
                                    $stmt = $db_con->query("SELECT * FROM products WHERE product_name like '".$_POST['search']."%' AND price BETWEEN '".$_POST['price_begin']."' AND '".$_POST['price_end']."' AND category_id like '".$_POST['categories']."'");
                                }
                            }
                            while ($row = $stmt->fetch()) {

                                ?>
                                <div class='col-md-12 col-lg-6 col-xxl-4 productsShowcase active'>
                                <div class='imgShowcase'>
                                <img src="<?=$row['image']?>" class='img-fluid' alt='Zdjęcie produktu'>
                                </div>
                                <h4><?=$row['product_name']?> <button class="btn fav1 btn-rounded mr-1" data-toggle="tooltip" title="" data-original-title="Add to Fav">
                                       <i class="bi bi-heart"></i> 
                                 </button></h4>
                                <form method="post">
                                <button type="submit" name="produkt" value="<?=$row['product_id']?>" class="buttonBlue">Sprawdz </button>
                                
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
<?php
    include('footer.php');
    ?>
