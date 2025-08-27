<?php
include('../includes/connect.php');
include('../functions/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment </title>
            <!-- bootstrap css link -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
       .payment_image{
           width:80%;
           margin:auto;
           display:block;
          
        }
        </style>
<body>
    <?php
$user_ip=getIPAddress();
$get_user="Select * from `user_table` where user_ip='$user_ip'";
$result=mysqli_query($con,$get_user);
$run_query=mysqli_fetch_array($result);
$user_id=$run_query['user_id'];


    ?>
<div class="container">
    <h2 class="text-center text-success my-4">Payment Options</h2>
    <div class="row d-flex justify-content-center align-item-center my-5">
        <!-- now this col-md-6 means that in medium screen this upi image will take the column of 6  -->
        <div class="col-md-6">
       <a href="https://www.paypal.com"><img src="../image/upi.png" alt="upi" class="payment_image"></a>
</div>
<div class="col-md-6">
       <a href="order.php?user_id=<?php 
       echo $user_id ?>"><h2 class="text-center my-5 py-5">Pay Offline</h2></a>
</div>
</div>
</div>
</body>
</html>