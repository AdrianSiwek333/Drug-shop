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
    <link rel="icon" type="image/x-icon" href="pictures/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-migrate@3.4.0/dist/jquery-migrate.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <?php
    include('db_con.php');
    include('kod.php');
    if (isset($_COOKIE['login'])) {
        session_start();
        $_SESSION['login'] = 1;
    }
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
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
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
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Zaloguj</a>
                        </li>
                        <a class="nav-link" href="register.php">Rejestracja</a>
                        </li>
                        </li>
                        <a class="nav-link" href="favourite.php">Ulubione <i class="bi bi-heart"></i> </a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cart.php">Koszyk
                                <i class="bi bi-bag"></i>

                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
