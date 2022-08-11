<?php

require_once '../../functions.php';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$mysqli = new mysqli(
	'db-mariadb',

	getenv('MYSQL_USER'),
	getenv('MYSQL_PASSWORD'),
	getenv('MYSQL_DATABASE')
);

// $result = $mysqli->query('SELECT * FROM users');

// $row = $result->fetch_assoc();

// var_dump($row['email']);

// $row = $result->fetch_assoc();

// var_dump($row['email']);

// while ($row = $result->fetch_assoc()) {
//     var_dump($row['email']);
// }
// 

// $rows = $result->fetch_all(MYSQLI_BOTH);

// https://www.php.net/manual/en/mysqli.quickstart.prepared-statements.php

// $stmt = $mysqli->prepare("SELECT * FROM users WHERE name = ?");

// $name = $_GET['name'] ?? NULL;

// $stmt->bind_param('s', $name);

// $stmt->execute();

// $result = $stmt->get_result();

// $rows = $result->fetch_all(MYSQLI_BOTH);

// dd($rows);

// $stmt = $mysqli->prepare("INSERT INTO `users` (`is_admin`, `name`, `email`, `email_verified_at`, `password`, `created_at`, `updated_at`) VALUES (?, ?, ?, NULL, '', NULL, NULL);
// ");

// $stmt->bind_param('iss', $isActive, $name, $email);

// $isActive = true;
// $name = 'Jonas';
// $email = 'j@mail.lt';

// $stmt->execute();

// $stmt = $mysqli->prepare("UPDATE `users` SET `email_verified_at` = ?");

// $stmt->bind_param('s', $date);

// $date = date('Y-m-d H:i:s');

// $stmt->execute();

// dd($mysqli->affected_rows);

// $stmt = $mysqli->prepare("UPDATE `users` SET `password` = ? WHERE `password` = ''");

// $stmt->bind_param('s', $password);

// $password = uniqid();

// $stmt->execute();

// dd($mysqli->affected_rows);

$stmt = $mysqli->prepare("SELECT * FROM users");

$stmt->execute();

$result = $stmt->get_result();

$rows = $result->fetch_all(MYSQLI_BOTH);

dd($rows);