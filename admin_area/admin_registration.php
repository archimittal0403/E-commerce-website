<?php
include('../includes/connect.php');
include('../functions/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
      <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
  
    <!-- fontawesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../style.css">
</head>
<body>
    
<style>

  </style>
<div class="container-fluid m-3">
    <h2 class="text-center mb-4 mt-5">Admin Registration</h2>
    <div class=" row d-flex justify-content-center align-item-center">
        <div class="col-lg-6">
            <img src="../image/admin_regis.jpg" alt="adin registration" class="img-fluid">
</div>

<div class="col-lg-6">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-outline mb-3">
<label for="admin_name" class="form-label">Username :-</label>
<input type="text" id="admin_name" name="admin_name" placeholder="Enter the your Name" required="required" class="form-control w-50 ">
</div>


        <div class="form-outline mb-3">
<label for="admin_email" class="form-label">Email Id :-</label>
<input type="email" id="admin_email" name="admin_email" placeholder="Enter the your Email id" required="required" class="form-control w-50 ">
</div>

<div class="form-outline mb-3">
        <label for="admin_image" class="form-label">User image</label>
        <input type="file" id="admin_image" class="form-control w-50" required="required"  name="admin_image">
</div>

        <div class="form-outline mb-3">
<label for="admin_password" class="form-label">Password :-</label>
<input type="password" id="admin_password" name="admin_password"   placeholder="Enter the your password" required="required" class="form-control w-50 ">
</div>

     <div class="form-outline mb-3">
<label for="confirm_password" class="form-label">Confirm Password :-</label>
<input type="password" id="confirm_password" name="confirm_password"   placeholder="Renter your password" required="required" class="form-control w-50 ">
</div>


<div class="form-outline mb-3">
<input type="submit" class="bg-info  py-2 px-3 border-0" name="admin_registration" value="Register">
<p class="small fw-bold mt-4">Don't you have amount?<a href="admin_login.php" class="link-danger mx-2">Login</a></p>
</div>
</form>
</div>
</div>
</div>


<?php

if(isset($_POST['admin_registration'])){
  $admin_name=$_POST['admin_name'];
  $admin_email=$_POST['admin_email'];
  $admin_image=$_FILES['admin_image']['name'];
$admin_image_temp=$_FILES['admin_image']['tmp_name'];
$admin_password=$_POST['admin_password'];
//$hash_password=password_hash($admin_password,PASSWORD_DEFAULT);
$confirm_password=$_POST['confirm_password'];


$select_query="Select * from `admin_table` where admin_name='$admin_name' or admin_email='$admin_email'";
$result=mysqli_query($con,$select_query);
$row_count=mysqli_num_rows($result);
if($row_count>0){
  echo "<script>alert('this admin name or admin gmail has been already present inside our database')</script>";
}

else if($admin_password!=$confirm_password){
   echo "<script>alert('Please Match the password)</script>";
}
else{
  move_uploaded_file( $admin_image_tmp, "../admin_area/admin_images/$admin_image");
  $insert_query="insert into `admin_table` (admin_name,admin_email,admin_password,admin_image) values ('$admin_name','$admin_email','$admin_password',
  '$admin_image')";
  $result_query=mysqli_query($con,$insert_query);

}
}
?>
</body>
</html>