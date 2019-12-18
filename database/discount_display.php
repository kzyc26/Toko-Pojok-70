<?php
    session_start();
    require_once('db.php');
    $ket = $_GET['terpilih'];

    if($ket == 'discount'){
    $cmd_discount="SELECT Product_name, id_product, if(discount is null, 'Normal Price', concat(discount, '%'))
   from product where discount is not null";
    } elseif ($ket == 'normal') {
        $cmd_discount="SELECT Product_name, id_product, if(discount is null, 'Normal Price', concat(discount, '%'))
        from product where discount is null";
    }else{
        $cmd_discount="SELECT Product_name, id_product, if(discount is null, 'Normal Price', concat(discount, '%'))
        from product";
    }

   $discount_result  = mysqli_query($con,$cmd_discount) or die(mysqli_error($con));
   $discount=mysqli_fetch_all($discount_result);
   $discount_count = mysqli_num_rows($discount_result);    
?>
<tr>
        <th>Product Name</th>
        <th>Product ID</th>
        <th>Discount</th>
    </tr>
    <?php 
    $i=1;
    if ($discount_count>0){
        while($i <= $discount_count){ ?>
    <tr>
        <td> <?php echo $discount[$i-1][0];?></td>
        <td> <?php echo $discount[$i-1][1];?></td>
        <td> <?php echo $discount[$i-1][2];?></td>
    </tr>
    <?php $i++; }
     }; ?>