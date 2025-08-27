<?php
if(isset($_GET['edit_account'])){
$user_name=$_SESSION['username'];
$select_query="Select * from `user_table` where username='$user_name'";
$result_query=mysqli_query($con,$select_query);
$row_fetch=mysqli_fetch_assoc($result_query);
$user_id=$row_fetch['user_id'];
$user_name=$row_fetch['username'];
$user_email=$row_fetch['user_email'];
$user_address=$row_fetch['user_address'];
$user_mobile=$row_fetch['user_mobile'];
}
if(isset($_POST['user_update'])){
    $update_id=$user_id;
    $username=$_POST['user_username'];
$user_email=$_POST['user_email'];
$user_address=$_POST['user_address'];
$user_mobile=$_POST['user_usermobile'];
$user_image=$_FILES['user_image']['name'];
$user_image_tmp=$_FILES['user_image']['tmp_name'];
move_uploaded_file($user_image_tmp,"./user_images/$user_image");

//now we have to update the data
$update_data="Update `user_table` set username='$user_name',user_email='$user_email',user_image='$user_image',user_address='$user_address',user_mobile='$user_mobile'
where $user_id=$update_id";
$result_update=mysqli_query($con,$update_data);
if($result_update){
    echo "<script>alert('data has been updates successfully')</script>";
    echo "<script>window.open('logout.php','_self')</script>";
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .edit_image{
       width:100px;
       height:100px;
       object-fit:contain;
    }
    </style>
<body>
    <h2 class="text-center mt-5 text-success"> Edit Account<h2>
        <form action="" method="post" enctype="multipart/form-data" class="text-center">
            <div class="form-outline mt-4">
                <input type="text" class="form-control w-50 m-auto" value="<?php echo $user_name?>" name="user_username"/>
</div>

<div class="form-outline mt-5">
                <input type="email" class="form-control w-50 m-auto" value="<?php echo $user_email?>" name="user_email"/>
</div>
<div class="form-outline mt-5 d-flex w-50 m-auto">
<input type="file" id="user_image"class="form-control" required="required"  name="user_image"/>
<img src="./user_images/<?php echo $user_image ?>"  class="edit_image" alt="">
</div>

<div class="form-outline mt-5">
                <input type="text" class="form-control w-50 m-auto" value="<?php echo $user_address?>" name="user_address"/>
</div>

<div class="form-outline mt-5">
                <input type="text" class="form-control w-50 m-auto" value="<?php echo $user_mobile?>" name="user_usermobile"/>
</div>
<input type="submit" value="update" class="bg-info py-0 px-1 mt-3" name="user_update"/>

</form> 
</body>
</html>