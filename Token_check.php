<?php 
include ("Database.php");
$tid = $_REQUEST['chatid'];
$query = "SELECT tokenid from token WHERE tokenid='$tid'";
$result=$conn->query($query);
$token='';
// echo "running..";
// echo $tid;
// echo $result;

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $token = $row["tokenid"];
}

if($token==$tid) 
{
   
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Team found ✅');
    window.location.href='http://localhost/teamchat/chat.php';
    </script>"); 

}
else{
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Chat id does not exists ❌');
    window.location.href='http://localhost/teamchat/Homepage.php';
    </script>"); 
}

?>