<?php
	$mysqli = mysqli_connect('localhost', 'root', '', 'test');
	if (mysqli_connect_errno()) {
    printf("Соединение не установлено: %s\n", mysqli_connect_error());
    exit();
	}
?>