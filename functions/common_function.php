<?php

//include('./includes/connect.php');

// now write function to acees the product item from database
function getproducts(){
    global $con;
    // now check the condition for the appering the produvts on the home page
if(!isset($_GET['category'])){
  if(!isset($_GET['brand'])){
 $select_query="Select * from `products` order by rand() LIMIT 0,6";
 $result_query=mysqli_query($con,$select_query);
 while($row=mysqli_fetch_assoc($result_query)){
   $product_id=$row['product_id'];
   $product_title=$row['product_title'];
   $product_description=$row['product_description'];
   $product_image1=$row['product_image1'];
   $product_price=$row['product_price'];
   $category_id=$row['category_id'];
   $brand_id=$row['brand_id'];
   echo  "<div class='col-md-4 mb-2'>
 <div class='card'>
<img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
<div class='card-body'>
 <h5 class='card-title'> $product_title</h5>
 <p class='card-text'>  $product_description</p>
 <p class='card-text'> price:-$product_price</p>
 <a href='index.php?add_to_cart= $product_id' class='btn btn-success'>Add to cart</a>
 <a href='product_detail.php?product_id= $product_id' class='btn btn-info'>View more</a>
</div>
</div>
 </div>";
 }
}
}
}

function get_all_products(){
  global $con;
  // now check the condition for the appering the produvts on the home page
if(!isset($_GET['category'])){
if(!isset($_GET['brand'])){
$select_query="Select * from `products` order by rand() LIMIT 0,9";
$result_query=mysqli_query($con,$select_query);
while($row=mysqli_fetch_assoc($result_query)){
 $product_id=$row['product_id'];
 $product_title=$row['product_title'];
 $product_description=$row['product_description'];
 $product_image1=$row['product_image1'];
 $product_price=$row['product_price'];
 $category_id=$row['category_id'];
 $brand_id=$row['brand_id'];
 echo  "<div class='col-md-4 mb-2'>
<div class='card'>
<img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
<div class='card-body'>
<h5 class='card-title'> $product_title</h5>
<p class='card-text'>  $product_description</p>
 <p class='card-text'>price:-$product_price</p>
<a href='index.php?add_to_cart= $product_id' class='btn btn-success'>Add to cart</a>
 <a href='product_detail.php?product_id= $product_id' class='btn btn-info'>View more</a>
</div>
</div>
</div>";
}
}
}
}


// now we will get our category
function get_unique_categories(){
  global $con;
  // now check the condition for the appering the produvts on the home page
if(isset($_GET['category'])){

  $category_id=$_GET['category'];
$select_query="Select * from `products` where category_id=$category_id";
$result_query=mysqli_query($con,$select_query);
$num_of_rows=mysqli_num_rows($result_query);
if($num_of_rows==0){
  echo "<h2 class='text-center text-danger'>No stock is available</h2>";
}
while($row=mysqli_fetch_assoc($result_query)){
 $product_id=$row['product_id'];
 $product_title=$row['product_title'];
 $product_description=$row['product_description'];
 $product_image1=$row['product_image1'];
 $product_price=$row['product_price']; 
 $category_id=$row['category_id'];
  $brand_id=$row['brand_id'];
  echo  "<div class='col-md-4 mb-2'>
   <div class='card'>
 <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
 <div class='card-body'>
 <h5 class='card-title'> $product_title</h5>
 <p class='card-text'>  $product_description</p>
  <p class='card-text'> price:-$product_price</p>
 <a href='index.php?add_to_cart= $product_id' class='btn btn-success'>Add to cart</a>
  <a href='product_detail.php?product_id= $product_id' class='btn btn-info'>View more</a>
 </div>
 </div>
 </div>";
 }
}
}


 // now we will get our brands

function get_unique_brands(){
  global $con;
  // now check the condition for the appering the produvts on the home page
if(isset($_GET['brand'])){

  $brand_id=$_GET['brand'];
$select_query="Select * from `products` where brand_id=$brand_id";
$result_query=mysqli_query($con,$select_query);
$num_of_rows=mysqli_num_rows($result_query);
if($num_of_rows==0){
  echo "<h2 class='text-center text-danger'>No stock is available for this brand</h2>";
}
while($row=mysqli_fetch_assoc($result_query)){
 $product_id=$row['product_id'];
 $product_title=$row['product_title'];
 $product_description=$row['product_description'];
 $product_image1=$row['product_image1'];
 $product_price=$row['product_price']; 
 $category_id=$row['category_id'];
  $brand_id=$row['brand_id'];
  echo  "<div class='col-md-4 mb-2'>
   <div class='card'>
 <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
 <div class='card-body'>
 <h5 class='card-title'> $product_title</h5>
 <p class='card-text'>  $product_description</p>
  <p class='card-text'> price:-$product_price</p>
 <a href='index.php?add_to_cart= $product_id' class='btn btn-success'>Add to cart</a>
  <a href='product_detail.php?product_id= $product_id' class='btn btn-info'>View more</a>
 </div>
 </div>
 </div>";
 }
}
}

