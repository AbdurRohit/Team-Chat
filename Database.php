<?php 
  $servername = "localhost";
  $username = "root";
  $password = "";
  $databasename = "teamchat_users";
  // error_reporting(0);
  // CREATE CONNECTION
  $conn = new mysqli($servername,
    $username, $password, $databasename);
   
  // GET CONNECTION ERRORS
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  ?>