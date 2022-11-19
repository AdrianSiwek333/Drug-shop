<?php
    include('header.php');
    session_start();
    ?>
      <div class="col-md-12">
          <h5 class="text-center">Cart Items</h5>
          <?php 
          $Total=0;
          if(isset($_SESSION['cart'])) { ?>
          <table class="table table-bordered">
              <thead>
                 <th>SN</th>
                 <th>Product</th>
                 <th>Quantity</th>
                 <th>Price</th>
                 <th>Options</th>
              </thead>
              <tbody>
                <?php
                $index =0;
                $i=1;
                foreach($_SESSION['cart'] as $key => $val) {   
                  $totalPrice = $val['quantity'] * $val['price'];
                  $Total = $Total + $totalPrice;
                  ?>            
                <tr>
                   <td><?=$i++?></td> 
                   <td><?=$val['product_name']?></td> 
                   <td><?=$val['quantity']?></td>  
                   <td><?=$totalPrice?></td> 
                   <td><a href="actions.php?action_type=remove_item&index=<?=$key?>">Remove </a></td>
                </tr>
              <?php $index++; } ?>
              <tr>
                <td></td>
                <td></td>
                <td><b>Total</b></td>
                <td><?=$Total?></td>
                <td></td>
              </tr>
              </tbody>

          </table>
        <?php } ?>
        </div>
<section class="h-100 gradient-custom">
  <div class="container py-5">
    <div class="row d-flex justify-content-center my-4">
      <div class="col-md-8">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">Cart - 2 items</h5>
          </div>
          <div class="card-body">
            <!-- Single item -->
            <div class="row">
             

            <!-- Single item -->
            <div class="row">
              <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <!-- Image -->
                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/13a.webp"
                    class="w-100" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                  </a>
                </div>
                <!-- Image -->
              </div>

              <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                <!-- Data -->
                <p><strong>Red hoodie</strong></p>
                <p>Color: red</p>
                <p>Size: M</p>

                <button type="button" class="btn btn-primary btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
                  title="Remove item">
                  <i class="fas fa-trash"></i>
                </button>
                <button type="button" class="btn btn-danger btn-sm mb-2" data-mdb-toggle="tooltip"
                  title="Move to the wish list">
                  <i class="fas fa-heart"></i>
                </button>
                <!-- Data -->
              </div>

              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <!-- Quantity -->
                <div class="d-flex mb-2" style="max-width: 300px">
                  <button class="buttonAdd">
                  -
                  </button>
                  <div class="form-outline">
                    <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control" />
                   
                  </div>
                  <button class=" buttonAdd">
                    +
                  </button>
                </div>
                <!-- Quantity -->

                <!-- Price -->
                <p class="text-start text-md-center">
                  <strong>$17.99</strong>
                </p>
                <!-- Price -->
              </div>
            </div>
            <!-- Single item -->
          </div>
        </div>
        <div class="card mb-4">
          <div class="card-body">
            <p><strong>Expected shipping delivery</strong></p>
            <p class="mb-0">12.10.2020 - 14.10.2020</p>
          </div>
        </div>
        
      </div>
      <div class="col-md-12">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">Summary</h5>
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                Products
                <span>$53.98</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                Shipping
                <span>Gratis</span>
              </li>
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                <div>
                  <strong>Total amount</strong>
                  <strong>
                    <p class="mb-0">(including VAT)</p>
                  </strong>
                </div>
                <span><strong>$53.98</strong></span>
              </li>
            </ul>

            <button type="button" class="buttonBlue buttonSearch">
              Go to checkout
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
<?php
    include('footer.php');
    ?>
