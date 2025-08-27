<?php

//echo "hello";

if(isset($_GET['delete_user'])){
    $delete_id=$_GET['delete_user'];
    $select_delete="Delete from `user_table` where user_id=$delete_id";
    $result=mysqli_query($con,$select_delete);
    
    if($result){
        echo "<script>alert('user has been sucessfully removed')</script>";
        echo "<script>window.open('./index.php?list_user.php','_self')</script>";
    }
}
?>