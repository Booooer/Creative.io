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
  </head>
  <body>
     <div class="regstr">
      <div class="container">
        <div class="field-reg">
        <h1>Регистрация пользователя</h1>
          <form class="reg" action="reg.php" method="post">
            <input  class="form-reg" name="login" id="login" placeholder="  Введите логин" required><br><br>
            <input  class="form-reg" name="e-mail" id="e-mail" placeholder="  Введите e-mail" required><br><br>
            <input  type="password" class="form-reg" name="password" id="password" placeholder="  Введите пароль" required><br><br>
            <button type="submit" class="btn btn-success">Зарегистрироваться</button>
            <div><a href="#"><img src="img/vk-auth.png" width="40px" height="40px"></a></div>
            <p>Уже есть аккаунт? <a href="login-form.php">Войти</a> </p>
            <?php if ($_SESSION['message']) {
              echo '<p class="msg">' . $_SESSION['message'].'</p>';
              } unset($_SESSION['message']) ?>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
