<?php
$connect = mysqli_connect('localhost','root','','ram')or die("connection failed!");

if($connect){
    echo "connection succesfull";

}else{
    echo"Not connected";
}

?>