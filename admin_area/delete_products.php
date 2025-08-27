<?php

if(isset($_GET['delete_product'])){
    $delete_id=$_GET['delete_product'];
   // echo $delete_id;
   $delete_product="Delete from `products` where product_id='$delete_id'";
   $result_delete=mysqli_query($con,$delete_product);
   if($result_delete){
    echo "<script>alert('Product has been sucessfully deleted')<script>";
    echo "<script>window.open('./insert_product.php','_self')</script>";
   }

}

?>