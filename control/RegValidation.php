<?php
include('DataBase.php');

	$userName=$Email=$password=$rPssword="";
	$userNameErr=$EmailErr=$passwordErr=$rPsswordErr= "";

	if($_SERVER['REQUEST_METHOD'] == "POST") {


		if (empty($_POST['uname'])) {

			$userNameErr="Please Enter Name";
			
		}
		else {
			$userName=$_POST['uname'];
		}

		

		if (empty($_POST['email'])) {

			$EmailErr="Please Enter Email";
			
		}
		else {
			$Email=$_POST['email'];
		}

		if (empty($_POST['pass'])) {

			$passwordErr="Please Enter Password";
			
		}
		else {
			$password=$_POST['pass'];
		}


		if($_POST['pass']!=$_POST['rpass'])
		{

			$passwordErr="Password and Confirm Password not same";

		}

		else
		{
			$rPssword=$_POST['rpass'];
		}

		if ($userNameErr==""&& $passwordErr== "" &&$rPsswordErr=="" && $EmailErr== "") {


			$connection = new DataBase();
				$conobj=$connection->OpenCon();

				$userQuery=$connection->CheckUser($conobj,"registration",$Email);

				if ($userQuery->num_rows > 0) {

					echo "You have already an Account!!";
				   }
				 else {
				 	$uniqueid=rand(time(),10000000);

			        $InsertQuery=$connection->InsertUser($conobj,$userName,$Email,$password,$uniqueid);
			        $connection->CloseCon($conobj);
			        header('Location: ../view/login.php');
				   }

				 }
		}


?>