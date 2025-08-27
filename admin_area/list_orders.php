

<h3 class="text-center text-primary">All Orders</h3>
<table class="table table-bordered mt-4">
    <thead class="text-center">
        <?php

    
    $select_order="Select * from `user_orders`";
  $result_order=mysqli_query($con,$select_order);
  $row_count=mysqli_num_rows($result_order);


?>

 <tbody class='text-center'> 
<?php
if($row_count==0){
    echo "<h2 class='text-center bg-red'>No Orders</h2>";
}
else{
  echo "
        <tr>
            <th>Sno</th>
            <th>Due Amount</th>
            <th>Invoice Number</th>
            <th>Total Product</th>
            <th>Order Date</th>
            <th>Status</th>
            <th>Delete</th>
</tr>
</thead>

<tbody class='text-center'> ";
     $number=0;
   while($row_fetch=mysqli_fetch_assoc($result_order)){
   $order_id=$row_fetch['order_id'];
   $user_id=$row_fetch['user_id'];
   $amount_due=$row_fetch['amount_due'];
   $invoice_number=$row_fetch['invoice_number'];
   $total_products=$row_fetch['total_products'];
   $order_date=$row_fetch['order_date'];
   $order_status=$row_fetch['order_status'];
$number++;
   echo "<tr>
<td>$number</td>
<td>$amount_due</td>
<td>$invoice_number</td>
<td>$total_products</td>
<td>$order_date</td>
<td>$order_status</td>
<td><a href='index.php?delete_order= $order_id ' class='text-dark'><i class= 'fa-solid fa-trash'></a></td>
</tr>";
   }
}
?>

</tbody>
</table>