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

              <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
              <p class="text-white-50 mb-5">Please enter your login and password!</p>

              <div class="form-outline form-white mb-4">
                <input type="email" id="email" class="form-control form-control-lg" />
                <div class="form-label" for="email">Email</div>
              </div>
              <div class="form-outline  form-white mb-4">
                <input type="login" id="login" class="form-control  form-control-lg" />
                <div class="form-label" for="login">Login</div>
              </div>

              <div class="form-outline  form-white mb-4">
                <input type="fname" id="fname" class="form-control  form-control-lg" />
                <div class="form-label" for="fname">Imię</div>
              </div>
              <div class="form-outline  form-white mb-4">
                <input type="lname" id="lname" class="form-control  form-control-lg" />
                <div class="form-label" for="lname">Nazwisko</div>
              </div>
              
              
              <div class="form-outline  form-white mb-4">
                <input type="password" id="password" class="form-control  form-control-lg" />
                <div class="form-label" for="password">Hasło</div>
              </div>


              <button class="buttonBlue buttonSearch" type="submit">Zarejestruj</button>

              <p class="mb-0">Masz konto? <a href="#!" class="text-dark fw-bold">Zaloguj się</a>

            </div>

            <div>
              
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
<?php
    include('footer.php');
    ?>
