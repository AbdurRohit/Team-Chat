<!DOCTYPE html>
<html>
<body>
<?php 
include ("Database.php");
  date_default_timezone_set('Asia/Kolkata');
  $currentDateTime = date('d-m-y h:i:s');
  $Name = $_REQUEST['username'];
  $doj = $currentDateTime; 
  $pswd = $_REQUEST['password'];   


  $query1="SELECT pswd from reg_data where username= '$Name'";
  $result = mysqli_query($conn, $query1);
  $password = '';
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $password = $row["pswd"];
    }
    mysqli_close($conn); 
    
  if ($password==$pswd)
  {
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully logged in ✅');
    window.location.href='http://localhost/teamchat/Homepage.php';
    </script>");  

    session_start(); // Start the session
    $_SESSION['userid'] = $Name;
    // sleep(3); 
    // header("Location: http://localhost/teamchat/chat.html");
  }
  else{
   
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Wrong Password/Username');
    window.location.href='http://localhost/teamchat/Login.php';
    </script>");
  }
  
?>

</body>
</html>