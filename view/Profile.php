<!DOCTYPE html>
<html>
    <head>
        <title>Profile</title>
         <link rel="stylesheet" type="text/css" href="../Css/Css1.css">
    </head>
    <body>


    
    <?php

    include('../control/DataBase.php');
    session_start();

    if(empty($_SESSION["user"])) 
    {
    header("Location: login.php"); // Redirecting To Home Page
    }


    $userid = $_SESSION['user'];
    $output="";
            $connection = new DataBase();
            $conobj=$connection->OpenCon();

            $userQuery=$connection->CheckFrinedlist($conobj,$userid);
            echo "<div class=".'friend'.">";
            echo "<div id=".'backcolor'.">";
            echo "<h1 align=".'left'." >Profile</h1> <hr>"; 
            echo "</div>";
            echo "<div class=".'scrollbar'.">";
            if($userQuery->num_rows > 0) {
             while($user = $userQuery->fetch_assoc()) { 
              
              echo "<div align=".'center'." class=".'container'.">";

              echo "<button id =".$user['frined']." onclick=myFunction(this.id)>";

              echo "<img align=".'left'."  src=".'https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/1_copy.jpg'." alt=".'https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/1_copy.jpg'." width=".'40'." height=".'40'.">";
             
              echo "<p class=".'text'." align=".'right'.">".$user['friendname']."</p>";
              echo  "</button>";
              echo "<hr id=".'hr'.">";
              echo "</div>";
             
            }

            
        } 

        echo "</div>";
        echo "</div>";
    ?>
 
<p id="dem"></p>
<script>


    //var el_up = document.getElementById("dem");
            //var el_down = document.getElementById("dem");
            function myFunction(clicked) {
                //el_down.innerHTML = "ID = "+clicked;
                window.location.href = ('../view/message.php?id=' +clicked) ;
            }   

</script>
 

      
    </body>
</html>