// include brands
function get_brands(){
    global $con;
    $select_brands="Select * from `brands`";
$result_brands=mysqli_query($con,$select_brands);
while($row_data=mysqli_fetch_assoc($result_brands))
{
  $brand_title= $row_data['brand_title'];
  $brand_id= $row_data['brand_id'];
  echo "<li class='nav-item'>
  <a href='index.php?brand=$brand_id' class='nav-link text-light text-center'>$brand_title</a>
</li>";
}
}
//include categories
function get_categories(){
    global $con;
    $select_categories="Select * from `categories`";
$result_categories=mysqli_query($con,$select_categories);
while($row_data=mysqli_fetch_assoc($result_categories))
{
  $category_title= $row_data['category_title'];
  $category_id= $row_data['category_id'];
  echo "<li class='nav-item'>
  <a href='index.php?category=$category_id' class='nav-link text-light text-center'>$category_title</a>
</li>";
}
}


// now we will fetch the data from the database with the help of our keyword where it will use two get method that is search_data_product where it will onli
//provide the result when ever the search button is clicked and another one is the search data where it searc our keyword inside our database

function search_product(){
  global $con;
  // now we
if(isset($_GET['search_data_product'])){
$search_data_value=$_GET['search_data'];
$search_query="Select * from `products` where product_keyword like
'%$search_data_value%'";
$result_query=mysqli_query($con,$search_query);
$num_of_rows=mysqli_num_rows($result_query);
if($num_of_rows==0){
  echo "<h2 class='text-center text-danger'>No Match is found with your search keyword.</h2>";
}
while($row=mysqli_fetch_assoc($result_query)){
 $product_id=$row['product_id'];
 $product_title=$row['product_title'];
 $product_description=$row['product_description'];
 $product_image1=$row['product_image1'];
 $product_price=$row['product_price'];
 $category_id=$row['category_id'];
 $brand_id=$row['brand_id'];
 echo  "<div class='col-md-4 mb-2'>
<div class='card'>
<img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
<div class='card-body'>
<h5 class='card-title'> $product_title</h5>
<p class='card-text'>  $product_description</p>
 <p class='card-text'> price:-$product_price</p>
<a href='index.php?add_to_cart= $product_id' class='btn btn-success'>Add to cart</a>
 <a href='product_detail.php?product_id= $product_id' class='btn btn-info'>View more</a>
</div>
</div>
</div>";
}
}
}


// view products
function view_details(){
  global $con;
  // now check the condition for the appering the produvts on the home page
  if(isset($_GET['product_id'])){
if(!isset($_GET['category'])){
if(!isset($_GET['brand'])){
  $product_id=$_GET['product_id'];
$select_query="Select * from `products` where product_id=$product_id";
$result_query=mysqli_query($con,$select_query);
while($row=mysqli_fetch_assoc($result_query)){
 $product_id=$row['product_id'];
 $product_title=$row['product_title'];
 $product_description=$row['product_description'];
 $product_image1=$row['product_image1'];
 $product_image2=$row['product_image2'];
 $product_image3=$row['product_image3'];
 $product_price=$row['product_price'];
 $category_id=$row['category_id'];
 $brand_id=$row['brand_id'];
 echo  "<div class='col-md-4 mb-2'>
<div class='card'>
<img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
<div class='card-body'>
<h5 class='card-title'> $product_title</h5>
<p class='card-text'>  $product_description</p>
 <p class='card-text'> price:-$product_price</p>
<a href='index.php?add_to_cart= $product_id' class='btn btn-success'>Add to cart</a>
<a href='index.php' class='btn btn-info'>Go back</a>
</div>
</div>
</div>
<div class='col-md-8'>
    <div class='row'>
        <div class='col-md-12'>
            <h4 class='text-center text-danger mb-5'>Related Products</h4>
            
</div>
<div class='col-md-6'>
 <img src='./image/$product_image2' class='card-img-top'  alt='$product_title'>
</div>
<div class='col-md-6'>
<img src='./image/$product_image3' class='card-img-top' alt='$product_title'>
</div>
</div>
</div>";
}
}
}
}
}

