<?php

//create the connection with the server name,username,password,database name
$con=mysqli_connect('localhost:3308','root', '','mystore');

//now check the condition of connection
if(!$con){
    die(mysqli_error($con));
  
}

?>