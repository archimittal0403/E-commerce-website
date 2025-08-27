<!-- connect teh con variable -->
<?php
include('../includes/connect.php');
include('../functions/common_function.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> welcome</title>
<!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- fontawesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- css link file -->
<link rel="stylesheet" href="style.css">
  </head>
  <style>
    .photo{
        width:4%;
    }
    .profile_img{
      width:90%;
      margin:auto;
      display:block;
    object-fit:contain;
    }
    body{

      overflow-x:hidden;
    }
    </style>
<body>
  
   <!-- Navbar -->
    <div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <img class="photo" src="../image/photo.webp" alt="photo">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item p-2">
          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
        </li>
        <li class="nav-item p-2">
          <a class="nav-link" href="../display_all.php">Products</a>
        </li>
        <li class="nav-item p-2">
          <a class="nav-link" href="profile.php">My Account</a>
        </li>
        <li class="nav-item p-2">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item p-2">
          <a class="nav-link" href="../cart.php"><i class="fa-solid fa-cart-shopping"></i><sup><?php 
          cart_item(); ?></sup></a>
        </li>
        <li class="nav-item p-2">
          <a class="nav-link" href="#">Total price: <?php
           total_cart_price();?>/-</a>
        </li>
</ul>
<form class="d-flex" action="../search_product.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"  name="search_data" >
         <input type="Submit" value="Search" class="btn btn-outline-dark"  name="search_data_product">
      </form>
    </div>
  </div>
</nav>

<!-- calling the add to cart function -->
<?php
cart();
?>
<!-- 
second child -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
<ul class="navbar-nav me-auto">
<?php
//Now in this we will display this login page only when the if the user data has not been found in our database or session is not active .
if(!isset($_SESSION['username'])){
  echo "<li class='nav-item'>
  <a class='nav-link' href='#'>Welcome Guest</a>
  </li>";
}
else{
  // as in this we do the concatination of two different sessions.
 echo "<li class='nav-item'>
  <a class='nav-link' href='#'>Welcome ".$_SESSION['username']."</a>
</li>";
}



// <!-- login and logout sessions -->

//Now in this we will display this login page only when the if the user data has not been found in our database or session is not active .
if(!isset($_SESSION['username'])){
  echo "<li class='nav-item'>
  <a class='nav-link' href='./users_area/user_login.php'>Login</a>
</li>";
}
else{
 echo "<li class='nav-item'>
  <a class='nav-link' href='logout.php'>Log out</a>
</li>";
}
?>
</ul>
</nav>



<!-- third class -->
<div class="bg-light">
<h3 class="text-center">Shop Fusion</h3>
<p class="text-center">Let explore the new things with the new world</p>
</div>

<!-- fourth child -->

<div class="row">
  <div class="col-md-2">
    <ul class="navbar-nav bg-secondary text-center" style="height:90vh">
    <li class="nav-item bg-info">
          <a class="nav-link text-success" href="#"><h4>Your Profile</h4></a>
        </li>

        <?php
$username= $_SESSION['username'];
$user_image="Select * from `user_table` where username='$username'";
$user_image=mysqli_query($con,$user_image);
$row_image=mysqli_fetch_array($user_image);
$user_image=$row_image['user_image'];
    echo  "<li class='nav-item'>
         <img src='./user_images/$user_image' class='profile_img my-4' alt='home decor'>
        </li>";
        ?>
        <li class="nav-item my-2">
          <a class="nav-link text-light" href="profile.php">Pending orders</a>
        </li>
        <li class="nav-item my-2">
          <a class="nav-link text-light" href="profile.php?edit_account">Edit account</a>
        </li>
        <li class="nav-item my-2">
          <a class="nav-link text-light" href="profile.php?my_orders">My orders</a>
        </li>
        <li class="nav-item my-2">
          <a class="nav-link text-light" href="profile.php?delete_account">Delete Account</a>
        </li>
        <li class="nav-item my-2">
          <a class="nav-link text-light" href="logout.php">Logout</a>
        </li>
</ul>
</div>
    <div class="col-md-10 text-center">
<?php
 get_user_order_details();
 if(isset($_GET['edit_account'])){
  include('edit_account.php');
 }
 if(isset($_GET['my_orders'])){
  include('user_orders.php');
 }
 if(isset($_GET['delete_account'])){
  include('delete_account.php');
 }
?>
</div>
</div>

 <!-- last child -->
 <?php
 include("../includes/footer.php");
 ?> 

<!-- bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
