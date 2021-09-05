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
          echo $row['incomingmessage']."  :  "  . $row['message'];
          echo "<br>";
        }
      }

        }

        
        

        $conn1->close();

      ?>