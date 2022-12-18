<?php

if(isset($_POST["status"])) {
   $status = $_POST["status"];


   $servername = "localhost";
   $username = "root";
   $password = "";
   $database_name = "db_esp32";

   // Create MySQL connection fom PHP to MySQL server
   $connection = new mysqli($servername, $username, $password, $database_name);
   // Check connection
   if ($connection->connect_error) {
      die("MySQL connection failed: " . $connection->connect_error);
   }

  // $sql = "INSERT INTO tbl_temp (temp_value) VALUES ($temperature)";
  
   $sql = "UPDATE `Light` SET `light`= $status WHERE id = 0";

   if ($connection->query($sql) === TRUE) {
      
   }


   $connection->close();
} 
?>
