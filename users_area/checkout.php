<!-- connect teh con variable -->
<?php
include('../includes/connect.php');
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce website by using php and mysql</title>
<!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- fontawesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- css link file -->
<link rel="stylesheet" href="style.css">
<style>
  .photo{
    width:4%;
  }
  </style>
  </head>

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
          <a class="nav-link" href="../users_area/user_registration.php">Register</a>
        </li>
        <li class="nav-item p-2">
          <a class="nav-link" href="#">Contact</a>
        </li>
       
        
</ul>
<form class="d-flex" action="search_product.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"  name="search_data" >
         <input type="Submit" value="Search" class="btn btn-outline-dark"  name="search_data_product">
      </form>
    </div>
  </div>
</nav>

<!-- calling the add to cart function -->

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

//Now in this we will display this login page only when the if the user data has not been found in our database or session is not active .
if(!isset($_SESSION['username'])){
  echo "<li class='nav-item'>
  <a class='nav-link' href='./user_login.php'>Login</a>
</li>";
}
else{
 echo "<li class='nav-item'>
  <a class='nav-link' href='logout.php'>Log out</a>
</li>";
}
?>

</nav>

<!-- third class -->
<div class="bg-light">
<h3 class="text-center">Shop Fusion</h3>
<p class="text-center">Let explore the new things with the new world</p>
</div>

<!-- fourth product -->
 
<div class="row px-1">
  <div class="col-md-12">
    <!-- product -->
   <div class="row">
    <?php
    //SESSIONS
    // now we will check thid we will check yhr condition by using the session whwre it will set wheather the user has the account or not 
    // in this we will get our data dorectly from the serverand in this user does not have to login again and again after going to the website              `
    if(!isset($_SESSION['username']))
    {
        include('user_login.php');
    }
    else{
        include('payment.php');
    }
    ?>
</div>
</div>
</div>
<!-- last child -->
<?php
 include("../includes/footer.php");
 ?> 

<!-- bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html