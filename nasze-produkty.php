<?php
    include('header.php');
    ?>
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
<?php
    include('footer.php');
    ?>
