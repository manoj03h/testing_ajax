<?php
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$message = $_POST['message'];
		
		$errorEmpty = false;
		$errorEmail = false;
		
		if(empty($name) || empty($email) || empty($message)){
			echo "<span class='form-error'>Fill in all Fields</span>";
			$errorEmpty =true;
		}elseIf(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			echo "<span class='form-error'>Write a valid e-mail id </span>";
			$errorEmail =true;
		}else{
			echo "<span class='form-success'></span>";
		}
	}
	else {
		echo "There was an error!";
	}

?>

<script>
	var errorEmpty = "<?php echo $errorEmpty; ?>";
	var errorEmail = "<?php echo $errorEmail; ?>";
	
	$("#name, #email, #message").removeClass("input-error");
	
	if(errorEmpty == true){
		$("#name, #email, #message").addClass("input-error");
	}
	if(errorEmpty == true){
		$("#email").addClass("input-error");
	}
	if(errorEmpty == false && errorEmail == false){
		$("#name, #email, #message").val("");
	}
</script>