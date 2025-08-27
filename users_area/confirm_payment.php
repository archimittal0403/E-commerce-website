<?php
include('../includes/connect.php');

session_start();
if(isset($_GET['order_id'])){
    $order_id=$_GET['order_id'];
   
 $select_data="Select * from `user_orders` where order_id=$order_id";
 $result=mysqli_query($con,$select_data);
 $row_fetch=mysqli_fetch_assoc($result);
 $invoice_number=$row_fetch['invoice_number'];
 $amount=$row_fetch['amount_due'];
}

if(isset($_POST['confirm_payment'])){
    $invoice_number=$_POST['invoice_number'];
    $amount_due=$_POST['amount'];
    $payment_mode=$_POST['payment_mode'];
$insert_query="INSERT INTO `user_payments` (order_id,invoice_number,amount,payment_mode) vALUES($order_id,$invoice_number,$amount_due,'$payment_mode')";
$result=mysqli_query($con,$insert_query);
if($result){
    echo "<h3 class='text-light text-center'>succesfully payment has been completed</h3>";
    echo "<script>window.open('profile.php?order_id','_self')</script>";
}
$update_query="update `user_orders` set order_status='completed' where order_id=$order_id";
$result=mysqli_query($con,$update_query);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>confirmation</title>
    
<!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-secondary">
    <h1 class="text-light text-center my-3">Confirm Payment</h1>
    <div class="container my-3">
        <form action="" method="post">
            <div class="form-outline my-4 text-center w-50 m-auto">
                <input type="text" class="form-control w-50 m-auto" name="invoice_number" value="<?php echo $invoice_number ?>" >
            </div>
<h3 class="text-center text-light">Amount</h3>
               <div class="form-outline my-4 text-center w-50 m-auto">
                <input type="text" class="form-control w-50 m-auto" name="amount" value="<?php echo $amount ?>">
            </div>

           <div class="form-outline my-4 text-center w-50 m-auto">
            <select name="payment_mode" class="form-select w-50 m-auto">
                <option value="">Select payment mode</option>
                <option value="">UPI</option>
                <option value="">NetBanking</option>
                <option value=""> PayPal</option>
                <option value="">Cash on delivery</option>
</select>
    </div>
<div class="form-outline my-4 w-50 m-auto text-center">
    <input type="submit"  class="text-light py-2 px-3 border-0 bg-success" name="confirm_payment" value="confirm">
</div> 
</form>
</div>
    
</body>
</html>