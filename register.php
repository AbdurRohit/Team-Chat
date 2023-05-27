<?php 
 include ("Database.php");
  
  $Name = $_REQUEST['username'];
  $pswd = $_REQUEST['password'];
  $emai = $_REQUEST['email'];
  $dob = $_REQUEST['dob'];
  
  $query = "INSERT INTO reg_data VALUES ('$Name','$pswd','$emai','$dob')";
  $result = $conn->query($query);
  
  if ($result === TRUE) {
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Record created successfully ✅');
    window.location.href='http://localhost/teamchat/login.php';
    </script>");   
    exit();

  } else { 

    echo ("<script LANGUAGE='JavaScript'>  
    window.alert('Something went wrong ❌');
    window.location.href='http://localhost/teamchat/reg.html';
    </script>");

    // echo "Error: " . $query . "<br>" . $conn->error;
  }
  $conn->close();

?>