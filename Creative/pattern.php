<?php
  session_start();
  require_once ('connection.php');

  $ID = $_SESSION['item'];

  $check_clothes = mysqli_query($connect,"SELECT * FROM `top-sales` WHERE `id` = '$ID'");
  if (mysqli_num_rows($check_clothes) > 0) {
    $clothes_item = mysqli_fetch_assoc($check_clothes);
    if ($clothes_item) {
      $_SESSION['clothes'] = [
      "img" => $clothes_item['img'],
      "name" => $clothes_item['name'],
      "price" => $clothes_item['price'],
      "type" => $clothes_item['type'],
      "structure" => $clothes_item['structure'],
      "size" => $clothes_item['size'],
      "description" => $clothes_item['description'],
      "color" => $clothes_item['color'],
      "collection" => $clothes_item['collection']
    ];
  }
}
  else{
  echo "ERROR";
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Информация</title>
    <link rel="shortcut icon" href="img/Favicon.png" type="image/png">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/slider.css">
    <script src="scripts/slider.js" defer></script>
  </head>
  <body>
    <?php
      include "header.php";
     ?>
	<div class="pattern">
		<div class="container">
			<h1>Описание товара</h1>
		  <div class="field-pattern">
			<div class="pattern_img">
				<img src="img/Clothes/<?php echo $_SESSION['clothes']['img'] ?>">
			</div>
			<div class="pattern_description">
				<?
    				echo '<span>'.$_SESSION['clothes']['name'].'</span>' .'<p>'.$_SESSION['clothes']['description'].'</p>';
				?>
			</div>
				</div>
				<div class="pattern_line">
				<p>Состав: <?php echo $_SESSION['clothes']['structure'] ?></p>
				<p>Цвет: <?php echo $_SESSION['clothes']['color'] ?></p>
				<p>Размер: <?php echo $_SESSION['clothes']['size'] ?></p>
				<p>Наличие: <?php echo $_SESSION['clothes']['count'] ?>шт</p>
				<p>Коллекция: <?php echo $_SESSION['clothes']['collection'] ?></p>
				<p>Price: <?php echo $_SESSION['clothes']['price'] ?></p>
			</div>
		</div>
	</div>
		<div class="wrapper">
      <h1>Вам может понравиться</h1>
      <div class="slider-container">
        <section class="slider-track">
          <div class="item">
            <a href="#"><img src="img/Clothes/backpack4.jpg" alt=""></a>
            <a href="#"><img src="img/Clothes/hoodie1.jpg"></a>
            <a href="#"><img src="img/Clothes/t-shirt1.jpg" alt=""></a>
            <a href="#"><img src="img/Clothes/hoodie4.jpg" alt=""></a>
          </div>
          <div class="item">
            <img src="img/Clothes/t-shirt1.jpg" alt="">
            <img src="img/Clothes/t-shirt2.jpg" alt="">
            <img src="img/Clothes/t-shirt3.jpg" alt="">
            <img src="img/Clothes/t-shirt4.jpg" alt="">
          </div>
          <div class="slider-buttons">
            <a class="prev" onclick="minusSlide()"><img src="img/prev.svg" alt="prev"></a>
            <a class="next" onclick="plusSlide()"><img src="img/next.svg" alt="next"></a>
        </div>
        </section>
      </div>
  </div>
    <?php
      include "footer.php";
     ?>
  </body>
</html>