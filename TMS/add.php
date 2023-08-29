
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
    $insert = mysqli_query($connect,"INSERT INTO users(D_name,number,A_Driver,route,price) VALUES('$D_name',' $number','$A_Driver','$route',' $price')");
        if( $insert){
       
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
