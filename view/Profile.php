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
            $connection = new DataBase();
            $conobj=$connection->OpenCon();

            $userQuery=$connection->CheckFrinedlist($conobj,$userid);
            echo "<div class=".'friend'.">";
            echo "<div id=".'backcolor'.">";
            echo "<table>";
            echo "<tr>";
            echo "<th>";
            echo "<h1 id=".'chat'." >Chat</h1>"; 
            echo "</th>";
            echo "<th>";
            echo "<input type=".'text'." placeholder=".'Search..'." class=".'search'.">";
            echo "</th>";
            echo "</tr>";
            echo "</table>";
            echo "<hr>";
            echo "</div>";
            echo "<div class=".'scrollbar'.">";
            if($userQuery->num_rows > 0) {
             while($user = $userQuery->fetch_assoc()) { 
              
              echo "<div align=".'center'." class=".'container'.">";

              echo "<button id =".$user['frined']." onclick=myFunction(this.id)>";

              echo '<img align="left" class="img" src="../uploads/'.$user['frined'].'.png" alt='.$user['frined'].' width="40" height="40">';
             
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

