<?php
session_start();
include('connect.php');
$mobile = $_POST['mobile'];
$password = $_POST['password'];

$check = mysqli_query($connect, "SELECT*FROM user WHERE mobile='$mobile 'AND password='$password'");
if(mysqli_num_rows($check)>0)
{
$userdata = mysqli_fetch_array($check);

$_SESSION['userdata']= $userdata;


echo '
    <script>
    window.location = "../Routes/dashbord.php";
    </script>
    
    ';      
}
else{
    echo '
    <script>
    alert("invalid credential");
    window.location = "../routes/register.html";
    </script>
    
    ';      
}
?>