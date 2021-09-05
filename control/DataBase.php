<?php
class DataBase{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "message";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
 
 return $conn;
 }
 function CheckUser($conn,$table,$email)
 {
$result = $conn->query("SELECT `name`, `email`, `password` FROM `registration` WHERE email='".$email."'");
 return $result;
 }
function CheckUserlogin($conn,$table,$username,$password)
 {
$result = $conn->query("SELECT `email`, `password` FROM `".$table."` WHERE email='".$username."' and password='".$password."'");
 return $result;
 }

 function CheckUseruid($conn,$table,$username)
 {
$result = $conn->query("SELECT * FROM `".$table."` WHERE email='".$username."'");
 return $result;
 }



 function InsertUser($conn, $Name, $Email,$password,$uniqueid)
 {
    $result= $conn->query("INSERT INTO `registration` (`name`, `email`, `password`,`uniqueid`) VALUES ('$Name', '$Email', '$password','$uniqueid')");
    
    if ($result === TRUE) 
    {
        echo "New record created successfully";
    } 
      else {
        echo $conn->error;
      }
      return $result;
 }

function CheckFrinedlist($conn,$user)
 {
$result = $conn->query("SELECT * FROM `friendlist` WHERE user='".$user."'");
 return $result;
 }


 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }


function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>