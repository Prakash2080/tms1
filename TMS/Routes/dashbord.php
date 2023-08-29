<?php
session_start();
if(!isset($_SESSION['userdata'])){
    header("location:../");
}
?>
<html>
    <head><title>Transportation management system</title>  
    <link rel="stylesheet" href="../css/style.css">
</head><div>
<body>
            <style>
                
                #btn{
                    padding: 5px;
    border-radius: 10px;
    background-color:  blue;
    color: white;
    font-size: 13px;
    width:8%;
            }
            #btn1{
                    padding: 5px;
    border-radius: 10px;
    background-color: blue;
    color: white;
    font-size: 13px;
    width:8%;
            }
            #btn2{
                    padding: 5px;
    border-radius: 10px;
    background-color: blue;
    color: white;
    font-size: 13px; width:8%;
            }
            #btn3{
                    padding: 5px;
    border-radius: 10px;
    background-color: blue;
    color: white;
    font-size: 13px; width:8%;
            }

            #btn4   {
                    padding: 5px;
    border-radius: 10px;
    background-color: blue;
    color: white;
    font-size: 13px; width:8%;
            }
            #btn5  {
                    padding: 5px;
    border-radius: 10px;
    background-color:blue;
    color: white;
    font-size: 13px; width:8%;
            }
            #btn6 {
                padding: 5px;
    border-radius: 8px;
    background-color:red;
    color: white;
    font-size: 13px;
    margin:10px; width:8%;
            }
            #btn0 {
                padding: 5px;
    border-radius: 8px;
    background-color:blue;
    color: white;
    font-size: 13px;
    margin:10px; width:8%;
            }
            #btn01 {
                padding: 5px;
    border-radius: 8px;
    background-color:blue;
    color: white;
    font-size: 13px;
    margin:10px; width:8%;
            }
        </style>
   <div> 
        <a href="adddetail.php"><button id="btn">Add details</button></a>
        &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;

       
        <a href="adddetail1.php"> <button id="btn1">Driver</button> </a> &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;

        
        <a href="ADriver.html"><button id="btn2">Ass...Driver</button> </a> &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;

        
        <a href="trip.php"><button  id="btn3">Trip</button> </a> &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;

         <a href="salary.php"><button id="btn4">Salary</button> </a> &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;
         
        <a href="report.php"><button id="btn0">Mothly Report</button></a>&nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;
      
        <a href="logout.php"><button id="btn01">Logout</button></a>
    </div>
        
    <hr>
    </body>
</div>
    
</html>