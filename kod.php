<?php


if (isset($_POST["produkt"])) {

    setcookie("produkt", $_POST['produkt'], time() + (3600));
    echo "<script>window.location = 'product.php';</script>";
}

if (isset($_POST['wyslij'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $title = $_POST['title'];
    $text = $_POST['text'];

    $query = "INSERT INTO contact(name, surname, email, title, text) VALUES (:name, :surname, :email, :title, :text)";
    $query_run = $db_con->prepare($query);

    $data = [
        ':name' => $name,
        ':surname' => $surname,
        ':email' => $email,
        ':title' => $title,
        ':text' => $text,
    ];
    $query_execute = $query_run->execute($data);

    if ($query_execute) {
        $wyslano = 'Wysłano';
    } else {
        $wyslano = 'Błąd. Spróbuj ponownie.';
    }
}

if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $hashPassword = password_hash($password, PASSWORD_BCRYPT);
    $query = "INSERT INTO users(email, password) VALUES (:email, :password)";
    $query_run = $db_con->prepare($query);

    $data = [
        ':email' => $email,
        ':password' => $hashPassword,
    ];
    $query_execute = $query_run->execute($data);

    if ($query_execute) {
        $rejestracja = 'Zarejestrowano pomyślnie';
    } else {
        $rejestracja = 'Błąd. Spróbuj ponownie.';
    }
}

if (isset($_POST['login'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $sth = $db_con->prepare('SELECT * FROM users WHERE email=:login limit 1');
    $sth->bindValue(':login', $email, PDO::PARAM_STR);
    $sth->execute();
    $user = $sth->fetch(PDO::FETCH_ASSOC);
    if ($user) {
        if (password_verify($password, $user['password'])) {
            if($user['user_type']=='noob'){
                $_SESSION['user_idx']=$user['user_id'];
                $napis= 'witaj noobie';
                setcookie("login", 1, time() + 86400);
                header("location: index.php");
                exit;
            }
            else{
                $_SESSION['user_idx']=$user['user_id'];
                $napis = 'witaj adminie';
                setcookie("login", 2, time() + 86400);
                header("location: index.php");
                exit;
            }
        } else {
            $napis = "błędne dane";
        }
    } else {
        $napis = "błędne dane";
    }
} else {
    $napis = "";
}

if(isset($_POST['wyloguj'])){
    $_SESSION['login'] = 0;
    setcookie("login", 0,  time() + 86400);
    header('location:index.php');
}

if(isset($_POST['wyswietl']) && $_POST['wyswietl']=='kafelki'){
    setcookie('wyswietl', 'kafelki', time()+86400);
    header('location:nasze-produkty.php');
}
else if(isset($_POST['wyswietl']) && $_POST['wyswietl']=='lista'){
    setcookie('wyswietl', 'lista', time()+86400);
    header('location:nasze-produkty.php');
}


?>
