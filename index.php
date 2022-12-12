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
        
            
            <div class="col-md-12">
               <div class="row bsp_row-underline">
                  <div class="col-md-8">
                     <span class="pull-left bsp_deal-text">Polecane Produkty</span>
                  </div>
               </div>
               <div class="row">
               <?php
            $stmt=$db_con->query('SELECT * from products where category_id="3" LIMIT 4');
            while($row=$stmt->fetch())
            {

?>
                  <div class="col-lg col-md col-sm-6  bsp_padding-0">
                     <div class="bsp_bbb_item ">
                        <img src="<?= $row['image']?>" class="bsp_image">
                        <h5 class="bsp_card-title"><?= $row['product_name']?></h5>
                        <div class="text-center">
                        <p class="bsp_card-text"><?= $row['price']?> $</p>
                        <form method="post">
                    <button type="submit" name="produkt" value="<?=$row['product_id']?>" class="buttonBlue">Sprawdź</button>
                    </form>
                      <p><?= $row['description']?></p>
                        </div>
                     </div>
                     
                  </div>
           
                  <?php } ?>
            
            </div></div>
            
            <div class="row bsp_row-underline">
            <div class="col-md-8">
                     <span class="pull-left bsp_deal-text">Ogłoszenia</span>
                  </div>

            </div>
        <div class="row">
            <div class="col-md-12">

            <?php
            $stmt=$db_con->query('SELECT * from posts where type="main"');
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
            <div class="row bsp_row-underline">
            <div class="col-md-8">
                     <span class="pull-left bsp_deal-text">Nasze Produkty</span>
                  </div>

            </div>
            <div class="slickProduct">

            <?php

                    $stmt=$db_con->query("SELECT * from products");
                    while($row=$stmt->fetch()){

                    ?>
                <div class="productSlickInfo">
                    <img src="<?=$row['image']?>">
                    <p><?=$row['product_name']?></p>
                    <form method="post">
                    <button type="submit" name="produkt" value="<?=$row['product_id']?>" class="buttonBlue">Sprawdz</button>
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

