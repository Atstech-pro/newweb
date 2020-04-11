<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>PHP Day 3</title>
</head>
<body>
	<?php
		$user = 'root';
		$password = '';
		$db = 'test';
		$host = 'localhost';

		$dsn = 'mysql:host='.$host.';dbname='.$db;
		$pdo = new PDO($dsn, $user, $password);

		// $query = $pdo->query('SELECT * FROM `users`'); //ASC DESC
		// while($row = $query->fetch(PDO::FETCH_ASSOC)) {
		// 	echo '<p><b>Пользователь: </b>' . $row['login'] . '<br>' .
		// 	 	'<b>Имя: </b>' . $row['name'] . '<br>' .
		// 	 	'<b>Фамилия: </b>' . $row['surname'] . '<br>' .
		// 	 	'<b>Почта: </b>' . $row['email'] . '<br></p>';
		// }
//============================ sql вывод =====================
		// while($row = $query->fetch(PDO::FETCH_ASSOC)) {
		// 	echo '<h1>' . $row['login'] . '</h1>
		// 		<p><b>Email: </b>' . $row['email'] . '</p>
		// 		<p><b>Name: </b>' . $row['name'] . '</p>
		// 		<p><b>Surname: </b>' . $row['surname'] . '</p>';
		// }
//========================= вывод по выбору ===================
		// $name = 'Sam';
		// $sql = 'SELECT `name`, `id`, `email` FROM `users` WHERE `name` = ?';
		// $query = $pdo->prepare($sql);
		// $query->execute([$name]);
		// $users = $query->fetchAll(PDO::FETCH_OBJ);

		// //var_dump($users);
		// foreach($users as $user) {
		// 	echo $user->email;
		// }

//=========================== вставка ===========================
		// $login = CODI_1234;
		// $email = 'gogo@mail.com';
		// $name = 'Anton';
		// $surname = 'Bullet';
		//
		// $sql = 'INSERT INTO users(login, email, name, surname) VALUES(:login, :email, :name, :surname)';
		// $query = $pdo->prepare($sql);
		// $query->execute(['login' => $login, 'email' => $email, 'name' => $name, 'surname' => $surname]);

//========================== изменение ==========================
		// $id = 4;
		// $login = "NewLogin";
		// $email = 'test@example.com';
		// $name = 'Will';
		// $surname = 'Smith';
		// $sql = 'UPDATE `users` SET `login` = :login, `email` = :email, `name` = :name, `surname` = :surname, `id` = :id';
		// $query = $pdo->prepare($sql);
		// $query->execute(['login' => $login, 'email' => $email, 'name' => $name, 'surname' => $surname, 'id' => $id]);

//================== удаление =====================================
		// $id = 4;
		// $sql = 'DELETE FROM `users` WHERE `id` = ?';
		// $query = $pdo->prepare($sql);
		// $query->execute([$id]);



	 ?>
</body>
</html>
