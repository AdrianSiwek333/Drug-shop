<?php
include('header.php');
include('admin-verification.php');
$id_min = $db_con->query("SELECT MIN(user_id) from users");
$id_min = $id_min->fetch();
$id_min_value = $id_min[0];
$id_max = $db_con->query("SELECT MAX(user_id) from users");
$id_max = $id_max->fetch();
$id_max_value = $id_max[0];
?>
 <div class="container">
<main>
    <script>
        function numOnly(event) {
            var key = event.keyCode;
            return ((key >= 48 && key <= 57) || (key >= 96 && key <= 105) || key == 8 || key == 13 || key == 17 || key == 190);
        };
    </script>
    <style>
        label::before {
            visibility: hidden;
        }
      
    </style>
  <table class="table table-bordered">
        <thead>
            <th>order_id</th>
            <th>user_id</th>
            <th>order_date</th>
            <th>order_time</th>
            <th>total_price</th>
            <th>fname</th>
            <th>lname</th>
            <th>Przycisk edycji</th>
            <th>Przycisk usuń</th>
        </thead>
        <?php
        $stmt=$db_con->query("SELECT * FROM orders");
        while($row=$stmt->fetch()){
            echo "<tr>";
            echo "<td>".$row['order_id']."</td>";
            echo "<td>".$row['user_id']."</td>";
            echo "<td>".$row['order_date']."</td>";
            echo "<td>".$row['order_time']."</td>";
            echo "<td>".$row['total_price']."</td>";
            echo "<td>".$row['fname']."</td>";
            echo "<td>".$row['lname']."</td>";
            echo "<td><form method='post' action='" . $_SERVER['PHP_SELF'] . "'>
                    <input type='hidden' name='order_id' value='" . $row['order_id'] . "'>
                    <input type='hidden' name='user_id' value='" . $row['user_id'] . "'>
                    <input type='hidden' name='order_date' value='" . $row['order_date'] . "'>
                    <input type='hidden' name='order_time' value='" . $row['order_time'] . "'>
                    <input type='hidden' name='total_price' value='" . $row['total_price'] . "'>
                    <input type='hidden' name='fname' value='" . $row['fname'] . "'>
                    <input type='hidden' name='lname' value='" . $row['lname'] . "'>
                    <button name='edit' type='Submit' class='buttonedit' >Edytuj produkt</button>
</form></td>";
            echo "<td><form method='post' action='" . $_SERVER['PHP_SELF'] . "'><input type='hidden' name='order_id' value='" . $row['order_id'] . "'><button name='del' class='buttonClear' type='Submit'>Usuń zamówienie</button></form></td>";
            echo "</tr>";
        }
        ?>
    </table>
    <?php
    if (isset($_POST['del'])) {
    $sql_stmt = "DELETE FROM orders WHERE order_id='" . $_POST['order_id'] . "'";
    $sql_stmt2= "DELETE FROM order_info WHERE order_id='".$_POST['order_id']."'";
    $commit2 = $db_con->query($sql_stmt2);
    $commit = $db_con->query($sql_stmt);
    $page = $_SERVER['PHP_SELF'];
    echo '<meta http-equiv="Refresh" content="0;' . $page . '">';
    }
    if (isset($_POST['edit'])) {
        echo "<div class='howToContact'>";
        echo "<form method='post' action='orders_edit_admin.php'>";
        echo "<input name='order_id_c' type='hidden' value='" . $_POST['order_id'] . "'>";
        echo "<label for='user_id'>Id użytkownika</label>";
        echo "<input type='number' min='".$id_min_value."' max='".$id_max_value."' name='user_id_c' id='user_id' value='" . $_POST['user_id'] . "' required>";
        echo "<label for='order_date'>Data zamówienia</label>";
        echo "<input type='text' name='order_date_c' id='order_date' value='" . $_POST['order_date'] . "' required>";
        echo "<label for='order_time'>Czas złożenia zamówienia</label>";
        echo "<input type='text' name='order_time_c' id='order_time' value='" . $_POST['order_time'] . "' required>";
        echo "<label for='total_price'>Łączna cena</label>";
        echo "<input type='text' onkeydown='return numOnly(event);' name='total_price_c' id='total_price' value='" . $_POST['total_price'] . "' required>";
        echo "<label for='fname'>Imię</label>";
        echo "<input type='text' name='fname_c' id='fname' value='" . $_POST['fname'] . "' required>";
        echo "<label for='lname'>Nazwisko</label>";
        echo "<input type='text' name='lname_c' id='lname' value='" . $_POST['lname'] . "'>";
        echo "<button name='commit' type='submit'>Zaakceptuj zmiany</button>";
        echo "</form>";
    }
    ?>
</main></div>
<?php
include('footer.php');
?>
