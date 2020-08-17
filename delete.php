<?php
   include 'connection.php';

   $id = $_GET['id'];
//here, inside the square braces, the 'id' is the 'id' which is used in display.php after the '?' sign
   $deletequery = "delete from registration where id=$id";
   //here the first id is for the id of the backend table which i created for serial number and the $id is to fetch the id after ? mark sign in display.php
   $query = mysqli_query($condition, $deletequery);
   //here $condition is needed to login into my backend and to connect with the datas inside that
   header('location:display.php'); 
?>