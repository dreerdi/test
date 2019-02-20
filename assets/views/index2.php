<?php
	//2 задание

	/*$q = "CREATE DATABASE test";
	if (mysqli_query($mysqli, $q) === TRUE) {
	    echo "БД создана";
	} else {
	    echo "Ошибка создания БД: " . $conn->error;
	}*/
	$q = "CREATE TABLE `users` (
		`user_id` int(11) NOT NULL,
		`name` varchar(50) NOT NULL,
		`surname` varchar(50) NOT NULL,
		`patronymic` varchar(50) NOT NULL,
		`date` date NOT NULL,
		`account_number` int(11) NOT NULL,
		`amount_account` float NOT NULL
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
	if (mysqli_query($mysqli, $q) === TRUE) {
	    echo "таблицы users создана";
	} else {
	    echo "Ошибка создания БД: " . $mysqli_error;
	}
	echo "<br>";
	$q = "ALTER TABLE `users`
  		ADD PRIMARY KEY (`user_id`);";
  	if (mysqli_query($mysqli, $q) === TRUE) {
	    echo "индекс создан";
	} else {
	    echo "Ошибка создания индекса: " . $mysqli_error;
	}
	echo "<br>";
	$q = "ALTER TABLE `users`
		MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;";
	if (mysqli_query($mysqli, $q) === TRUE) {
	    echo "auto increment создан";
	} else {
	    echo "Ошибка создания auto increment: " . $mysqli_error;
	}
	echo "<br>";
?>