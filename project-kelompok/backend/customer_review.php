<?php include("header.php") ?>

<?php 
  $cmd_customerreview="SELECT fullname, r.id_product_detail,star_rating, review
  from review r, transaction t, customer c
  where r.Id_transaction = t.transaction_id and c.username = t.username
  ";
  $customerreview_result  = mysqli_query($con,$cmd_customerreview) or die(mysqli_error($con));
  $customerreview=mysqli_fetch_all($customerreview_result);
  $customerreview_count = mysqli_num_rows($customerreview_result);
  ?>
<table class="customerreview">
    <tr>
        <th>Name</th>
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
    </tr>
    <?php   $i++;}
                     
                    }
                    ?>
</table>



<?php include("footer.php") ?>