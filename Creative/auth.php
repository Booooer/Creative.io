<?php
session_start();
require_once ('connection.php');

$login = $_POST['login'];
$password = md5($_POST['password']);

$check_user = mysqli_query($connect,"SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
if (mysqli_num_rows($check_user) > 0) {
  $user = mysqli_fetch_assoc($check_user);
  if ($user) {
    $_SESSION['log-in'] = $login;
    if ($_SESSION['log-in']) {
      header('Location: index.php');
    }
  }
  $_SESSION['user'] = [
    "id" => $user['ID'],
    "login" => $user['login'],
    "e-mail" => $user['email']
  ];
}
else{
  $_SESSION['message'] = "Неверный логин или пароль";
  header('Location: login-form.php');
}
 ?>
