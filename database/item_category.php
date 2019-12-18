<?php
session_start();
require_once('db.php');
$g=$_GET;
if(isset($g['cat'])){
    $cat_id=$g['cat'];
}
?> <script> alert(<?php echo  $cat_id ?>);</script><?php
$Cmd_items_category ="SELECT id_product,product_name,price,category_name
from product p,category c
where p.Id_category = c.id_category and p.id_category = '".$cat_id."'" ;
$items_category_result  = mysqli_query($con,$Cmd_items_category) or die(mysqli_error($con));
$items_category=mysqli_fetch_all($items_category_result);
$items_category_count = mysqli_num_rows($items_category_result);?>
<?php 
for($i=0; $i<=$items_category_count-1; $i++){?>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading-<?php echo $i;?>">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $i;?>" aria-expanded="true" aria-controls="collapse-<?php echo $i?>">
         Product ID : <?php echo $items_category[$i][0];?>
        </a>
      </h4>
    </div>
    <div id="collapse-<?php echo $i;?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-<?php echo $i;?>">
      <div class="panel-body">
       <table class="product">
       <tr>
       <td ><img style="widht:160px; height:160px;" src="assets/images/Products/<?php echo $items_category[$i][0];?>.jpg"></td>
       <td  style="margin-left:100px; text-align:left; border:1px solid white; padding:10px">
       Product ID : <?php echo $items_category[$i][0];?>
       <br>
       Product Name: <?php echo $items_category[$i][1];?>
       <br>
       Category: <?php echo $items_category[$i][3];?>
       <br>
       Price: Rp.<?php echo number_format($items_category[$i][2],2,",",".");?>,-
       <br>
       </td>
       </tr>
       </table>
       <br>
       <?php 
        $cmd_product_details="SELECT d.Id_product_detail,ukuran,warna,jumlah 
        from product_detail d, product p
        where p.id_product = d.id_product and d.id_product = '".$items_category[$i][0]."'";
      $product_details_result  = mysqli_query($con,$cmd_product_details) or die(mysqli_error($con));
      $product_details=mysqli_fetch_all($product_details_result);
      $product_details_count = mysqli_num_rows($product_details_result);
       ?>
       <table>
       <tr>
        <th> ID Product Detail </th>
        <th> Ukuran</th>
        <th> Warna </th>
        <th> Jumlah</th>
       </tr>
       <?php 
       for($x=0; $x<=$product_details_count-1; $x++){?>
       <tr>
         <td><?php echo $product_details[$x][0];?></td>  
         <td><?php echo $product_details[$x][1];?></td>
         <td><?php echo $product_details[$x][2];?></td>
         <td><?php echo $product_details[$x][3];?></td>
       </tr>    
       <?php
       }
       ?>
       </table>

      </div>
    </div>
  </div>
</div> 
<?php }?>