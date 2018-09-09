<?php 
	include_once 'include/dbh.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="sytle.css">
</head>
<body>

	 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

	Name: <input type="text" name="name">
	<br>
	E-mail: <input type="text" name="email">
 	<br>
	Website: <input type="text" name="website">
	<br>
	Comment: <textarea name="comment" rows="5" cols="40"></textarea>
	Name: 
	
	<input type="submit"> 
    
    <input type="radio" name="gender" value="female">Female
	<input type="radio" name="gender" value="male">Male
	<input type="radio" name="gender" value="other">Other

	</form>
  	
  	<?php 
    
    $name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


  	 ?>

</body>
</html>