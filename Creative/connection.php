<?php

$ip = "127.0.0.1";
$name = "root";
$password = "";
$db = "creative";

$connect = mysqli_connect($ip, $name, $password, $db);

if (!$connect) {
  echo "Не удалось установить связь с сервером.";
  exit();
}

 ?>
