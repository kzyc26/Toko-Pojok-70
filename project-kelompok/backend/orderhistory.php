<?php include("header.php") ?>

<?php  
 $cmd_orderhistory="SELECT fullname,t.date, total_transaction
from customer c, transaction t
where t.username=c.username";
  $orderhistory_result  = mysqli_query($con,$cmd_orderhistory) or die(mysqli_error($con));
  $orderhistory=mysqli_fetch_all($orderhistory_result);
  $orderhistory_count = mysqli_num_rows($orderhistory_result);
   ?>

<table class="orderhistory">
    <tr>
        <th> Name </th>
        <th> Date </th>
        <th> Total </th>
    </tr>
    <?php
                    $i=1;
                    if($orderhistory_count>0){
                    while($i<=$orderhistory_count){?>
    <tr>
        <td><?php echo $orderhistory[$i-1][0];?></td>
        <td><?php echo $orderhistory[$i-1][1];?></td>
        <td>
            Rp.
            <?php  
            $price = $orderhistory[$i-1][2];
            echo number_format($price,2,",","."); 
            ?>
        </td>
    </tr>
    <?php 
                    $i++;
                    }
                    };
                
                     ?>
</table>
<?php include("footer.php") ?>
