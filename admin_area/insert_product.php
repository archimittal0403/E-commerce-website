<?php
include('../includes/connect.php');
if(isset($_POST['insert_product'])){
    $product_title=$_POST['product_title'];
    $description=$_POST['description'];
    $product_keyword=$_POST['product_keyword'];
    $product_category=$_POST['product_category'];
    $product_brand=$_POST['product_brand'];
    $product_price=$_POST['product_title'];
    $product_status='true';

    // now we will acess the image in our database
    $product_image1=$_FILES['product_image1']['name'];
    $product_image2=$_FILES['product_image2']['name'];
    $product_image3=$_FILES['product_image3']['name']; 

    //Now we will acess the tem_name
    $temp_image1=$_FILES['product_image1']['tmp_name'];
    $temp_image2=$_FILES['product_image1']['tmp_name'];
    $temp_image3=$_FILES['product_image1']['tmp_name'];

    // now check the condition for the all the variable either they are empty or not
if($product_title=='' or $description=='' or $product_keyword=='' or $product_category=='' or $product_brand=='' or $product_price=='' or
$product_image1=='' or $product_image2=='' or $product_image3=='' ){
echo "<script>alert('please fill the attribute correctly')</script>";
exit();
}
else{
    //now if the all details are fullfilled then at that time we have to put our images in our folder.
    move_uploaded_file($temp_image1,"./product_images/$product_image1");
    move_uploaded_file($temp_image2,"./product_images/$product_image2");
    move_uploaded_file($temp_image3,"./product_images/$product_image3");


   // now insert the  query to instert the data in the our database 
   $insert_products="insert into `products`(product_title,product_description,product_keyword,category_id,brand_id,product_image1,product_image2,
   product_image3,product_price,date,status) values('$product_title', '$description',' $product_keyword','$product_category','$product_brand',
   '$product_image1','$product_image2','$product_image3','$product_price',NOW(),'$product_status')";
   $result_query=mysqli_query($con,$insert_products);
   if($result_query){
    echo "<script>alert('inserion of product are done successfully')</script>";
   }
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert product-admin dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<!-- fontawesome link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- css link file -->
  <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">
<div class="container">
    <h1 class="text-center my-3">Insert Product</h1>
    <!-- form -->
     <form action="" method="post" enctype="multipart/form-data">
        <div class="form-outline mb-4 w-50 m-auto">
            <lable for="product_title" class="form-label">product title</lable>
            <input type="text" name="product_title"
            id="product_title" class="form-control"
            placeholder="Enter product title" autocomplete="off"
            required="required">
</div>
<!-- descriptive product -->
<div class="form-outline mb-4 w-50 m-auto">
            <lable for="description" class="form-label">description</lable>
            <input type="text" name="description"
            id="description" class="form-control"
            placeholder="Enter description" autocomplete="off"
            required="required">
</div>
<!-- keyword product -->
<div class="form-outline mb-4 w-50 m-auto">
            <lable for="product_keyword" class="form-label">keyword</lable>
            <input type="text" name="product_keyword"
            id="product_keyword" class="form-control"
            placeholder="Enter keyword " autocomplete="off"
            required="required">
</div>
<!-- category select -->
<div class="form-outline mb-4 w-50 m-auto">
    <select name="product_category" id="" class="form-select">
        <option value="">Select category</option>
        <?php
        $select_query="Select * from `categories`";
        $result_query=mysqli_query($con,$select_query);
        while($row=mysqli_fetch_assoc($result_query)){
            $category_title=$row['category_title'];
            $category_id=$row['category_id'];
             echo "<option value='$category_id'>$category_title</option>";
        }
        ?>
        
</select>
</div>
<!-- brands select -->
<div class="form-outline mb-4 w-50 m-auto">
    <select name="product_brand" id="" class="form-select">
        <option value="">Select brand</option>
        <?php
        $select_query="Select * from `brands`";
        $result_query=mysqli_query($con,$select_query);
        while($row=mysqli_fetch_assoc($result_query)){
            $brand_title=$row['brand_title'];
            $brand_id=$row['brand_id'];
             echo "<option value='$brand_id'>$brand_title</option>";
        }
        
        ?>
       
</select>
</div>
<!-- insert  image1 -->
<div class="form-outline mb-4 w-50 m-auto">
<lable for="product_keyword" class="form-label">product image1</lable>
<input type="file" name="product_image1"
            id="product_image1" class="form-control"
            placeholder="Enter keyword " autocomplete="off"
            required="required">
</div>
<!-- insert image2 -->
<div class="form-outline mb-4 w-50 m-auto">
<lable for="product_keyword" class="form-label">product image2</lable>
<input type="file" name="product_image2"
            id="product_image2" class="form-control"
            placeholder="Enter keyword " autocomplete="off"
            required="required">
</div>
            <!-- insert image3 -->
            <div class="form-outline mb-4 w-50 m-auto">
<lable for="product_keyword" class="form-label">product image3</lable>
<input type="file" name="product_image3"
            id="product_image3" class="form-control"
            placeholder="Enter keyword " autocomplete="off"
            required="required">
</div>
<!-- price -->
<div class="form-outline mb-4 w-50 m-auto">
            <lable for="price_keyword" class="form-label">price</lable>
            <input type="text" name="price_keyword"
            id="price_keyword" class="form-control"
            placeholder="Enter keyword " autocomplete="off"
            required="required">
</div>
<div class="form-outline mb-4 w-50 m-auto">
    <input type="submit" name="insert_product" class="btn
    btn-info mb-3 px-3" value="Insert product">
</div>
 </form>
</div>
</body>
</html>