<?php
  session_start();
  require_once ('connection.php');


  $clothes = $_POST['clothes'];
  if ($clothes = 'hoodies') {
     $_SESSION['choice'] = 'hoodies';
     header('Location: index.php');
  }
 ?>
