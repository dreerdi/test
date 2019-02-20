<?php
	//1 задание
	$arr = array();
	for ($i = 0; $i < 100; $i++) {
		$arr[$i] = rand(0, 5685);
	}
	file_put_contents('array-1.json', json_encode($arr));
	$arr2 = array();
	for ($i = 0; $i < 100; $i++) {
		if (($i % 2 !== 0) || ($i % 4 == 0)) {
			$arr[$i] = ($arr[$i] - 23) * 2;
			if (($arr[$i] >= 2450) && ($arr[$i] < 4031)) {
				$arr2[] = $arr[$i];
			}
		}
	}
	file_put_contents('array-2.json', json_encode($arr2));
	echo "файлы сформированы и заполнены";
?>