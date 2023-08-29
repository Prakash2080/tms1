
<?php
 
 $connect = mysqli_connect('localhost','root','','ram')or die("connection failed!");

 if($connect){
     echo "connection succesfull";
 
 }else{
     echo"Not connected";
 }
 $D_name = $_POST['D_name'];
 $number= $_POST['number'];
$A_Driver = $_POST['A_Driver'];
$route = $_POST['route'];
$price = $_POST['price'];
$update = mysqli_query($connect, "UPDATE users SET users.D_name=info.D_name,users.number=info.number,users.A_Driver=info.A_Driver,users.route=info.route,users.price=info.price WHERE users.ID = info.ID");
    //$update = mysqli_query($connect,"UPDATE info SET D_name = '$D_name', number='$number',A_Driver=' $A_Driver',route='$route',price='$price'");
        if( $update){
            
       
          /*  echo '
            <script>
        alert("successfull!");
        window.location = "../routes/add.html";
        </script>
            ';
            */
            echo '<script>
            window.alert(" Success, Welcome ");
            window.location.href="../routes/add.html";
        </script>';
            
        }
       
        else{
            echo '
            <script>
        alert("some error occured!");
        window.location = "../routes/add.html";
        </script>
            ';
        }
        
    ?>
