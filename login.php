<?php
    include('header.php');
    ?>
<main>
<section class="vh-150  gradient-custom">
  <div class="container  py-5 h-60">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-light text-dark" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Zaloguj</h2>
              <p class="text-black-50 mb-4">Wprowadź dane do logowania</p>
              <form method="post">
              <div class="form-outline form-white mb-4">
                <input type="email" name="email" class="form-control form-control-lg" />
                <div class="form-label" for="email">Email</div>
              </div>

              <div class="form-outline  form-white mb-4">
                <input type="password" name="password" class="form-control  form-control-lg" />
                <div class="form-label" for="password">Hasło</div>
              </div>

              <button class="buttonBlue buttonSearch" name="login" type="submit">Zaloguj</button>
            </form>
            <h1><?=$napis?></h1>

           

            </div>

            <div>
              <p class="mb-0">Nie posiadasz konta? <a href="register.php" class="text-dark fw-bold">Zarejestruj się!</a>
              </p>
            </div>

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
