<?php
include('header.php');
/*if(!isset($_SESSION['login'])){
    header('location:index.php');
}
if($_SESSION['login']!=2){
}*/
$category_min = $db_con->query("SELECT MIN(category_id) from products");
$category_min = $category_min->fetch();
$category_min_value = $category_min[0];
$category_max = $db_con->query("SELECT MAX(category_id) from products");
$category_max = $category_max->fetch();
$category_max_value = $category_max[0];
?>
    <main>
        <script>
            function numOnly(event) {
                var key = event.keyCode;
                return ((key >= 48 && key <= 57) || (key >= 96 && key <= 105) || key == 8 || key == 13 || key == 17 || key == 190);
            };
        </script>
        <style>
            table, thead, td {
                border: solid 1px black;
            }

            label::before {
                visibility: hidden;
            }
        </style>
        <table>
            <thead>
            <td>product_id</td>
            <td>product_name</td>
            <td>price</td>
            <td>quantity</td>
            <td>category_id</td>
            <td>image source code</td>
            <td>description</td>
            <td>Przycisk edycji</td>
            <td>Przycisk usuń</td>
            </thead>
            <?php
            $stmt = $db_con->query("SELECT * FROM products");
            while ($row = $stmt->fetch()) {
                echo "<tr>";
                echo "<td>" . $row['product_id'] . "</td>";
                echo "<td>" . $row['product_name'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
                echo "<td>" . $row['quantity'] . "</td>";
                echo "<td>" . $row['category_id'] . "</td>";
                echo "<td>" . $row['image'] . "</td>";
                echo "<td>" . $row['description'] . "</td>";
                echo "<td><form method='post' action='" . $_SERVER['PHP_SELF'] . "'>
                    <input type='hidden' name='product_id' value='" . $row['product_id'] . "'>
                    <input type='hidden' name='product_name' value='" . $row['product_name'] . "'>
                    <input type='hidden' name='price' value='" . $row['price'] . "'>
                    <input type='hidden' name='quantity' value='" . $row['quantity'] . "'>
                    <input type='hidden' name='category_id' value='" . $row['category_id'] . "'>
                    <input type='hidden' name='image' value='" . $row['image'] . "'>
                    <input type='hidden' name='description' value='" . $row['description'] . "'>
                    <button name='edit' type='Submit'>Edytuj produkt</button>
                </form>
                </td>";
                echo "<td><form method='post' action='" . $_SERVER['PHP_SELF'] . "'><input type='hidden' name='product_id' value='" . $row['product_id'] . "'><button name='del' type='Submit'>Usuń produkt</button></form></td>";
                echo "</tr>";
            }
            ?>
        </table>
        <form method="post" action="product_admin.php">
            <button name="addProduct" type="submit">Dodaj nowy produkt</button>
        </form>
        <?php
        if (isset($_POST['del'])) {
            $sql_stmt = "DELETE FROM products WHERE product_id='" . $_POST['product_id'] . "'";
            $commit = $db_con->query($sql_stmt);
            $page = $_SERVER['PHP_SELF'];
            echo '<meta http-equiv="Refresh" content="0;' . $page . '">';
        }
        if (isset($_POST['edit'])) {
            echo "<form method='post' action='product_edit_admin.php'>";
            echo "<input name='product_id_c' type='hidden' value='" . $_POST['product_id'] . "'>";
            echo "<label for='product_name'>Nazwa produktu</label>";
            echo "<input type='text' name='product_name_c' id='product_name' value='" . $_POST['product_name'] . "' required>";
            echo "<label for='price'>Cena</label>";
            echo "<input type='text' name='price_c' id='price' onkeydown='return numOnly(event);' value='" . $_POST['price'] . "' required>";
            echo "<label for='quantity'>Ilość</label>";
            echo "<input type='number' name='quantity_c' min='1' id='quantity' value='" . $_POST['quantity'] . "' required>";
            echo "<label for='category_id'>ID kategorii</label>";
            echo "<input type='number' min='" . $category_min_value . "' max='" . $category_max_value . "' name='category_id_c' id='category_id' value='" . $_POST['category_id'] . "' required>";
            echo "<label for='image'>Ścieżka zdjęcia</label>";
            echo "<input type='text' name='image_c' id='image' value='" . $_POST['image'] . "' required>";
            echo "<label for='description'>Opis</label>";
            echo "<input type='text' name='description_c' id='description' value='" . $_POST['description'] . "'>";
            echo "<button name='commit' type='submit'>Zaakceptuj zmiany</button>";
            echo "</form>";
        }
        if (isset($_POST['addProduct'])) {
            echo "<form method='post' action='product_add_admin.php'>";
            echo "<label for='product_name'>Nazwa produktu</label>";
            echo "<input type='text' name='product_name_a' id='product_name' placeholder='Nazwa produktu' required>";
            echo "<label for='price'>Cena</label>";
            echo "<input type='text' name='price_a' id='price' placeholder='Cena produktu' required>";
            echo "<label for='quantity'>Ilość</label>";
            echo "<input type='number' name='quantity_a' min='1' id='quantity' placeholder='Ilość produktu' required>";
            echo "<label for='category_id'>ID kategorii</label>";
            echo "<input type='number' min='" . $category_min_value . "' max='" . $category_max_value . "' name='category_id_a' id='category_id' value='" . $category_min_value . "' required>";
            echo "<label for='image'>Ścieżka zdjęcia</label>";
            echo "<input type='text' name='image_a' id='image' placeholder='Ścieżka zdjęcia produktu' required>";
            echo "<label for='description'>Opis</label>";
            echo "<input type='text' name='description_a' id='description' placeholder='Opis produktu'>";
            echo "<button type='submit'>Dodaj użytkownika</button>";
            echo "</form>";
        }
        ?>
    </main>
<?php
include('footer.php');
?>