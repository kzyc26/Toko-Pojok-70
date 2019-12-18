<?php include("header.php")?>
<?php
   $cmd_discount="SELECT Product_name, id_product, if(discount is null, 'Normal Price', concat(discount, '%'))
   from product";
   $discount_result  = mysqli_query($con,$cmd_discount) or die(mysqli_error($con));
   $discount=mysqli_fetch_all($discount_result);
   $discount_count = mysqli_num_rows($discount_result);
   ?>
   <h2>Product Dengan Diskon</h2>
   <select name="discount" id="select_discount" class="form-control select" onchange="discountchange(this.id)">
    <option value="all">All</option>
    <option value="discount">Discount</option>        
    <option value="normal">Normal Price</option>        
</select>
 <br>
<table class="standard" id="display_discount">
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

</table>

<?php include("footer.php")?>