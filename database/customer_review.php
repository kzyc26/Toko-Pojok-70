<?php include("header.php") ?>

<?php 
  $cmd_customerreview="SELECT fullname, c.username, r.id_product_detail,star_rating, review
  from review r, transaction t, customer c
  where r.Id_transaction = t.transaction_id and c.username = t.username
  ";
  $customerreview_result  = mysqli_query($con,$cmd_customerreview) or die(mysqli_error($con));
  $customerreview=mysqli_fetch_all($customerreview_result);
  $customerreview_count = mysqli_num_rows($customerreview_result);

  $cmd_customer = "SELECT username, fullname FROM `customer`";
  $customer_result = mysqli_query($con,$cmd_customer) or die(mysqli_error($con));
  $customer = mysqli_fetch_all($customer_result);
  $customer_count = mysqli_num_rows($customer_result);  
  ?>
 <h2> Individual Customer Review </h2>
   <br>
<select name="customer" id="select_customer" class="form-control select" onchange="custrevchange(this.id)">
    <?php
  for ($c=0; $c < $customer_count; $c++){
    ?>
    <option value="<?php echo $customer[$c][0];?>"><?php echo $customer[$c][1];?></option>
    <?php
  }
?>
</select>

  

<table class="standard" id="display_custreview">
    <tr>
        <th>Name</th>
        <th>Username</th>
        <th> ID Product </th>
        <th>Star Rating</th>
        <th>Review</th>
    </tr>
    <?php 
                    $i=1;
                
                    if($customerreview_count>0){
                        while($i<=$customerreview_count){?>
    <tr>
        <td><?php echo $customerreview[$i-1][0];?></td>
        <td><?php echo $customerreview[$i-1][1];?></td>
        <td><?php echo $customerreview[$i-1][2];?></td>
        <td><?php echo $customerreview[$i-1][3];?></td>
        <td><?php echo $customerreview[$i-1][4];?></td>
    </tr>
    <?php   $i++;}
                     
                    }
                    ?>
</table>



<?php include("footer.php") ?>