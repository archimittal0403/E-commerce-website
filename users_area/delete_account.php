<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deleted page</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>Delete your Account</h1>
    <form action="" method="post">
        <div class="form-outline mt-5">
            <input type="submit" name="delete_account" value="Delete Account" class="form-control bg-danger text-light w-50 m-auto">
</div>

        <div class="form-outline mt-5">
            <input type="submit" name="notdelete_account" value=" Do not Delete Account" class="form-control bg-danger text-light w-50 m-auto">
</div>
</form>
<?php 
$username_session=$_SESSION['username'];
if(isset($_POST['delete_account'])){
    $delete_query="Delete from `user_table` where username='$username_session'";
    $result_query=mysqli_query($con,$delete_query);
    if($result_query){
        session_destroy();
        echo "<script>alert('account has been deleted')</script>";
        echo "<script>window.open('../index.php','_self')</script>";
    }
}

if(isset($_POST['notdelete_account'])){
      echo "<script>window.open('profile.php','_self')</script>";
}
?>
</body>
</html>