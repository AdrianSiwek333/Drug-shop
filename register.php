<?php
    include('header.php');
    ?>
<div class="container-fluid">
    
<section class="vh-150  gradient-custom">
  <div class="container  py-5 h-60">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-light text-dark" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Rejestracja</h2>
              <p class="text-black-50 mb-5">Proszę podać dane do rejestracji</p>
              
              <form method="post">
              <div class="form-outline form-white mb-4">
                <input type="email" name="email" class="form-control form-control-lg" required/>
                <div class="form-label" for="email">Email</div>
              
              <div class="form-outline  form-white mb-4">
                <input type="password" name="password" class="form-control  form-control-lg" required/>
                <div class="form-label" for="password">Hasło</div>
              </div>
              <button class="buttonBlue buttonSearch" type="submit" name="register">Zarejestruj</button>

              </form>


            
                
                  <?php if(isset($_POST['register'])){
                    ?>
                <div class="row justify-content-center">
                <h1 class="fw-bold mb-2 text-uppercase"><?=$rejestracja?></h1>
                  </div> 
                <?php
                  }
                ?>
            </div>
                  
            <div>
              
          
            </div>
          </div>
            <p class="mb-0">Masz konto? <a href="login.php" class="text-dark fw-bold">Zaloguj się</a>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
<?php
    include('footer.php');
    ?>
