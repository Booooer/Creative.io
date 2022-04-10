<?php
  session_start();
  unset($_SESSION['log-in']);
  unset($_SESSION['user']);
  header('Location: index.php');
 ?>
