<?php

	if(isset($_POST['submit']))
	{
          $con = new mysqli('localhost','root','','users');
          if(!$con)
          {

		$name = $con->real_escape_string($_POST['name']);
		$email =$con->real_escape_string( $_POST['email']);
		$password = $con->real_escape_string($_POST['password']);
		$cpassword = $con->real_escape_string($_POST['cpassword']);

		if ($name =="" || $email =="" || $password ==$cpassword) {
			echo "please check your inputs";
		}
		else
		{
			$sql = $con->(query:"select id from users where email=$email");
			if ($sql->num_rows>0) {
				echo "we have this email in our database";
			}
			else
			{}
		}
	}
	else
		{
			echo "connection is not avaliable";}

	}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no,initial-scale1.0,maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Register</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div class="container" style="margin-top: 100px;">
		<div class="row justify-content-center">
			<div class="col-mg-6 col-mg-offset-3" align="center"></div>
			<form method="post" action="register.php">
				<input  class="form-control" 	type="text" name="name" placeholder="Name"> <br>
				<input type="email" class="form-control" name="email" placeholder="email"><br>
				<input type="password" class="form-control" name="password" placeholder="password"><br>
				<input type="password" class="form-control" name="cpassword" placeholder="confirm password"><br>
				<input class="btn btn-primary" type="submit" name="submit" value="Register" >
			</form>
		</div>
	</div>

</body>
</html>