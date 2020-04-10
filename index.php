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
		$db = 'testing';
		$host = 'localhost';

		$dsn = 'mysql:host='.$host.';dbname='.$db;
		$pdo = new PDO($dsn, $user, $password);

		$query = $pdo->query('SELECT * FROM `users`'); //ASC DESC
		while($row = $query->fetch(PDO::FETCH_ASSOC)) {
			echo '<p><b>Пользователь: </b>' . $row['login'] . '<br>' .
			 	'<b>Имя: </b>' . $row['name'] . '<br>' . 
			 	'<b>Фамилия: </b>' . $row['surname'] . '<br>' .
			 	'<b>Почта: </b>' . $row['email'] . '<br></p>';
		}

		// while($row = $query->fetch(PDO::FETCH_ASSOC)) {
		// 	echo '<h1>' . $row['login'] . '</h1>
		// 		<p><b>Email: </b>' . $row['email'] . '</p>
		// 		<p><b>Name: </b>' . $row['name'] . '</p>
		// 		<p><b>Surname: </b>' . $row['surname'] . '</p>';
		// }
		// $name = 'Sam';
		// $sql = 'SELECT `name`, `id`, `email` FROM `users` WHERE `name` = ?';
		// $query = $pdo->prepare($sql);
		// $query->execute([$name]);
		// $users = $query->fetchAll(PDO::FETCH_OBJ);

		// //var_dump($users);
		// foreach($users as $user) {
		// 	echo $user->email;
		// }
	 ?>
</body>
</html>