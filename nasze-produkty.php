<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <title>Nasze produkty</title>
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
    <div class="product">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title_product">Nasze produkty</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="filter">
                        <div class="sidebar">
                            <p>Kategorie</p>
                            <input type="radio" id="bolbrzucha" value="0" name="kategorie">
                            <label for="bolbrzucha"><span>Ból brzucha</span></label>
                            <input type="radio" id="bolglowy" value="1" name="kategorie">
                            <label for="bolglowy"><span>Ból głowy</span></label>
                            <input type="radio" id="kaszel" value="2" name="kategorie">
                            <label for="kaszel"><span>Kaszel</span></label>
                            <input type="radio" id="katar" value="3" name="kategorie">
                            <label for="katar"><span>Katar</span></label>
                            <p>Pojemność</p>
                            <input type="radio" id="50ml" value="4" name="pojemnosc">
                            <label for="50ml"><span>50 ml</span></label>
                            <input type="radio" id="100ml" value="5" name="pojemnosc">
                            <label for="100ml"><span>100 ml</span></label>
                            <input type="radio" id="12tabletek" value="6" name="pojemnosc">
                            <label for="12tabletek"><span>12 tabletek</span></label>
                            <input type="radio" id="24tabletki" value="7" name="pojemnosc">
                            <label for="24tabletki"><span>24 tabletki</span></label>
                            <p>Typ</p>
                            <input type="radio" id="plyn" value="8" name="typ">
                            <label for="plyn"><span>Płyn</span></label>
                            <input type="radio" id="spray" value="9" name="typ">
                            <label for="spray"><span>Spray</span></label>
                            <input type="radio" id="tabletki" value="10" name="typ">
                            <label for="tabletki"><span>Tabletki</span></label>
                            <input type="radio" id="tabletkiDoSsania" value="11" name="typ">
                            <label for="tabletkiDoSsania"><span>Tabletki do ssania</span></label>
                            <input class="buttonBlue buttonSearch" type="submit" value="Szukaj">
                            <input class="buttonClear" type="submit" value="Wyczyść filtr">
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <?php
                            $stmt = $db_con->query("SELECT * FROM products");
                            while ($row = $stmt->fetch()) {
                                echo "<div class='col-md-12 col-lg-6 col-xxl-4 active'>";
                                echo "<div class='imgShowcase'>";
                                echo "<img src='".$row['image']."' class='img-fluid' alt='Zdjęcie produktu'>";
                                echo "</div>";
                                echo "<h4>".$row['product_name']."</h4>";
                                echo '<a class="buttonBlue" href="product.php">Sprawdź</a>';
                                echo "</div>";                            
                            }
                            /*
                            
                            <div class="col-md-12 col-lg-6 col-xxl-4 active">
                                <div class="imgShowcase">
                                    <img src="produkt1.jpg" alt="Zdjęcie produktu">
                                </div>
                                <h4>Anty-Katar</h4>
                                <a class="buttonBlue" href="product.php">Sprawdź</a>
                            </div>
                            */
                            ?>

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
