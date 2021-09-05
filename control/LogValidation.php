<style >
	.alltext {
          text-align: center;
          margin: 15px 0 10px 0;
          font-weight: bold;
        }
</style>
<?php

include('DataBase.php');


if(isset($_POST['submit'])) {


     if (empty($_POST['username']) || empty($_POST['password'])) {

			echo "Please Enter username or password";

		}
		else {

			$username=$_POST['username'];
               $password=$_POST['password'];
			    $connection = new DataBase();
				$conobj=$connection->OpenCon();

				$userQuery=$connection->CheckUserlogin($conobj,"registration",$username,$password);

				if ($userQuery->num_rows > 0) {
                       
					session_start();
				     $userQueryuid=$connection->CheckUseruid($conobj,"registration",$username);

				    if($userQueryuid->num_rows > 0) {
			             while($user = $userQueryuid->fetch_assoc()) { 
                             $_SESSION['uniqueid'] = $user['uniqueid'];
                             $_SESSION['user'] = $username;
			             header('Location: ../view/Profile.php');
			            }
			        
				   }
				 else {
				 	echo "<br>";
				echo "<div class=\"alltext\">Username or Password is invalid </div>";
				echo "<br>";
				}
				$connection->CloseCon($conobj);



		}
	}
}


?>