<?php include("header.php") ?>

<?php 
  $cmd_product_details="SELECT d.Id_product,ukuran,warna,jumlah 
  from product_detail d, product p
  where p.id_product = d.id_product ";
$product_details_result  = mysqli_query($con,$cmd_product_details) or die(mysqli_error($con));
$product_details=mysqli_fetch_all($product_details_result);
$product_details_count = mysqli_num_rows($product_details_result);
?>
<table class="productdetails">
    <tr>
        <th> ID Product </th>
        <th> Ukuran</th>
        <th> Warna </th>
        <th> Jumlah</th>
    </tr>
    <?php 
                    $i=1;
                
                    if($product_details_count>0){
                        while($i<$product_details_count){?>
    <tr>
        <td><?php echo $product_details[$i-1][0];?></td>
        <td><?php echo $product_details[$i-1][1];?></td>
        <td><?php echo $product_details[$i-1][2];?></td>
        <td><?php echo $product_details[$i-1][3];?></td>
    </tr>
    <?php   $i++;}
                     
                    }
                    ?>

</table>

<?php include("footer.php") ?>