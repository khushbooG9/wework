<?php

   error_reporting(E_ERROR | E_PARSE);

   $jobID = $_GET["jobID"];
   $jobTitle = $_GET["jobTitle"];
   $jobLocation = $_GET["jobLocation"];

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


     $sql = "DELETE FROM jobs WHERE Id = $jobID";
  // $sql = "INSERT INTO jobs (Id, title, location) VALUES (".$jobID.", '".$jobTitle."', '".$jobLocation."' )";

   //$sql = "INSERT INTO jobs (Id, title, location) VALUES (1, 'Software Developer', 'Bangalore')";


   $resp = new stdClass();

   if ($conn->query($sql) == True) {
      $resp->status = True;
   }
   else{
      $resp->status = False;
   }

   $respJSON = json_encode($resp);

   header('Content-Type: application/json');
   echo $respJSON;
   
   $conn->close();

?>