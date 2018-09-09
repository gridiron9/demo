<?php 
	include_once 'dbh.inc.php';
	
	$first = $_POST['firstname'];
	$last = $_POST['lastname'];
	$email = $_POST['email'] ;
	$nickname = $_POST['nickname'];
	$pass = $_POST['password'];
    
    $sql = "INSERT into users (user_first,user_last,user_email,user_uid,user_pwd) VALUES ('$first','$last','$email','$nickname','$pass');";
    mysqli_query($conn,$sql);
    
    header("Location: ../lesson1.php?signup = success");
 	?>