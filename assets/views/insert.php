<?php
	/*if ($_REQUEST['exampleInputName'] === 0) {
		echo "введите все данные";
	}*/
	var_dump($_REQUEST);
	$arr = array();
	$arr[] = $_REQUEST['exampleInputName'];
	$arr[] = $_REQUEST['exampleInputPatronymic'];
	$arr[] = $_REQUEST['exampleInputSurname'];
	$arr[] = $_REQUEST['exampleInputDate'];
	$arr[] = $_REQUEST['exampleInputAccountNumber'];
	$arr[] = (float) $_REQUEST['exampleInputAmmountAccount'];
	$user = new Users;
	$user->setAddUser($arr);
?>