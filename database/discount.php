<?php include("header.php")?>
<?php
   $cmd_discount="SELECT id_product, if(Discount_price=null,Discount_price,'Normal Price') as `Discount`
   from product";
   $discount_result  = mysqli_query($con,$cmd_discount) or die(mysqli_error($con));
   $discount=mysqli_fetch_all($discount_result);
   $discount_count = mysqli_num_rows($discount_result);
   ?>
   <h2>Product Dengan Diskon</h2>

 <br>
<table class="standard">

    <tr>
        <th>Product ID</th>
        <th>Discount Price</th>
    </tr>
    <?php 
    $i=1;
    if ($discount_count>0){
        while($i <= $discount_count){ ?>
    <tr>
        <td> <?php echo $discount[$i-1][0];?></td>
        <td> <?php echo $discount[$i-1][1];?></td>
    </tr>
    <?php $i++; }
     }; ?>

</table>

<?php include("footer.php")?>