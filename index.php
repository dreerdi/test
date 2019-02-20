<?php
	require_once 'db.php';
	require_once './assets/models/Users.php';
	if (isset($_REQUEST['dispatch'])) {
		$dispatch = $_REQUEST['dispatch'];
	} else {
		$dispatch = 'home';
	}
	require_once 'assets/views/templates/header.php';
	require_once "assets/views/$dispatch.php";
	require_once 'assets/views/templates/footer.php';
?>