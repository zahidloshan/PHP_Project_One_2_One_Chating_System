  
<?php


include('../control/RegValidation.php');

?>


<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<script src="JS/JSRegistration.js"></script>
	<link rel="stylesheet" type="text/css" href="../Css/LoginCss.css">
</head>
<body>

	<h1 class="imgcontainer">Registration</h1>

	<p id="mytext" class="imgcontainer" ></p>
    <div>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" action="" class="regform" onsubmit="return validateForm()" method="POST">

	<fieldset class="columnleft">
    <legend class="imgcontainer">Basic Information </legend>
    <table width="100%">
    	<tr>
    		<td>
	<label for="userName">Name : </label>
	        </td>
	<td>
	<input type="text" id="userName" name="uname" value="<?php echo $userName ?>">
	</td>
	</tr>
	<p><?php echo $userNameErr; ?></p>
    <!-- Email  -->
	<tr>
		<td>
	<label for="Email">Email : </label>
	</td>
	<td>
	<input type="text" name="email" id="eamil" value="<?php echo $Email ?>">
	</td>
	</tr>
	<p><?php echo $EmailErr; ?></p>

	<!-- Password  -->
	<tr>
		<td>
	<label for="password">Password : </label>
	</td>
	<td>
	<input type="password" name="pass" id="password" value="<?php echo $password ?>">
	</td>
	</tr>
	<p><?php echo $passwordErr; ?></p>

	<!-- Reenter Password  -->
	<tr>
		<td>
	<label for="rpassword">Confirm Password : </label>
	</td>
	<td>
	<input type="password" name="rpass" id="rpassword" value="<?php echo $rPsswordErr ?>">
	</td>
	</tr>
	<p><?php echo $rPsswordErr; ?></p>
	</table>

    </fieldset>
    <div>
    <button type="button" id="backbuttonreg"> <a href="Login.php">Back!</a> </button>
    <input id="submit" name="submit" type="submit">
	</div>
   
    </form>



</body>
</html>