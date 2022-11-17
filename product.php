<?php
    include('header.php');
    ?>
<main>
    <div class="container">
        <div class="row">
                <?php
                    $id=$_POST['produkt'];
                    $stmt=$db_con->query("SELECT * from products where product_id='$id'");
                    while($row=$stmt->fetch()){  
                        $cat_id=$row['category_id'];
                        $stmt1=$db_con->query("SELECT * from categories where category_id='$cat_id'");
                        while($row1=$stmt1->fetch()){                   
                ?>
            <div class="col-md-12 col-xl-6">
                <img class="productImage" src="<?=$row['image']?>">
                <p class="productTitle"><?=$row['product_name']?></p>
            </div>
            <div class="col-md-12 col-xl-6">
                <p class="productDescription">Kategoria: <?=$row1['category_name']?></p>
                <p class="productDescription"><?=$row['description']?></p>
                <p class="productDescription">cena: <?=$row['price']?>$</p>
                <p class="productDescription">Ilość w magazynie: <?=$row['quantity']?></p>
            </div>
            <?php
                    }
                }
            ?>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="slickSlider">
                    <div><img src="pictures/Certyfikat-placeholder.PNG"></div>
                    <div><img src="pictures/Certyfikat-placeholder.PNG"></div>
                    <div><img src="pictures/Certyfikat-placeholder.PNG"></div>
                    <div><img src="pictures/Certyfikat-placeholder.PNG"></div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
    include('footer.php');
    ?>
