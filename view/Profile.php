<!DOCTYPE html>
<html>
    <head>
        <title>Profile</title>
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

            if($userQuery->num_rows > 0) {
             while($user = $userQuery->fetch_assoc()) { 
              echo "<button id =".$user['frined']." onclick=myFunction(this.id)>".$user['friendname']."</button><br>";
             
            }

            
        } 
    ?>

<p id="dem"></p>
<script>


    var el_up = document.getElementById("dem");
            var el_down = document.getElementById("dem");
            function myFunction(clicked) {
                el_down.innerHTML = "ID = "+clicked;
                window.location.href = ('../view/message.php?id=' +clicked) ;
            }   

</script>
 

        
    </body>
</html>

<script type="">
    
    /*function myFunction() {

  
  var ne = document.getElementById("n").value;
  

  ne.onclick = function() {
    modal.style.display = "block";
   }

  //var nee = document.getElementById("demo").value;
  //window.location.href = ('../view/message.php?id=' + document.getElementById("n").value);

  /*
   $output.='<br>
                     <div id="demo" align="center"  value="'.$user['frined'].'"><input type="button" id="n" value="'.$user['frined'].'" type="button" class="button1" data-toggle="modal" data-target="#updatesectionmodal" onclick=myFunction()>
                    '.$user['friendname'].'
                    </div>
                     <br>
                     </input>
                     
                     ';
                     echo $output;*//*
  
}
</script>