<?php


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
   $myObj = (object)array();

  // $sql = "INSERT INTO tbl_temp (temp_value) VALUES ($temperature)";
  
   $sql = "SELECT * FROM `Light` WHERE id = 0";

 
      foreach ($connection->query($sql) as $row) {
      
      
      $myObj->light = $row['light'];
      
      
      $myJSON = json_encode($myObj);
      
      echo $myJSON;
    }

  
      
   


   $connection->close();

?>
