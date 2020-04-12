<!DOCTYPE html>
<html lang="ru">
<head>
	<?php
    $website_title = 'Регистрация';
    require 'blocks/head.php';
  ?>
</head>
<body>
	<?php require 'blocks/header.php'; ?>
	<main class="container mt-5">
		<div class="row">
			<div class="col-md-8">
				<h4>Форма регистрации</h4>
				<form action="reg/reg.php" method="post">
					<label for="username">Ваше имя</label>
					<input type="text" name="username" autocomplete="off" id="username" class="form-control mb-3">

					<label for="email">Ваш email</label>
					<input type="email" name="email" autocomplete="off" id="email" class="form-control mb-3">

					<label for="login">Логин</label>
					<input type="text" name="login" autocomplete="off" id="login" class="form-control mb-3">

					<label for="pass">Пароль</label>
					<input type="password" name="pass" autocomplete="off" id="pass" class="form-control mb-3">

					<button type="submit" class ="btn btn-success mt-5">
						Зарегестрироваться
					</button>
				</form>
			</div>

			<?php require 'blocks/aside.php'; ?>
		</div>
	</main>

	<?php require 'blocks/footer.php'; ?>
</body>
</html>
