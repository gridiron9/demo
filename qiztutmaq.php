<?php 
	
   if($_SERVER['REQUEST_METHOD'] == 'POST')
{  
	$email = $_POST["email"];
    $name = $_POST["name"];
    $subject = $_POST["subject"];
    $sep = " ";
    $val = true;

     if(!filter_var($email, FILTER_VALIDATE_EMAIL))
     {
     	echo "this email is not valid";
     	$val = false;
     }


 //writing to file

$myfile= fopen("./information.txt", "w") ;



fwrite($myfile, $name . " | ");
fwrite($myfile, $email . " ");
fwrite($myfile, $subject . " ");

if (isset($_POST["veziyyet"])) {
	fwrite($myfile, $_POST["veziyyet"] . " ");
}


foreach($_POST["check_list"] as $selected) {
   
   fwrite($myfile, $selected . " ");
   fwrite($myfile," ");
}


fwrite($myfile," ");
 
 // Displays value of chec  ked checkbox.

fwrite($myfile, $_POST["comment"]);

}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="POST">
		<input size = "35" type="email" name="email" placeholder="enter your email"  required />
		 
		 <select name="veziyyet" required>
  		 <option >Evli</option>
 		 <option >Subay</option>
         <option >Dul</option>
         <option >bowanmiw</option>
		 </select>
		 <br>

		<input type="text" name="name" maxlength="30" minlength="2" required="" / placeholder="enter your name" size="35">
	    <br>

	    
          
          
		  <input type="text" name="subject" placeholder="why do you want to meet" minlength="2" maxlength="30"/ required size="35">
		  <br/>

		  <input type="checkbox" name="check_list[]" value = "ciddi-munasibet"/> Ciddi munasibet
          <input type="checkbox" name="check_list[]" value="muveqqeti" />muveqqeti
          <input type="checkbox" name="check_list[]" value="cay icmey" />cay-icmey 
          
          <br/>

          <textarea style="max-width:200px " placeholder="text" name = "comment"></textarea>


          <button type = "submit" name="submit" value="Submit"> Submit</button>


	</form>


</body>
</html>