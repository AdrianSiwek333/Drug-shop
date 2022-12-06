<?php
include('header.php');
?>
    <main>
        <style>
            table, thead, td, th {
                border: solid 1px black;
            }

            label::before {
                visibility: hidden;
            }
        </style>
        <table>
            <thead>
            <th>user_id</th>
            <th>email</th>
            <th>password</th>
            <th>user_type</th>
            <th>Przycisk edycji</th>
            <th>Przycisk usuń</th>
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
                    <button name='edit' type='Submit'>Edytuj użytkownika</button>
                </form>
                </td>";
                echo "<td><form method='post' action='" . $_SERVER['PHP_SELF'] . "'><input type='hidden' name='user_id' value='" . $row['user_id'] . "'><button name='del' type='Submit'>Usuń użytkownika</button></form></td>";
                echo "</tr>";
            }
            ?>
        </table>
        <form method="post" action="clients_admin.php">
            <button name="addClient" type="submit">Dodaj nowego użytkownika</button>
        </form>
        <?php
        if (isset($_POST['del'])) {
            $sql_stmt = "DELETE FROM users WHERE user_id='" . $_POST['user_id'] . "'";
            $commit = $db_con->query($sql_stmt);
            $page = $_SERVER['PHP_SELF'];
            echo '<meta http-equiv="Refresh" content="0;' . $page . '">';
        }
        if (isset($_POST['edit'])) {
            echo "<form method='post' action='client_edit_admin.php'>";
            echo "<input name='user_id_c' type='hidden' value='" . $_POST['user_id'] . "'>";
            echo "<label for='email'>E-mail</label>";
            echo "<input type='text' name='email_c' id='email' value='" . $_POST['email'] . "' required>";
            echo "<label for='password'>Hasło (zostanie ono zhashowane automatycznie)</label>";
            echo "<input type='text' name='password_c' id='password' value='' placeholder='Wpisz nowe hasło(zostanie ono zhashowane automatycznie)' required>";
            echo "<label for='user_type'>Typ użytkownika</label>";
            echo "<input type='text' name='user_type_c' id='user_type' value='" . $_POST['user_type'] . "' required>";
            echo "<button name='commit' type='submit'>Zaakceptuj zmiany</button>";
            echo "</form>";
        }
        if (isset($_POST['addClient'])) {
            echo "<form method='post' action='client_add_admin.php'>";
            echo "<label for='email'>E-mail</label>";
            echo "<input type='text' name='email_a' id='email' placeholder='E-mail' required>";
            echo "<label for='password'>Hasło (zostanie ono zhashowane automatycznie)</label>";
            echo "<input type='text' name='password_a' id='password' placeholder='Hasło' required>";
            echo "<label for='user_type'>Typ użytkownika</label>";
            echo "<input type='text' name='user_type_a' id='user_type' placeholder='Typ użytkownika'>";
            echo "<button type='submit'>Dodaj użytkownika</button>";
            echo "</form>";
        }
        ?>
    </main>
<?php
include('footer.php');
?>