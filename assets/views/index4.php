<?php
	$user = new Users;
	if (isset($_REQUEST['page'])) {
		$page = $_REQUEST['page'];
	} else {
		$page = 1;
	}
	if (mysqli_query($mysqli, "SELECT * FROM `users`")) {
		$total_page = ceil($user->getCountUsers()[0] / 8);
	$arr = $user->getUsers8($page);
	echo "<div class='row'>
      		<div class='col-lg-8 col-lg-push-2'>";
	echo "<ul class='page'>";
	for ($i = 1; $i <= $total_page; $i++){
		echo "<li><a href='index.php?dispatch=index4&page=".$i."'> Страница ".$i." </a></li>";
	}
	echo "</ul>";
	echo "<div class='text-center'>Текущая страница ".$page."</div>";
	echo "</div>
    		</div>";
    echo "<div class='row'>
      		<div class='col-lg-8 col-lg-push-2'>";		
	echo "<table class='table'>
		<tr>
			<th>id записи</th>
			<th>Имя</th>
			<th>Фамилия</th>
			<th>Отчество</th>
			<th>Дата рождения</th>
			<th>Номер счета</th>
			<th>Сумма на счете</th>
		</tr>";
	foreach ($arr as $key => $value) {
		echo "<tr>";
		echo "<td>".$value['user_id'];
		echo "</td><td>".$value['name'];
		echo "</td><td>".$value['surname'];
		echo "</td><td>".$value['patronymic'];
		echo "</td><td>".$value['date'];
		echo "</td><td>".$value['account_number'];
		echo "</td><td>".$value['amount_account'];
		echo "</td></tr>";
	}
	echo "</table>";
	echo "</div>
    		</div>";
	} else {
		echo "Таблицы не существует";
	}	
?>