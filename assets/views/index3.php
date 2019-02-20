<?php
	$user = new Users;
	$file1 = file_get_contents('array-1.json');
	$arr1 = json_decode($file1, true);
	unset($file1);
	$file2 = file_get_contents('array-2.json');
	$arr2 = json_decode($file2, true);
	unset($file2);
	if (mysqli_query($mysqli, "SELECT * FROM `users`")) {
		for ($i = 0; $i < 100; $i++) {
			$arr3 =  array();
			$arr3[] = 'Василий'.$i;
			$arr3[] = 'Пупкин'.($i + 6);
			$arr3[] = 'Александрович'.$arr1[$i];
			$arr3[] = date("Y-m-d", mktime(0, 0, 0, date('m'), date('d') - $i, date('Y') - 21));
			$arr3[] = $i + 1;
			$arr3[] = (float) $arr1[$i] + $arr2[4];
			$user->setAddUser($arr3);
		}
		echo "Сущность заполнена";
	} else {
		echo "Таблицы не существует";
	}
	
?>