 <?php 

    $mess="";
    $messErr  = "";

    if($_SERVER['REQUEST_METHOD'] == "POST") {

      if(empty($_POST['usermess'])) {
        $messErr = "Please fill up the message";
      }
      else {
        $mess = $_POST['usermess'];
      }

      
      if($messErr == "") {

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

      $sql1 = "INSERT INTO `one2onemess` (`incomingmessage`, `outgoingmessage`, `message`) VALUES ('".$_SESSION['user']."', '".$_SESSION['friend']."', '$mess');";

      if($conn1->query($sql1)) {
            }

      else {
      echo "Failed to Insert Data.";
      echo "<br>";
      echo $conn1->error;
      }

      
      }

      $conn1->close();

        
      }
    }
  ?>