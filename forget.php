


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
    <h2 class="text-center mb-4 mt-5">Forget Password</h2>
    <div class=" row d-flex justify-content-center align-item-center">
        <div class="col-lg-6">
            <img src="../image/forget password.jpg" alt="adin registration" class="img-fluid">
</div>

<div class="col-lg-6">
    <form action="send_password.php" method="post">
        <div class="form-outline mb-4 mt-5">
<label for="admin_email" class="form-label">Email Id :-</label>
<input type="email" id="admin_email" name="admin_email" placeholder="Enter the your Registered Email" required="required"   autocomplete="off" class="form-control w-50 ">
</div>

<div class="form-outline mb-4">
<input type="submit" class="bg-info  py-2 px-3 border-0" name="admin_forget_password" value="Reset">
</div>
</div>
</form>

</div>

