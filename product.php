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
             <div class="card">
             <div class="card-body">
             <h2 class="card-title"><?=$row['product_name']?></h2>
             <h6 class="card-subtitle">Kategoria: <?=$row1['category_name']?></h6>
             <div class="row">
             <div class="col-lg-5 col-md-5 col-sm-6">
             <div class="white-box text-center"><img class="productImage" src="<?=$row['image']?>">
             </div> </div>
             <div class="col-lg-7 col-md-7 col-sm-6">
                    <h4 class="box-title mt-5">Opis Produktu</h4>
                    <p><?=$row['description']?></p>
                    <p>Ilość w magazynie: <?=$row['quantity']?></p>
                    
                    <h2 class="mt-4">
                    Cena: <?=$row['price']?>$
                    </h2>
                    <button class="btn fav btn-rounded mr-1" data-toggle="tooltip" title="" data-original-title="Add to Fav">
                   
                   <i class="bi bi-heart"></i> 
                   </button>

                    <button class="btn btn-dark btn-rounded mr-1" data-toggle="tooltip" title="" data-original-title="Add to cart">
                   
                    <i class="bi bi-bag cart"></i>   
                    </button>
                    <button class="btn btn-primary btn-rounded">Kup Teraz</button>
                    <h3 class="box-title mt-5"></h3>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check"></i>Produkt Dostępny</li>
                        <li><i class="bi bi-check"></i>Szybka wysyłka </li>
                        <li><i class="bi bi-check"></i>Zaufana Firma</li>
                    </ul>
                <br> <br> <br> <br> <br> <br> <br> <br> <br>
            </div>
            
            </div>
             
            <?php
                    }
                }
            ?>
            
        </div>  
    
</main> 
<?php
    include('footer.php');
    ?>
