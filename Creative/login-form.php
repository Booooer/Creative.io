<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авториазция</title>
    <link rel="stylesheet" href="styles/main.css">
    <script type="text/javascript" src="scripts/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://vk.com/js/api/openapi.js?169"></script>
  </head>
  <body>
    <div class="regstr">
     <div class="container">
       <div class="field-reg">
          <form class="reg" action="auth.php" method="post">
            <h1>Вход в аккаунт</h1>
            <input  class="form-reg" name="login" id="login" placeholder="  Введите логин" required><br><br>
            <input  type="password" class="form-reg" name="password" id="password" placeholder="  Введите пароль" required><br><br>
            <button type="submit" class="btn btn-success">Войти</button>
            <div><a href="#"><img src="img/vk-auth.png" width="40px" height="40px"></a></div>
            <p>Нет аккаунта? <a href="registration-form.php">Зарегистрироваться</a></p>
            <?php if ($_SESSION['message']) {
              echo '<p class="msg">' . $_SESSION['message'].'</p>';
              } unset($_SESSION['message']) ?>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
