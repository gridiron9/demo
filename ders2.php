<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['name'];
    if (empty($name)) {
        echo "Name is empty";
    } 
    else {
        echo $name;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="POST">
		<input placeholder="Azivi yaz qaqa" name="name" title="Name"/>
		<br/>
		<textarea style="max-width: 300px" rows="10" name="comment" placeholder="Ne sozun var yaz gelsin"></textarea>
		<button type="submit">Gonder</button>
	</form>
</body>
</html>