<?php
  session_start();
  require_once ('connection.php');

  $login = $_POST['login'];
  $email = filter_var($_POST['e-mail']);
  $password = $_POST['password'];
  if (mb_strlen($password) < 6) {
    $_SESSION['message'] = "Недопустимая длина пароля";
    header('Location: registration-form.php');
  }
  $check_email = mysqli_query($connect,"SELECT * FROM `users` WHERE `email` = '$email'");
  $check_login = mysqli_query($connect,"SELECT * FROM `users` WHERE `login` = '$login'");

  if ($check_email && mysqli_num_rows($check_email) > 0) {
    $_SESSION['message'] = "Пользователь с такой почтой уже есть";
    header('Location: registration-form.php');
  }
  else if($check_login && mysqli_num_rows($check_login) > 0) {
    $_SESSION['message'] = "Пользователь с таким логином уже есть";
    header('Location: registration-form.php');
  }
  else if (mb_strlen($login) < 5 || mb_strlen($login) > 20) {
    $_SESSION['message'] = "Недопустимая длина логина";
    header('Location: registration-form.php');
  }
  else if (mb_strlen($email) < 5 || mb_strlen($email) > 30) {
    $_SESSION['message'] = "Недопустимая длина почты";
    header('Location: registration-form.php');
  }

  else{
  $password = md5($_POST['password']);
  mysqli_query($connect,"INSERT INTO `users` (`id`, `login`, `email`, `points`, `password`, `name`, `promocode`) VALUES (NULL, '$login', '$email', NULL, '$password', '', '')");
  header('Location: login-form.php');
  $_SESSION['message'] = "Успешная регистрация";
  exit();
  }
?>
