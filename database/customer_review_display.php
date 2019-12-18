<?php 
session_start();
require_once('db.php');
$username = $_GET['username'];

  $cmd_customerreview="SELECT fullname, c.username, r.id_product_detail,star_rating, review
  from review r, transaction t, customer c
  where r.Id_transaction = t.transaction_id and c.username = t.username and c.username = '$username';
  ";
  $customerreview_result  = mysqli_query($con,$cmd_customerreview) or die(mysqli_error($con));
  $customerreview=mysqli_fetch_all($customerreview_result);
  $customerreview_count = mysqli_num_rows($customerreview_result);
  $i=1;
                
  if($customerreview_count>0){
  ?>
<tr>
    <th>Name</th>
    <th>Username</th>
    <th> ID Product </th>
    <th>Star Rating</th>
    <th>Review</th>
</tr>
<?php                    
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
    else{
        echo "Sorry, this customer haven't made any review yet.";
        }
                    ?>