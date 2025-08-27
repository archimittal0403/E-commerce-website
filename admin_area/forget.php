
<?php
// session_start();
// include('../includes/connect.php');
//   include('email.php');
// $select_query="Select * from `admin_table` where admin_id=1";
//  $result=mysqli_query($con,$select_query);
// $row_fetch=mysqli_fetch_assoc($result);
//    $admin_password=$row_fetch['admin_password'];

// if(isset($_GET['admin_email'])){
//    $admin_email=$_GET['admin_email'];
 //$admin_password=$_GET['admin_password'];
 //$admin_id=$_GET['admin_id'];
 //$select_query="Select * from `admin_table` where admin_id='$admin_id'";
       //$result=mysqli_query($con,$select_query);
       //if($row_count=mysqli_num_rows($result)>0){
              //$result=mysqli_query($con,$select_query);
              // $admin_password=$row_data['admin_password'];
                 //$_SESSION['admin_email']=$admin_email;
                //  send_otp($admin_email,"PHP OTP LOGIN",$admin_password);  
    // $admin_password=$_POST['admin_password'];
    //  $admin_id=$_POST['admin_id'];
    //    $select_query="Select * from `admin_table` where admin_id='$admin_id'";
    //     $result=mysqli_query($con,$select_query);
    //      $row_data=mysqli_fetch_assoc($result);
    //      $admin_password=$row_data['admin_password'];
    // $admin_email=$_POST['admin_email'];


    //  $to=$admin_email;
    //  $from="archi22154121@akgec.ac.in";
    //  $fromName="archi";
    //  $subject="test";
    //  $message="your password is".$admin_password;
    //  $header='From:'.$fromName.'<'.$from.'>';
    //  if($mail($to,$subject,$message,$header)){
    //     echo "successfully";
    //  }
    //    }

    
 
//}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
    <!-- bootstrap css link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
  
    <!-- fontawesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../style.css">
</head>
<body>
    
<div class="container-fluid m-3">
    <h2 class="text-center mb-4 mt-5">Forget Password</h2>
    <div class=" row d-flex justify-content-center align-item-center">
        <div class="col-lg-6">
            <img src="../image/forget password.jpg" alt="adin registration" class="img-fluid">
</div>

<div class="col-lg-6">
  <div class="alert alert-primary w-50 " role="alert">
 
    <?php
    if(isset($_REQUEST['msg'])){
      echo $_REQUEST['msg'];
     }
?>

    <form action="send_password.php" method="GET">
      
        <div class="form-outline mb-4 mt-5">
<label for="admin_email" class="form-label">Email ID :-</label>
<input type="admin_email" id="admin_email" name="admin_email" placeholder="Enter your registered email" required="required"   autocomplete="off" class="form-control w-50 ">
</div>

<div class="form-outline mb-4">
<input type="submit" class="bg-success  py-2 px-3 border-0 text-light" name="get_password" value="Get Password">


   


 


</form>

</div>
</div>
</div>
</body>
</html>

 
