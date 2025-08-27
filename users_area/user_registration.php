<?php
include('../includes/connect.php');
include('../functions/common_function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <!-- as this div.conyainer.fluid is the which fit accornding to the width of our system -->
    <div class="container fluid">
<h2 class="text-center text-primary my-3">New User Registration</h2>
<div class="row d-flex align-item-center justify-content-center">
    <!-- lg stand gor the large and the xl stand for the extra large -->
    <div class="col-lg-12 col-xl-6">
        <!-- this attribute enctype in foe those input  which are not of text  -->
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-outline">
        <label for="user_username" class="form-label">User Name</label>
        <input type="text" id="user_username"class="form-control" placeholder="Enter your name"  name="user_username"/>
</div>


<div class="form-outline my-4">
        <label for="user_email" class="form-label">UserEmail</label>
        <input type="email" id="user_email"class="form-control" placeholder="Enter your Email id" name="user_email"/>
</div>


<div class="form-outline">
        <label for="user_image" class="form-label">User image</label>
        <input type="file" id="user_image"class="form-control" required="required"  name="user_image"/>
</div>

<div class="form-outline my-4">
        <label for="user_password" class="form-label">Password</label>
        <input type="password" id="user_password"class="form-control" placeholder="Enter your password" name="user_password"/>
</div>

<div class="form-outline my-4">
        <label for="confirm_password" class="form-label">Confirm Password</label>
        <input type="password" id="confirm_password"class="form-control" placeholder="Re-Enter your password" autocomplete="off" required="required"  name="confirm_password"/>
</div>


<div class="form-outline">
        <label for="user_address" class="form-label">Address</label>
        <input type="text" id="user_address"class="form-control" placeholder="Enter your Address" autocomplete="off" required="required" name="user_address"/>
</div>


<div class="form-outline my-4">
        <label for="user_usermobile" class="form-label">Mobile no</label>
        <input type="text" id="user_usermobile"class="form-control" placeholder="Enter your mobile No" autocomplete="off" required="required" name="user_usermobile"/>
</div>

<div class="">
        <input type="submit" value ="Register"
        class="bg-info text-dark mx-2 mb-2 px-2" name="user_register">
</div>
    <p class="fw-bold my-2 mb-5">Already has an account ?<a href="user_login.php" class="text-success mx-1">Login</a></p>

</div>
</div>
</div>
    </form>
    </div>

    <!-- now inser the data inside our database -->
<?php

if(isset($_POST['user_register'])){
        $user_username=$_POST['user_username'];
        $user_email=$_POST['user_email'];
        $user_image=$_FILES['user_image']['name'];
        $user_image_tmp=$_FILES['user_image']['tmp_name'];
        $user_password=$_POST['user_password'];
        $hash_password=password_hash($user_password,PASSWORD_DEFAULT);
        $confirm_password=$_POST['confirm_password'];
        $user_address=$_POST['user_address'];
        $user_usermobile=$_POST['user_usermobile'];
        $user_ip=getIPAddress();

        // now we will check this condition to avoid the duplicacy.
// username is checked
        $select_query="Select * from `user_table` where username='$user_username' or user_email='$user_email'";      
        $result=mysqli_query($con,$select_query);
      $rows_count=mysqli_num_rows($result);
      if($rows_count>0)
      {
        echo "<script>alert('This username or users gmail is already inserted inside to our database')</script>";
      }
      else if($user_password!=$confirm_password)
      {
        echo "<script>alert('please,Match the password')</script>";
      }
      else{
        //now we will write the insert query
        move_uploaded_file( $user_image_tmp,"./user_images/$user_image");
        $insert_query="insert into `user_table` (username,user_email,user_password,user_image,user_ip,user_address,user_mobile)
        values ( '$user_username', '$user_email', '$hash_password', '$user_image','$user_ip','$user_address','$user_usermobile')";
        $result_query=mysqli_query($con,$insert_query);
      
}

//selecting cart item
$select_cart_items="Select * from `cart_details` where ip_address='$user_ip'";
$result_cart=mysqli_query($con,$select_cart_items);
$rows_count=mysqli_num_rows($result);
if($rows_count>0){
        $_SESSION['username']= $user_username;
        echo "<script>alert('you have item in the cart')</script>";
        echo "<script>window.open('checkout.php','_self')</script>";
}
else{
        echo "<script>window.open('../index.php','_self')</script>";
}
}
?>
</body>
</html>