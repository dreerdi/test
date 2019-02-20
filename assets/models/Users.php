<?php
	require_once 'db.php';
	class Users 
	{
		
		/*добавление записи в таблицу users*/
		public function setAddUser($arr) {
			global $mysqli;
			$q = "INSERT INTO `users` VALUES (NULL, '$arr[0]', '$arr[1]', '$arr[2]', '$arr[3]', '$arr[4]', '$arr[5]')";
			$query = mysqli_query($mysqli, $q);
		}

		public function getUsers8($page) {
			global $mysqli;
			$page = ($page * 8) - 8 ;
			$q = "SELECT * FROM `users` LIMIT $page, 8";
			$query = mysqli_query($mysqli, $q);
			$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
			return $result;
		}

		public function getCountUsers() {
			global $mysqli;
			$q = "SELECT COUNT(*) FROM `users`";
			$query = mysqli_query($mysqli, $q);
			$result = mysqli_fetch_row($query);
			return	$result;
		}

	}

?>