<?php

$login = filter_var(trim($_POST['login']), 
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), 
FILTER_SANITIZE_STRING);

if(mb_strlen($login)<5||mb_strlen($login)>90){
    echo"Не дозволена дліна логіна.";
    exit();
}else if(mb_strlen($pass)<2||mb_strlen($pass)>6){
    echo"Не дозволена дліна пароля(від 2 до 6 символів).";
    exit();
}

$pass = md5($pass."srdgfdfgdge265324");

$mysql = new mysqli('localhost','root','','register-bd');
$mysql->query("INSERT INTO `users`(`login`,`password`) VALUES('$login','$pass')");

$mysql->close();

header('Location:/html/autoh.php');
?>