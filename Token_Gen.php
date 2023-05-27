<?php 
include ("Database.php");
date_default_timezone_set('Asia/Kolkata');
$currentDateTime = date('d-m-y h:i:s');
$token = substr(bin2hex(random_bytes(16)), 0, 8); // Generate a random string of 16 bytes and convert it to hexadecimal, then extract the first 8 characters

session_start(); // Start the session

$_SESSION['token'] = $token; 

$TokenId = $_SESSION['token'];
$doj = $currentDateTime;
$Uid = $_SESSION['userid'];

$query = "INSERT INTO token VALUES ('$TokenId','$doj','$Uid')";
$conn->query($query);

header("Location: http://localhost/teamchat/chat.php");


?>