<?php
include('header.php');
include('admin-verification.php');
?>
<div class="container">
    <main>
        <style>
       

            label::before {
                visibility: hidden;
            }
           
           
        </style>
       <div class="d-inline-flex p-1">
        <table class="table table-bordered">
            <thead>
            <th scope="col">user_id</th>
            <th scope="col">email</th>
            <th scope="col">password</th>
            <th scope="col">user_type</th>
            <th scope="col">Przycisk edycji</th>
            <th scope="col">Przycisk usuń</th>
            </thead>
            <?php
            $stmt = $db_con->query("SELECT * FROM users");
            while ($row = $stmt->fetch()) {
                echo "<tr>";
                echo "<td>" . $row['user_id'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
                echo "<td>" . $row['user_type'] . "</td>";
                echo "<td><form method='post' action='" . $_SERVER['PHP_SELF'] . "'>
                    <input type='hidden' name='user_id' value='" . $row['user_id'] . "'>
                    <input type='hidden' name='email' value='" . $row['email'] . "'>
                    <input type='hidden' name='password' value='" . $row['password'] . "'>
                    <input type='hidden' name='user_type' value='" . $row['user_type'] . "'>
                    <button name='edit' class='buttonedit' type='Submit'>Edytuj użytkownika</button>
                </form>
                </td>";
                echo "<td><form method='post' action='" . $_SERVER['PHP_SELF'] . "'><input type='hidden' name='user_id' value='" . $row['user_id'] . "'><button name='del' class='buttonClear' type='Submit'>Usuń użytkownika</button></form></td>";
                echo "</tr>";
            }
            ?>
        </table></div>
        <form method="post" action="clients_admin.php">
            <button name="addClient" class='buttonedit' type="submit">Dodaj nowego użytkownika</button>
        </form>
        <?php
        if (isset($_POST['del'])) {
            $o_id = $db_con->query("SELECT * FROM orders WHERE user_id='" .$_POST['user_id']."'");
            $o_id = $o_id->fetch();
            $o_id_val = $o_id[0];
            $sql_order_info = "DELETE FROM order_info WHERE order_id='".$o_id_val."'";
            $sql_stmt_order = "DELETE FROM orders where user_id='".$_POST['user_id']."'";
            $sql_stmt = "DELETE FROM users WHERE user_id='" . $_POST['user_id'] . "'";
            $commit2 = $db_con->query($sql_order_info);
            $commit2 = $db_con->query($sql_stmt_order);
            $commit = $db_con->query($sql_stmt);
            $page = $_SERVER['PHP_SELF'];
            echo '<meta http-equiv="Refresh" content="0;' . $page . '">';
        }
        if (isset($_POST['edit'])) {
            echo "<div class='howToContact'>";
            echo "<form method='post' action='client_edit_admin.php'>";
            echo "<input name='user_id_c' type='hidden' value='" . $_POST['user_id'] . "'>";
            echo "<label for='email'>E-mail</label>";
            echo "<input type='text' name='email_c' id='email' value='" . $_POST['email'] . "' required>";
            echo "<label for='password'>Hasło (zostanie ono zhashowane automatycznie)</label>";
            echo "<input type='text' name='password_c' id='password' value='' placeholder='Wpisz nowe hasło(zostanie ono zhashowane automatycznie)' required>";
            echo "<label for='user_type'>Typ użytkownika</label>";
            echo "<input type='text' name='user_type_c' id='user_type' value='" . $_POST['user_type'] . "' required>";
            echo "<button name='commit' type='submit' class='buttonedit'>Zaakceptuj zmiany</button>";
            echo "</form>";
        }
        if (isset($_POST['addClient'])) {
            echo "<div class='howToContact'>";
            echo "<form method='post' action='client_add_admin.php'>";
            echo "<label for='email'>E-mail</label>";
            echo "<input type='text' name='email_a' id='email' placeholder='E-mail' required><br>";
            echo "<label for='password'>Hasło (zostanie ono zhashowane automatycznie)</label>";
            echo "<input type='text' name='password_a' id='password' placeholder='Hasło' required><br>";
            echo "<label for='user_type'>Typ użytkownika</label>";
            echo "<input type='text' name='user_type_a' id='user_type' placeholder='Typ użytkownika'><br>";
            echo "<button type='submit' class='buttonedit'>Dodaj użytkownika</button>";
            echo "</form>";
        }
        ?>
    </main></div>
<?php
include('footer.php');
?>
