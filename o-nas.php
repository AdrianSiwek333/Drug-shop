<?php
    include('header.php');
    ?>
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="siteTitle">O Nas</h1>
            </div>
        </div>
        <div class="row">
            <?php

                $stmt=$db_con->query("SELECT * from posts where type='onas'");
                while($row=$stmt->fetch()){
                    ?>
            <div class="col-md-12">
                <div class="card mb-3 entryBody">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?=$row['image']?>" class="img-fluid rounded-start" alt="zdjecie">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?=$row['title']?></h5>
                                <p class="card-text"><?=$row['text']?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <?php
                }
                ?>

        </div>
    </div>
</main>
<?php
    include('footer.php');
    ?>
