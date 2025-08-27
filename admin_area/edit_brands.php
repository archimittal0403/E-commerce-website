<?php
if(isset($_GET['edit_brands'])){
    $edit_brand_id=$_GET['edit_brands'];
   // echo $edit_category_id;
   $select_brand="Select * from `brands` where brand_id=$edit_brand_id";
   $result_brands=mysqli_query($con,$select_brand);
   $row=mysqli_fetch_assoc($result_brands);
$brand_title=$row['brand_title'];
   //echo $category_title;
}

if(isset($_POST['edit_brand'])){
    $brand_title=$_POST['brand_title'];
   // $edit_category_id=$_GET['edit_categories'];
    $update_brand="update `brands` set brand_title='$brand_title' where brand_id=$edit_brand_id";
    $result_update=mysqli_query($con,$update_brand);
    if($result_update){
        echo "<script>alert('Your brand has been succesfully updated')</script>";
        echo "<script>window.open('./index.php?view_categories.php','_self')</script>";
    }
}
    ?>

<div class="container mt-5">
    <h2 class="text-center text-primary">Edit Brand</h2>
    <form action="" method="post" class="text-center">
        <label for="brand_title" class="text-secondary">Brand Title</label>
        <input type="text" name="brand_title" id="brand_title" value= " <?php echo $brand_title; ?>" class="form-control w-50 m-auto mb-6" >

        <input type="submit" value="update brand" name="edit_brand" class="btn btn-success px-3 mt-3">
</form>
</div>

