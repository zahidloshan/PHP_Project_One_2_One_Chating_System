<?php


include('../control/LogValidation.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <script src="JS/JSLogin.js"></script>
    <link rel="stylesheet" type="text/css" href="../Css/LoginCss.css">
   
</head>
<body>
   
	<h1 class="imgcontainer">Login Form</h1>
    
    <form name="LoginForm" action="" onsubmit="return validateForm()" method="POST"> 
    <h3 class="imgcontainer">Already have an account?</h3>
     <div class="imgcontainer">
    <img src="man.png" alt="Avatar" class="avatar">
    </div>
    <div>
    <label for="userName" class="label">User Name :</label>
	<input type="text" id="userName" name="username" placeholder="Enter your username" >
    </div>
    <div>
	<label for="Password" id="password" class="label">Password :</label>
    <input type="password" id="Password" name="password" placeholder="Enter your password" >
    </div>
    <div>
    <p id="mytext" class="alltext"></p>
    </div>
    <div>
    <button type="button"> <a href="Registration.php">Sign Up!</a> </button>
    <input id="submit" name="submit" type="submit" value="LOGIN" >
    </div>
    

    </form>

</body>
</html>