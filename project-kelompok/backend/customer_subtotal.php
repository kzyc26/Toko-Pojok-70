<?php include("header.php") ?>

<?php 
  $cmd_customer_subtotal="SELECT fullname,td.transaction_id, sum(total_harga) as `subtotal`
  from transaction t, transaction_detail td, customer c
  where c.username=t.username and td.transaction_id = t.transaction_id and t.payment_status = 0
  group by transaction_detail_id ";
  $customer_subtotal_result  = mysqli_query($con,$cmd_customer_subtotal) or die(mysqli_error($con));
  $customer_subtotal=mysqli_fetch_all($customer_subtotal_result);
  $customer_subtotal_count = mysqli_num_rows($customer_subtotal_result);
  ?>
<table class="standard">
    <tr>
        <th>Name</th>
        <th> ID transaction </th>
        <th>Subtotal</th>
    </tr>
    <?php 
                    $i=1;
                
                    if($customer_subtotal_count>0){
                        while($i<=$customer_subtotal_count){?>
    <tr>
        <td><?php echo $customer_subtotal[$i-1][0];?></td>
        <td><?php echo $customer_subtotal[$i-1][1];?></td>
        <td><?php echo $customer_subtotal[$i-1][2];?></td>
    </tr>
    <?php   $i++;}
                     
                    }
                    ?>
</table>



<?php include("footer.php") ?>