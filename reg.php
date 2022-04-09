<?php
session_start();
require "connectdb.php";
$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$password = $_POST['password'];

if(isset($_POST['submit'])){
    $checkuser = mysqli_query($link, "SELECT 'email' FROM 'users' WHERE 'email' = '$email'");
    if(mysqli_num_rows($checkuser) > 0){
        $_SESSION["message"] = "Пользователь с такой почтой уже существует";
        header("location: " .$_SERVER["HTTP_REFERER"]);
    }
}

else{

    $addusers = mysqli_query($link, "INSERT INTO 'users' ('first', 'last','email', 'password') VALUES ('$first', '$last', '$email', '$password')");
    if($addusers){
    $_SESSION["message"] = "Пользователь успешно зарегистрирован";
    header("location: ../login.php");
}
}