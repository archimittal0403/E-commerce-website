<?php
include('../includes/connect.php');
include('../functions/common_function.php');

@session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <!-- bootstrap css link -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">



</head>
<style>
/* 
        This is basically is used for hide the horizonta; scrolling */
 body{
        overflow-x:hidden;
 }       
        </style>

<body>
        <div class="container-fluid">
            
            <h2 class="text-center text-primary my-4">User Login</h2>
            <div class="row  d-flex align-item-center justify-content-center">
            <div class="col-lg-12 col-xl-6 m-5">
                <form action="" method="post">
                <div class="form-outline mb-4">
        <label for="user_username" class="form-label">User Name</label>
        <input type="text" id="user_username" class="form-control" placeholder="Enter your name" autocomplete="off" required="required" name="user_username"/>
</div>
<div class="form-outline my-4">
        <label for="user_password" class="form-label">Password</label>
        <input type="password" id="user_password" class="form-control" placeholder="Enter your password" autocomplete="off" required="required"  name="user_password"/>
</div>

 <div class="form-outline mb-4">
        <label for="user_username" class="form-label">Enter the Captcha Code</label>
        <input type="text"  class="form-control" placeholder="Enter your captcha" autocomplete="off" required="required" name="captcha" id="captcha"/>
</div>

<div><img src="captcha.php"><a href="" class="mx-3">Refresh</a></div> 


<div class="mt-4 pt-2">
        <input type="submit" value ="Login"
        class="bg-info text-dark mx-2 mb-2 px-2" name="user_login">

    <p class="fw-bold my-2 mb-5">Create an account ?<a href="user_registration.php" class="text-success mx-1">Register</a></p>

</div> 



</form>
        </div>
</div>
</div>
</body>
</html>


<?php
if(isset($_POST['user_login'])){
       $user_username=$_POST['user_username'];
       $user_password=$_POST['user_password'];

       $select_query="Select * from `user_table` where username='$user_username'";
       $result=mysqli_query($con,$select_query);
       $row_count=mysqli_num_rows($result);
       $row_data=mysqli_fetch_assoc($result);
       $user_ip=getIPAddress();

       // now fetch the cart item
       $select_query_cart="Select * from `cart_details` where ip_address='$user_ip'";
       $result_cart=mysqli_query($con,$select_query_cart);
       $row_count_cart=mysqli_num_rows($result_cart);

       if($row_count>0){
        $_SESSION['username']=$user_username;
if(password_verify($user_password,$row_data['user_password'])){
        if($_SESSION['CODE']==$_POST['captcha']){
     if($row_count==1 and $row_count_cart==0){
        $_SESSION['username']=$user_username;
echo "<script>alert('The user is login')</script>";
echo "<script>window.open('profile.php','_self')</script>";
     }
     else{
        echo "<script>alert('The user is login')</script>";
echo "<script>window.open('payment.php','_self')</script>";
     }
}
}
else{
        echo "<script>alert('Invalid credentails')</script>";
}
       }
       else{
        echo "<script>alert('Invalid credentials')</script>";
       }
}
?>