  <?php
    include('header.php');
    ?>
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="siteTitle">Strona Główna</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

            <?php
            $stmt=$db_con->query('SELECT * from main_posts');
            while($row=$stmt->fetch())
            {

?>
                <div class="card mb-3 entryBody">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?= $row['image']?>" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?=$row['title']?></h5>
                                <p class="card-text"><?=$row['text']?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
            }
            ?>
            </div>
            <div class="siteSpliter">

            </div>
            <div class="slickProduct">

            <?php

                    $stmt=$db_con->query("SELECT * from products");
                    while($row=$stmt->fetch()){

                    ?>
                <div class="productSlickInfo">
                    <img src="<?=$row['image']?>">
                    <p><?=$row['product_name']?></p>
                    <form method="post" action="product.php">
                    <input type="submit" name="produkt" value="<?=$row['product_id']?>" class="buttonBlue"/>
                    </form>
                </div>
                    <?php
                    }
                    ?>
            </div>
        </div>
    </div>
</main>
<?php
    include('footer.php');
    ?>

