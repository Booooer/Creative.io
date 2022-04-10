<?php
  session_start();
  require_once "connection.php";

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
      "size" => $clothes_item['size']
    ];
  }
}
  else{
  echo "ERROR";
}
 ?>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<link rel="stylesheet" href="styles/main.css">
     <script src="scripts/slider.js" defer></script>
 	<title>Корзина</title>
 </head>
 <body>
    <?php
       include "header.php";
    ?>
    <div class="basket">
      <div class="container">
        <div class="field-basket">
          <p><?php echo $_SESSION['clothes']['name']; ?></p>
        </div>
      </div>
    </div>
    <?php
       include "footer.php";
    ?>
</body>
</html>