// Now write the ip address function
//Now what is actually IP Address is
// A s IP Adress is on of the thinf in which we come to know that for a single iteam their are different user has being order or
//in simple words we can say that it help us to differentiate different user (as different pc have different ip address) over network.
//two way
//.One way is to use the $_SERVER variable and another way is by using the getenv() function.
//Bypassing REMOTE_ADDR in the $_SERVER variable gives the IP address of the client. Sometimes we won’t get an IP address using REMOTE_ADDR because when the user is from the proxy network, REMOTE_ADDR cannot be fetched.
function getIPAddress(){
  	// if user from the share internet 
	if(!empty($_SERVER['HTTP_CLIENT_IP'])) { 
		$ip = $_SERVER['HTTP_CLIENT_IP']; 
	} 
	//if user is from the proxy 
	elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { 
	 $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; 
	} 
	//if user is from the remote address 
	else{ 
		$ip= $_SERVER['REMOTE_ADDR']; 
	}	 
  return $ip;
}

// cart-function
function cart(){
if(isset($_GET['add_to_cart'])){
  global $con;
  $ip= getIPAddress();
  $get_product_id=$_GET['add_to_cart'];
  $select_query="Select * from `cart_details` where ip_address='$ip' and product_id=$get_product_id";
  $result_query=mysqli_query($con,$select_query);
  $num_of_rows=mysqli_num_rows($result_query);
  if($num_of_rows>0){
    echo "<script>alert('Item is already added to the cart')</script>";
    echo "<script>window.open('index.php','_self')</script>";
  }
  else{
  $insert_query="insert into `cart_details` (product_id,ip_address,quantity)
  value($get_product_id,'$ip',0)";
  $result_query=mysqli_query($con,$insert_query);
  echo "<script>alert('Item is successfully added to cart')</script>";
  echo "<script>window.open('index.php','_self')</script>";
  }

}
}

//Now we will increse our cart value /quantity as soon as we will add our item to cart
function cart_item(){
  if(isset($_GET['add_to_cart'])){
    global $con;
    $ip= getIPAddress();
    $select_query="Select * from `cart_details` where ip_address='$ip'";
    $result_query=mysqli_query($con,$select_query);
    $count_items=mysqli_num_rows($result_query);
  }
    else{
      global $con;
      $ip= getIPAddress();
      $select_query="Select * from `cart_details` where ip_address='$ip'";
      $result_query=mysqli_query($con,$select_query);
      $count_items=mysqli_num_rows($result_query);
    }
  echo $count_items;
  }
  
//total price function

function total_cart_price(){
global $con;
$ip= getIPAddress();
$total_price=0;
$cart_query="Select * from `cart_details` where ip_address='$ip'";
$result=mysqli_query($con,$cart_query);
while($row=mysqli_fetch_array($result)){
  $product_id=$row['product_id'];
  $select_products="Select * from `products` where product_id='$product_id'";
  $result_product=mysqli_query($con,$select_products);
  while($row_product_price=mysqli_fetch_array($result_product)){
    $product_price=array($row_product_price['product_price']);
    $product_value=array_sum($product_price);
    $total_price+=$product_value;
  }
}
echo $total_price;
}

// function for the user order details

function get_user_order_details(){
  global $con;
  $username=$_SESSION['username'];
  $get_details="Select * from `user_table` where username='$username'";
  $result_query=mysqli_query($con,$get_details);
  while($row_query=mysqli_fetch_array($result_query)){
    $user_id=$row_query['user_id'];
    if(!isset($_GET['edit_account'])){
      if(!isset($_GET['my_orders'])){
        if(!isset($_GET['delete_account'])){
$get_orders="Select * from `user_orders` where user_id='$user_id' and order_status='pending'";
$get_order_result=mysqli_query($con,$get_orders);
$row_count=mysqli_num_rows($get_order_result);
if($row_count>0){
  echo "<h3 class='text-center mt-5 mb-3 text-success'> you have <span class='text-danger'>$row_count</span> pending orders</h3>
  <h5 class='text-center'><a href='profile.php?my_orders' class='text-secondary'>order details</a></h5>"; 
}
else{
  echo "<h3 class='text-center mt-5 mb-3 text-success'> you have zero pending orders</h3>
  <h5 class='text-center'><a href='../index.php' class='text-secondary'>Explore products</a></h5>"; 
}

        }
      }
    }
  }

}
?>


