<?php

//create the connection with the server name,username,password,database name
//$con=mysqli_connect('localhost:3308','root', '','mystore');
$con=mysqli_connect("sql103.infinityfree.com","if0_41125772","Abhi0405MITTAL","if0_41125772_Ecommerce");
//now check the condition of connection
if(!$con){
    die("connection failed :" .mysqli_connect_error());
  
}

?>


