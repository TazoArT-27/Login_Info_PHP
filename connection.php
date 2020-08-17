<?php
   $username = "root";
   $password = "";
   $server = "localhost";
   $db = "login";

   $condition = mysqli_connect($server, $username, $password = "", $db = "Login");
   if($condition){
      // echo "Connection Successful";
      ?>
    <script>
 
         alert("Connection Successful");

    </script>
      <?php
   }
      
   else{
       echo "No Connection";
   }
?>