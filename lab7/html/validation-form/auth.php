<?php

$login = filter_var(trim($_POST['login']), 
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), 
FILTER_SANITIZE_STRING);

$pass = md5($pass."srdgfdfgdge265324");

$mysql = new mysqli('localhost','root','','register-bd');

$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$pass'");
$user  = $result->fetch_assoc();
if(count($user)==0){
    echo"Користувача не знайдено";
    exit();
}

setcookie('user',$user['login'],time() + 3600*24, "/");

$mysql->close();

header('Location:/html/my-index.php');
?>