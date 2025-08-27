<h4 class="text-center text-primary">List User </h4>


<div class="container">
<table class="table table-bordered">
    <thead class="text-center">
        <?php
        $select_user="Select * from `user_table`";
        $result=mysqli_query($con,$select_user);
        $row=mysqli_num_rows($result);

//         echo "
//         <tr>
//             <th>Sno</th>
//               <th>Invoice Number</th>
//                 <th>Amount</th>
//                   <th>Payment_Mode</th>
//                     <th>Date</th>
//                     <th>Delete</th>

// </tr>
// </thead>

// <tbody class='text-center'> ";
if($row==0){
    echo "<h2 class=' text-center bg-danger mt-5 px-4'>No users</h2>";
}
else{
     echo "
        <tr>
            <th>Sno</th>
              <th>User Name</th>
                <th>User Email</th>
                  <th>User Image</th>
                    <th>User Address</th>
                     <th>User Mobile</th>
                    <th>Delete</th>

</tr>
</thead>

<tbody class='text-center'> ";
    while($row_fetch=mysqli_fetch_assoc($result)){
$number=0;
      $user_id=$row_fetch['user_id'];
      $user_name=$row_fetch['username'];
      $user_email=$row_fetch['user_email'];
      $user_image=$row_fetch['user_image'];
      $user_address=$row_fetch['user_address'];
      $user_mobile=$row_fetch['user_mobile'];
$number++;
      echo"
          <tr>
            <td>$number</td>
              <td>$user_name</td>
                <td>$user_email</td>
                  <td><img src='../users_area/user_images/$user_image' alt='$user_name' class='product-image'></td>
                    <td>$user_address</td>
                     <td>$user_mobile</td>
                  <td><a href='./index.php?delete_user' class='text-center text-primary'> <i class='fa-solid fa-trash'></i></a></td>
                  
                  
</tr> ";
    }
}
?>

</tbody>
</table>
</div>