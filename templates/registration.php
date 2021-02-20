<?php


include __DIR__ . '/../vendor/autoload.php';
include_once __DIR__ . '/../db/db.php';
use Windwalker\Crypt\Password;

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo '<form method="post" action="registration.php">';
    echo 'login: <input type="text" name="login" /> </br>';
    echo 'password: <input type="password" name="password" /> </br>';
    echo '<input type="submit"" /> </br>';
    echo '</form>';
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login_provided;
    $password_provided;

    if(isset($_POST['login']) && isset($_POST['password'])){
        $login_provided = $_POST['login'];
        $password_provided = $_POST['password'];
    }
    else{
        echo 'wrong credentionals';
        exit;
    }


    //hash password and pass to check function
    $password = new Password(Password::SHA512, 5000, md5('to be or not to be.'));
    $pass = $password->create($password_provided);

    if(is_user_exists($login_provided, $pass)){
        echo 'You are already registred';
    }
    else{
        if (CreateNewUser($login_provided, $pass))
            echo "Mission passed";
        else 
            echo "something went wrong";
        exit;
    }
}


?>