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
            <h5 class="mb-0">Cart</h5>
          </div>
          <?php
    if (isset($_SESSION['cart'])) {
      foreach ($_SESSION['cart'] as $key => $val) {
        $totalPrice = $val['quantity'] * $val['price'];
        $Total = $Total + $totalPrice;
          ?>
          <div class="card-body">

            <!-- Single item -->
            <div class="row">


              <!-- Single item -->
              <div class="row">
                <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                  <!-- Image -->
                  <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">

                    <img class="w-100" src="<?= $val['image'] ?>">

                  </div>
                  <!-- Image -->
                </div>

                <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                  <!-- Data -->
                  <p><strong>
                      <?= $val['product_name'] ?>
                    </strong></p>
                  <p>Ilość: <?= $val['quantity'] ?>
                  </p>
                  <p></p>


                  <a type="button" href="actions.php?action_type=remove_item&index=<?= $key ?>"
                    class="btn btn-danger btn-md mb-2" data-mdb-toggle="tooltip">
                    Usuń

                  </a>
                  <!-- Data -->
                </div>

                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                  <!-- Quantity -->
                  <form method="post">
                  <div class="d-flex mb-3" style="max-width: 300px">
                    
                    <button type="submit" class="buttonAdd" name="minus">
                      -
                    </button>
                    
                    <input id="form1" min="0" name="quantity" value="<?= $val['quantity'] ?>" type="number"
                      class="form-control mb-4" readonly />
                    <button class=" buttonAdd">
                      +
                    </button>
                  </div>
                  </form>
                  <!-- Quantity -->

                  <!-- Price -->
                  <p class="text-start text-md-center">
                    <strong>Price: <?= $val['price'] ?> $</strong>
                  </p>
                  <!-- Price -->
                </div>
              </div>
              <!-- Single item -->
            </div>
          </div>
          <?php
      }
    }
          ?>

        </div>

        <div class="col-md-12">
          <div class="card mb-4">
            <div class="card-header py-3">
              <h5 class="mb-0">Summary</h5>
            </div>
            <div class="card-body">
              <ul class="list-group list-group-flush">

                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                  Shipping
                  <span>Gratis</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                  <div>
                    <strong>Total amount</strong>
                    <strong>
                      <p class="mb-0">(including VAT)</p>
                    </strong>
                  </div>
                  <span><strong>
                      <?= $Total ?> $
                    </strong></span>
                </li>
              </ul>
              <?php
  if (isset(($_SESSION['login'])) && ($_SESSION['login'] == 1 || $_SESSION['login'] == 2)) {

  ?>
              <button type="button" class="buttonBlue buttonSearch">
                Go to checkout
              </button>
  <?php
  }
  else{
    ?>
    <a href="login.php" class="buttonBlue buttonSearch">
    Zalogowane wymagane do zakupu
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
