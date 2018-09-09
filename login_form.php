<!DOCTYPE html>
<html>
<head>
  <title> Registration form form</title>
  <link rel="stylesheet" type="text/css" href="login_form.css">
</head>
<style type="text/css"></style>
<body>
<div class="container">
  <div class="simple-form">
    <form id ="registration">
      <h1 id="header">Registation form</h1>
      
      <input type="text" name="fname" id="button" placeholder="Enter first name" required>
      <br>
      <br>
      <input type="text" name="lname" id="button" placeholder="Enter your last name" required>
      <br>
      <br>
      <input type="email" name="email" id="button" placeholder="Enter your email" required>
      <br>
      <br>
      <input type="password" name="pass" id="button" placeholder="Enter your password" required>
      <br>
      <br>
      <select id="ph">
        <option>+994</option>
        <option>+993</option>
        <option>+992</option>
        <option>+991</option>
        <option>+990</option>
        <option>+989</option>
      </select>

      <input type="number" name="num" placeholder="Enter your name" id="phone" required>
      <br>
      <br>
      <input type="radio" name="gender" id="rd" required> 
      <span id="but">Male</span>&nbsp; &nbsp; &nbsp; &nbsp;
      <input type="radio" name="gender" id="but" > 

      <span id="but">Female</span>
      <br>
      <br>
      <input type="submit" value="Register" name="butt" id = "butt" required>
    </form>
  </div>
</div>

</body>
</html>