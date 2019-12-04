<?php
session_start();
require_once('db.php');
if(isset($g['cat'])){
    $cat_id=$g['cat'];
}
?> <script> alert(<?php echo  $cat_id ?>);</script><?php
$Cmd_items_category ="SELECT id_product,product_name,price,category_name
from product p,category c
where p.Id_category = c.id_category and p.id_category = '".$cat_id."'" ;
$items_category_result  = mysqli_query($con,$Cmd_items_category) or die(mysqli_error($con));
$items_category=mysqli_fetch_all($items_category_result);
$items_category_count = mysqli_num_rows($items_category_result);
?>
                    <tr>
                        <th> Picture </th>
                        <th> Product Name</th>
                        <th> Product ID </th>
                        <th> Price </th>
                    </tr>
                    <?php 
                    $i=1;
                
                    if($items_category_count>0){
                        while($i<$items_category_count){?>
                    <tr>
                        <td><img src="../assets/images/products/<?php echo $items_category[$i-1][0];?>.jpg"></td>
                        <td><?php echo $items_category[$i-1][1];?></td>
                        <td><?php echo $items_category[$i-1][0];?></td>
                        <td><?php echo $items_category[$i-1][3] ;echo $items_category[$i-1][2];?></td>
                    </tr>
                    <?php   $i++;}
                     
                    }
                    ?>