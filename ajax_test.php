<!DOCTYPE html>

<html>
<head>
	<title>Ajax Test</title>
	<style>
		.error{
			color: red;
		}
		.success{
			color: green;
		}
		.input-error {
			box-shadow: 0 0 5px red;
		}
		.input-success {
			box-shadow: 0 0 5px green;
		}
	</style>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js">
	</script>
	<script type="text/javascript" >
		$(document).ready(function(){
			$("form").submit(function(e){
				e.preventDefault();
				var name = $("#name").val();
				var email = $("#email").val();
				var gender = $("#gender").val();
				var message = $("#message").val();
				var submit = $("#submit").val();
				$(".form-message").load("ajax_data.php", {
					name: name,
					email: email,
					gender: gender,
					message: message,
					submit: submit
				});
			});
		});

		</script>

</head>
<body>
	<h2>Testing Ajax</h2>
	<form action="ajax_data.php" method="post">
		<div id="test_msg"></div><br/>
		<input id="name" type="text"  name="name" placeholder="Full Name"/>
		<br/><br/>
		<input id="email" type="text"  name="email" placeholder="Email"/>
		<br/><br/>
		<select id="gender" name="gender">
			<option value="male">Male</option>
			<option value="female">Female</option>
		</select>
		<br/><br/>
		<textarea id="message" name="message" placeholder="Message"></textarea>
		<br/><br/>
		<input id="submit" name="submit" type="submit"  value="submit" />
		<br/><br/>
		<p class="form-message"></p>
	</form>
</body>
</html>