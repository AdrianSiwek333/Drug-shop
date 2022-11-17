<?php
    include('header.php');
    ?>

<section class="vh-100  gradient-custom">
  <div class="container  py-5 h-60">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-light text-dark" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Please enter your login and password!</p>

              <div class="form-outline form-white mb-4">
                <input type="email" id="typeEmailX" class="form-control form-control-lg" />
                <div class="form-label" for="typeEmailX">Email</div>
              </div>

              <div class="form-outline  form-white mb-4">
                <input type="password" id="typePasswordX" class="form-control  form-control-lg" />
                <div class="form-label" for="typePasswordX">Password</div>
              </div>

              <p class="small mb-5 pb-lg-2  loginbtn "><a class="text-dark-50" href="#!">Forgot password?</a></p>

              <button class="buttonBlue buttonSearch" type="submit">Login</button>

           

            </div>

            <div>
              <p class="mb-0">Don't have an account? <a href="#!" class="text-dark fw-bold">Sign Up</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
    include('footer.php');
    ?>