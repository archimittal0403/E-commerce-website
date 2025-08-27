<?php

//echo "hello";

if(isset($_GET['delete_payment'])){
    $delete_id=$_GET['delete_payment'];
    $select_delete="Delete from `user_payments` where payment_id=$delete_id";
    $result=mysqli_query($con,$select_delete);
    
    if($result){
        echo "<script>alert('your payment has been sucessfully removed')</script>";
        echo "<script>window.open('./index.php?all_payment.php','_self')</script>";
    }
}
?>