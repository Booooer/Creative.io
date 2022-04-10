<?php
	session_start();
	require_once "connection.php";

  if (isset($_POST['button'])) {
    $ID = $_POST['id'];
    $_SESSION['item'] = $ID;
    header('Location: pattern.php');
  }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/main.css">
	<link rel="stylesheet" href="styles/slider.css">
    <script src="scripts/slider.js" defer></script>
	<title>Creative</title>
</head>
<body>
	<?php
      include "header.php";
     ?>
     <?php
      include "slider.php";
     ?>
     <div class="top-sale">
     	<div class="top-container">
     		<div class="top-field">
     			<h1>ТОП ПОПУЛЯРНЫХ ТОВАРОВ</h1>
					<section class="top-place">
               <?php
                if ($_SESSION['choice']) {
                  $result = mysqli_query($connect, "SELECT * FROM `hoodies`");
                }
                else{
							 		$result = mysqli_query($connect, "SELECT * FROM `top-sales`");
                  }
                  while ($merch = mysqli_fetch_assoc($result)) {
                ?>
                <form class="top-item"action="index.php" method="post">
                  <div>
                    <a><img class="tovar" src="img/Clothes/<?php echo $merch['img']; ?>" alt=""></a>
										<p style='font-size: 12px;'><?php echo $merch['type'];?></p>
                    <p id="name"><?php echo $merch['name']; ?></p>
                    <p><?php echo $merch['price'];?></p><a href="basket-pattern.php">
                    <input type="hidden" name="id" value="<?php echo $merch['id']; ?>">
                    <button class="btn_more" type="submit" name="button">Подробнее</button>
                  </div>
                 <a onclick="alert('Вы действительно хотите купить <?php echo $merch['name']; ?>, за <?php echo $merch['price']; ?> и оплатить часть суммы баллами(всего 100)?'); return false;"> <div class="dop_info"><img src="img/cart.svg" alt="cart" height="20px"></div></a>

                </form>
                <?php
                } unset($_SESSION['choice']);
                 ?>
          </section>
     		</div>
     	</div>
     </div>
     <?php
      include "footer.php";
     ?>
</body>
</html>
