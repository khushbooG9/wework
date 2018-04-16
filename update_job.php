<?php

   error_reporting(E_ERROR | E_PARSE);

   $jobID = $_GET["jobID"];
   $jobTitle = $_GET["jobTitle"];
   $jobloc = $_GET["jobloc"];

   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "weWork";

   // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);
   // Check connection
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   } 

   //$sql = "SELECT * FROM jobs WHERE id = ".$jobID;
   $sql = "UPDATE jobs SET title = '$jobTitle',location = '$jobloc' WHERE id = $jobID";


   $result = $conn->query($sql);

   $resp = new stdClass();

   $resp = new stdClass();

   if ($conn->query($sql) == True) {
      $resp->status = True;
   }
   else{
      $resp->status = False;
   }


   if ($result->num_rows > 0) {
       // output data of each row
      while($row = $result->fetch_assoc()) {
         $resp->id = $row['Id'];
         $resp->title = $row['title'];
         $resp->location = $row['location'];
      }
   }

   $respJSON = json_encode($resp);

   echo $respJSON;
   header('Content-Type: application/json');
   $conn->close();

?>