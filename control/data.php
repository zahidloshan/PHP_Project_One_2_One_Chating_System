<?php 

 include('DataBase.php');

            $connection = new DataBase();
            $conobj=$connection->OpenCon();
            session_start();
            $userQuery=$connection->ShowAll($conobj,'registration');

            if($userQuery->num_rows > 0) {
             while($user = $userQuery->fetch_assoc()) { 

             	$_SESSION['users']=$user['uniqueid'];

              $output.='<a href="../view/message.php?uniqueids='.$user['uniqueid'].'">
                     </a>
                     ';
            }

        } 



 ?>