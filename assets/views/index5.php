<?php 
	if (isset($_REQUEST['exampleInputName'])) {
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
	}
?>
<div class="row">
	<div class="col-lg-4 col-lg-push-4">
		<form action="index.php?dispatch=insert" method="POST">
			<div class="form-group">
				<label for="exampleInputName">Имя:</label>
				<input type="text" class="form-control" id="exampleInputName" placeholder="Имя" name="exampleInputName">
			</div>
			<div class="form-group">
				<label for="exampleInputPatronymic">Отчество:</label>
				<input type="text" class="form-control" id="exampleInputPatronymic" placeholder="Отчество" name="exampleInputPatronymic">
			</div>
			<div class="form-group">
				<label for="exampleInputSurname">Фамилия:</label>
				<input type="text" class="form-control" id="exampleInputSurname" placeholder="Фамилия" name="exampleInputSurname">
			</div>
			<div class="form-group">
				<label for="exampleInputDate">Дата рождения:</label>
				<input type="date" class="form-control" id="exampleInputDate" placeholder="Дата рождения" name="exampleInputDate">
			</div>
			<div class="form-group">
				<label for="exampleInputAccountNumber">Номер счета:</label>
				<input type="text" class="form-control" id="exampleInputAccountNumber" placeholder="Номер счета" name="exampleInputAccountNumber">
			</div>
			<div class="form-group">
				<label for="exampleInputAmmountAccount">Сумма на счете:</label>
				<input type="text" class="form-control" id="exampleInputAmmountAccount" placeholder="Сумма на счете" name="exampleInputAmmountAccount">
			</div>
			<div class="form-group text-center">
				<input type="submit" value="Добавить данные" name="add" id="FormSubmit">
			</div>
		</form>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	$(document).ready(function() {
	    $("#FormSubmit").click(function (e) {
	        e.preventDefault();

	        if($("#exampleInputName").val()==="") //simple validation
	        {
	            alert("Введите имя!");
	            return false;
	        }
	        if($("#exampleInputPatronymic").val()==="") //simple validation
	        {
	            alert("Введите отчество!");
	            return false;
	        }
	        if($("#exampleInputSurname").val()==="") //simple validation
	        {
	            alert("Введите фамилию!");
	            return false;
	        }
	        if($("#exampleInputDate").val()==="") //simple validation
	        {
	            alert("Введите дату рождения!");
	            return false;
	        }
	        if($("#exampleInputAccountNumber").val()==="") //simple validation
	        {
	            alert("Введите номер счета!");
	            return false;
	        }
	        if($("#exampleInputAmmountAccount").val()==="") //simple validation
	        {
	            alert("Введите сумму на счете!");
	            return false;
	        }
	        jQuery.ajax({
	            type: "POST",
	            data:{
	            	exampleInputName : $("#exampleInputName").val(),
	            	exampleInputPatronymic : $("#exampleInputPatronymic").val(),
	            	exampleInputSurname : $("#exampleInputSurname").val(),
	            	exampleInputDate : $("#exampleInputDate").val(),
	            	exampleInputAccountNumber : $("#exampleInputAccountNumber").val(),
	            	exampleInputAmmountAccount : $("#exampleInputAmmountAccount").val()
	            },
	            success:function(){
	            	$("#exampleInputName").val(''),
	            	$("#exampleInputPatronymic").val(''),
	            	$("#exampleInputSurname").val(''),
	            	$("#exampleInputDate").val(''),
	            	$("#exampleInputAccountNumber").val(''),
	            	$("#exampleInputAmmountAccount").val('')
	            	alert("Даные доавлены!");
	            },
	            error:function (xhr, ajaxOptions, thrownError){
	                alert(thrownError); 
	            }
	        });
	    });
    });
</script>