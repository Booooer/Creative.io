	<?php
		session_start();
		if (!$_SESSION['log-in']) {
		header('Location: registration-form.php');
	}
	 ?>
	<header>
		<div class="container">
			<div class="navbar">
				<a href=index.php><img src="img/Logo.png" alt="Logo" height="45px"></a>
				<div class="messeng">
					<a href="#"><img src="img/heart.svg" alt="liked" height="30px"></a>
					<a href="profile.php"><img src="img/login.svg" alt="login" height="30px"></a>
				</div>
			</div>
		</div>
	</header>
	<div class="container">
		<form action="item.php" method="post">
		<ul class="drop_list">
			<li class="hidden_1">Смотреть все</li>
			<li class="hidden_1">Новое</li>
			<li class="hidden_1">
			<select name="clothes" on class="hidden_2" onchange="this.form.submit()">
				<option value="" selected disabled>Одежда</option>
				<option value="hoodies">Толстовки</option>
				<option value="t-shirts">Футболки</option>
				<option value="caps">Кепки</option>
				<option value="hats">Шапки</option>
			</select>
			</li>
			<li class="hidden_1">
			<select name="clothes" on class="hidden_2" onchange="this.form.submit()">
				<option value="" selected disabled>Коллекции</option>
				<option value="hoodies">Токсичная</option>
				<option value="t-shirts">Самурай</option>
				<option value="caps">Бабочки</option>
				<option value="hats">Лунная</option>
			</select>
		</li>
		</form>

	</ul>
	</div>
