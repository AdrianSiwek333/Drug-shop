<?php

if(isset($_POST['wyslij']))
{
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $title = $_POST['title'];
    $text = $_POST['text'];

    $query = "INSERT INTO contact(name, surname, email, title, text) VALUES (:name, :surname, :email, :title, :text)";
    $query_run=$db_con->prepare($query);

    $data = [
        ':name'=>$name,
        ':surname'=>$surname,
        ':email'=>$email,
        ':title'=>$title,
        ':text'=>$text,
    ];
    $query_execute = $query_run->execute($data);

    if($query_execute)
    {
        $wyslano='Wysłano';
    }
    else{
        $wyslano='Błąd. Spróbuj ponownie.';
    }
}

if(isset($_POST['register']))
{
    $email = $_POST['email'];
    $login = $_POST['login'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $password = $_POST['password'];

    $query = "INSERT INTO users(email, login, fname, lname, password) VALUES (:email, :login, :fname, :lname, :password)";
    $query_run=$db_con->prepare($query);

    $data = [
        ':email'=>$email,
        ':login'=>$login,
        ':fname'=>$fname,
        ':lname'=>$lname,
        ':password'=>$password,
    ];
    $query_execute = $query_run->execute($data);

    if($query_execute)
    {
        $rejestracja='Zarejestrowano';
    }
    else{
        $rejestracja='Błąd. Spróbuj ponownie.';
    }
}
?>
