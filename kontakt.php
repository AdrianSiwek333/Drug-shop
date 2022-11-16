<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <title>Kontakt</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dob-Med - Polska firma farmaceutyczna">
    <meta name="keywords" content="Leki,Dob-Med,firma farmaceutyczna">
    <title>Dob-Med</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-migrate@3.4.0/dist/jquery-migrate.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <?php
    include('db_con.php');
    ?>
</head>
<body>
<header>
    <nav class="mainMenu navbar navbar-expand-lg">
        <div class="container-fluid">
            <div class="logo navbar-brand">
                <a href="index.php">
                    <img src="logov3.png" alt="logo">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list"></i>
            </button>
            <div class="menuTop collapse navbar-collapse" id="navbarText">
                <ul class="menu navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="o-nas.php">O Nas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="nasze-produkty.php">Nasze produkty</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kontakt.php">Kontakt</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<main>
    <div class="contact">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2437.215713417239!2d21.05835225209207!3d52.34837277968277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ec8b17d97b391%3A0xf6218e9b49a6253f!2sS%C5%82odka%2018%2C%2003-290%20Warszawa!5e0!3m2!1spl!2spl!4v1648586382660!5m2!1spl!2spl" frameborder="0" style="border:0;" allowfullscreen></iframe>
        </div>
        <div class="howToContact">
            <div class="container-xl">
                <div class="row">
                    <div class="col-12">
                        <div class="contactHeader">
                            <h1>Jak się z nami skontaktować</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-xl-8">
                        <form action="" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
                            <div style="display: none;">
                                <input type="hidden" name="_wpcf7" value="31" />
                                <input type="hidden" name="_wpcf7_version" value="5.5.6" />
                                <input type="hidden" name="_wpcf7_locale" value="pl_PL" />
                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f31-o1" />
                                <input type="hidden" name="_wpcf7_container_post" value="0" />
                                <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <span class="wpcf7-form-control-wrap text-1"><input type="text" name="text-1" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required formName" aria-required="true" aria-invalid="false" placeholder="Imię" /></span>
                                </div>
                                <div class="col-6">
                                    <span class="wpcf7-form-control-wrap text-2"><input type="text" name="text-2" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required formSurname" aria-required="true" aria-invalid="false" placeholder="Nazwisko" /></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <span class="wpcf7-form-control-wrap email-4"><input type="email" name="email-4" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email formEmail" aria-required="true" aria-invalid="false" placeholder="Adres e-mail" /></span>
                                </div>
                                <div class="col-6">
                                    <span class="wpcf7-form-control-wrap text-3"><input type="text" name="text-3" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required formSubject" aria-required="true" aria-invalid="false" placeholder="Temat" /></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <span class="wpcf7-form-control-wrap textarea"><textarea name="textarea" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea formText" aria-invalid="false" placeholder="Treść"></textarea></span></p>
                                    <div class="toRight">
                                        <input type="submit" value="Prześlij" class="wpcf7-form-control has-spinner wpcf7-submit formSubmit" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-12 col-xl-4">
                        <div class="contactData">
                            <div class="title">
                                <i class="bi bi-phone"></i>Telefon
                            </div>
                            <div class="mainInformation">
                                34 373 28 22
                            </div>
                            <div class="moreInformation">
                                Infolinia dostępna w godzinach 8:00 - 16:00
                            </div>
                        </div>
                        <div class="contactData">
                            <div class="title">
                                <i class="bi bi-envelope"></i>E-mail
                            </div>
                            <div class="mainInformation">
                                wsparcie@dob-med.com
                            </div>
                            <div class="moreInformation">
                                Pracownicy odpisują na wiadomości ze skrzynki pocztowej w godzinach 8:00 - 16:00
                            </div>
                        </div>
                        <div class="contactData">
                            <div class="title">
                                <i class="bi bi-building"></i>Adres
                            </div>
                            <div class="mainInformation">
                                Warszawa ul. Słodka 18
                            </div>
                            <div class="moreInformation">
                                Firma otwarta w godzinach 8:00 - 16:00
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="information col-sm-12 col-md-4">
                <div class="name">
                    <h2>DOB-MED</h2>
                </div>
                <div class="description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed bibendum mollis lectus vitae fermentum. Ut nec varius erat. Nullam elementum quam tellus, eget egestas lorem consectetur et.
                </div>
            </div>
            <div class="menuBottom col-sm-12 col-md-4">
                <ul class="menu">
                    <li>
                        <a href="o-nas.php">O Nas</a>
                    </li>
                    <li>
                        <a href="nasze-produkty.php">Nasze produkty</a>
                    </li>
                    <li>
                        <a href="kontakt.php">Kontakt</a>
                    </li>
                </ul>
            </div>
            <div class="contact col-sm-12 col-md-4">
                <ul>
                    <li><i class="bi bi-phone"></i><span>34 373 28 22</span></li>
                    <li><i class="bi bi-envelope"></i><span>wsparcie@dob-med.com</span></li>
                    <li><i class="bi bi-building"></i><span>Warszawa ul. Słodka 18</span></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</body>
</html>