<?php
include("connect.php");
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$address = $_POST['address'];

if($password==$cpassword){
    $insert = mysqli_query($connect,"INSERT INTO user(name,mobile,password,address) VALUES('$name','$mobile','$password','$address')");
    if( $insert){
        echo '
        <script>
    alert("registration successfull!");
    window.location = "../";
    </script>
        ';
    }
    else{
        echo '
        <script>
    alert("some error occured!");
    window.location = "../routes/register.html";
    </script>
        ';
    }
}
else{
    echo '
    <script>
    alert("password and confirm password doesnt match!");
    window.location = "../routes/register.html";
    </script>
    
    ';      
}



?>