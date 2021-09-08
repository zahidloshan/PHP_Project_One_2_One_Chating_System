<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Message</title>
  <link rel="stylesheet" type="text/css" href="../Css/Css1.css">
</head>
<body>


  
  


    <script>
    
    function submit() {
      var usermess= document.getElementById("mess").value;
      

      if(usermess == "") {
        document.getElementById("p1").innerHTML = "Fill up the form properly";
        document.getElementById("p1").style.color = "red";
      }

      else {

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if(this.readyState == 4 && this.status == 200) {
            document.getElementById("p1").innerHTML = xhttp.responseText;
            document.getElementById("p1").style.color = "green";
          }
        }

        xhttp.open("POST", "../control/messageaction.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("usermess="+usermess);
      }
    }

    

  </script>
  <div class="friend" >
  <div class="scrollbar" >
  
  
  <p id="p1"></p>
  <p id="p2"></p>
  </div>
  <h1>Message</h1>
  <label for="mess">message:</label>
  <input type="text" id="mess" name="mess">
  <input type="submit" id="buttonsend" name="Send" value="Send" onclick="submit()">
  
  </div>
  <?php 
  session_start();
  $_SESSION['user'];
  $_SESSION['friend']= $_GET['id'];

   ?>


<script>
var input = document.getElementById("mess");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();
   document.getElementById("buttonsend").click();
  }
});
</script>

  

</body>
</html>

<script>
function loadXMLDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("p2").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "../control/server.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send();
}
setInterval (function(){
  loadXMLDoc();

},100);

</script>

