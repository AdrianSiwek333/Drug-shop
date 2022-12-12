<?php
include('header.php'); ?>
<main>
<section>
  <div class="container py-5">
  <?php
    if (isset($_SESSION['favourite']) && !empty($_SESSION['favourite'])) {
      foreach ($_SESSION['favourite'] as $key => $val) {
          ?>
    <div class="row justify-content-center mb-3">
      <div class="col-md-12 col-xl-10">
        <div class="card shadow-0 border rounded-3">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                <div class="bg-image hover-zoom ripple rounded ripple-surface">
                  <img src="<?=$val['image']?>"
                    class="w-100 border border-grey rounded" />
                  <a href="#!">
                    <div class="hover-overlay">
                      <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-lg-6 col-xl-6">
                <h5><?=$val['product_name']?></h5>
                <div class="d-flex flex-row">
                  <div class="text-danger mb-1 me-2">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
                <div class="mt-1 mb-0 text-muted small">
                  <span>Opis produktu</span>
                </div>
                <p>
                 <?=$val['description']?>
                </p>
              </div>
              <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                <div class="d-flex flex-row align-items-center justify-content-center mb-1">
                  <h4 class="mb-1 me-1"><?=$val['price']?> $</h4>
                </div>
                <div class="row">
                    <form method="post">
                    <button type="submit" name="produkt" value="<?=$val['product_id']?>" class="buttonBlue">Sprawdź</button>
                    <div class="row">
                    <div class="col-2">
                    </div>
                      <div class="col-4 justify-content-right">
                      <a href="actions.php?action_type=add_item&product_id=<?= $row['product_id'] ?>&product_name=<?= $row['product_name'] ?>&image=<?= $row['image'] ?>&quantity=1&price=<?= $row['price'] ?>&description=<?=$row['description']?>"
                                    class="btn btn-dark btn-rounded mr-1"> Kup</a>
                      </div>
                      <div class="col-4">
                                    <a type="button" href="favouritescript.php?action_type=remove_item&index=<?= $key ?>"
                            class="btn btn-danger btn-md mb-2" data-mdb-toggle="tooltip">
                                    Usuń

                                </a>
                        </div>
                    </div>
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
    else{
      ?>
      <div class="row justify-content-center align-items-center">
        <div class="col-6">
    <h1>Twoje ulubione są puste</h1>
    <p>Wygląda na to, że nie dodałeś jeszcze nic do ulubionych. Może spodoba Ci się któryś z naszych produktów?
    </div>
    <div class="col-6">
    <a href="nasze-produkty.php" class="buttonBlue">Nasze produkty</a>
    </div>
    </div>
      <?php
    }
    ?>
  </div>
</section>
</main>
<?php
include('footer.php');
?>
