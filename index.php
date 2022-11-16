<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <title>Dob-Med</title>
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
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="siteTitle">Strona Główna</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-3 entryBody">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="pictures/wpis-placeholder.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Wpis</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget venenatis tellus, non pharetra est. Nam at purus id quam feugiat scelerisque non id sem. Donec ac odio orci. Sed elit enim, bibendum nec arcu non, venenatis iaculis velit. Maecenas scelerisque vitae lacus id fringilla. Morbi quis magna pellentesque velit congue eleifend a rutrum arcu. Pellentesque faucibus eget dui non pretium. Mauris condimentum massa at gravida blandit. Donec elit lectus, lobortis a purus vitae, porttitor aliquam libero. Cras rutrum aliquam leo, at ultrices libero blandit vel. Nam nec risus odio. Aliquam condimentum tortor quam, non vehicula felis convallis eu. Nam luctus accumsan porta. Praesent a varius elit, vehicula egestas sem. Nam tempus velit sit amet arcu congue dictum. Proin tristique vitae ligula ac feugiat. Suspendisse ultrices malesuada ex at consequat. In congue vel elit vulputate imperdiet. Morbi fringilla neque et urna lobortis, a placerat nunc malesuada. Suspendisse eu mattis tortor. Vivamus ultricies mi non augue rutrum porttitor. Duis et rhoncus massa. Fusce porta erat in erat feugiat, eu dignissim nibh lobortis. Sed a venenatis sem, eget porta elit. Aenean nec mauris erat. Phasellus sit amet egestas purus, vitae mattis lorem. Mauris nec tincidunt nisi. Ut condimentum mattis aliquet.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="siteSpliter">

            </div>
            <div class="slickProduct">
                <div class="productSlickInfo">
                    <img src="pictures/m011t167_nasal_spray_01.jpg">
                    <p>Anty-Katar</p>
                    <a class="buttonBlue" href="anty-katar.php">Sprawdź</a>
                </div>
                <div class="productSlickInfo">
                    <img src="pictures/20_Sep-Dropper_Bottle_03.jpg">
                    <p>Anty-Bóle brzucha</p>
                    <a class="buttonBlue" href="anty-bol-brzucha.php">Sprawdź</a>
                </div>
                <div class="productSlickInfo">
                    <img src="pictures/m018t041_march_0122_medicine_bottle_mockup_01.jpg">
                    <p>Anty-Ból głowy</p>
                    <a class="buttonBlue" href="anty-bol-glowy.php">Sprawdź</a>
                </div>
                <div class="productSlickInfo">
                    <img src="pictures/m020t022_feb1822_pill_jar_01.jpg">
                    <p>Anty-Kaszel</p>
                    <a class="buttonBlue" href="anty-kaszel.php">Sprawdź</a>
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