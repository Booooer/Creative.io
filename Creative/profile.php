<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ваш аккаунт</title>
    <link rel="stylesheet" href="styles/main.css">
  </head>
  <body>
    <?php
      include("header.php");
     ?>
     <div class="profile">
       <div class="container">
         <h1>Здравствуйте, <?php echo $_SESSION['log-in']; ?>
         </h1>
          <div class="account">
            <form class="account-info" action="" method="post">
            <p>Ваш email: <?php echo $_SESSION['user']['e-mail']; ?> </p>
            <p>Количество баллов: 100</p>
            <a href="logout.php" class="logout">Выйти</a>
            </form>
            <div class="account-image">
              <a href="#"><img id="setup-icon" src="img/default.jpg" alt="setup"></a>
            </div>
        </div>
     </div>
   </div>
     <?php
       include("footer.php");
       exit();
      ?>
  </body>
</html>
