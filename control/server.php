<?php
    $hostname = "localhost";
        $username = "root";
        $password = "";
        $dbname = "message";

        $conn1 = new mysqli($hostname, $username, $password, $dbname);

        if($conn1->connect_errno) {
        echo "1. Database Connection Failed!...";
        echo "<br>";
        echo $conn1->connect_error;
        }
        else {
          session_start();

        $sqlshow = "SELECT * FROM `one2onemess` WHERE (incomingmessage='".$_SESSION['user']."' and outgoingmessage='".$_SESSION['friend']."') or (outgoingmessage='".$_SESSION['user']."' and incomingmessage='".$_SESSION['friend']."')";
       $res1 = $conn1->query($sqlshow);
       
      if($res1->num_rows > 0) {
        while($row = $res1->fetch_assoc()) {

            echo "<div align=".'right'.">";
          
          echo "<table>";
            echo "<tr>";
            echo "<th>";

          echo '<img align="left" class="img" src="../uploads/'.$row['incomingmessage'].'.png" alt='.$row['incomingmessage'].' width="20" height="20">';
          echo "</th>";
          echo "<th>";
          echo $row['message'];
          echo "</th>";
            echo "</tr>";
            echo "</table>";
          echo "<br>";
          echo "</div>";
         
          }
        
      }

        }

        
        

        $conn1->close();

      ?>