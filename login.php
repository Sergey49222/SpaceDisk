<?php
session_start();
require "connectdb.php";

$password = $_POST['password'];
$email = $_POST['email'];



if(isset($_POST['submit'])){
    $loginusers = mysqli_query($link, "SELECT * FROM users WHERE (first = '$first' OR email = '$email') AND password = '$password'");
    if(mysqli_num_rows($loginusers)>0){ 
    $user = mysqli_fetch_assoc($loginusers);
    $_SESSION['users'] = [
        'id' => $user['id'],
        'first' => $user['first'],
        'last' => $user['last'],
        'password' => $user['password'],
        'email' => $user['email'],
       
    ];


header("location: ../index.php");
}
else{ 
    $_SESSION["message"] = "Неправильная почта или пароль";
    header("location: ../login.php");
}
}