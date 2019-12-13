<?php include("header.php") ?>

<?php  
 $cmd_delivery="SELECT * from delivery ";
  $delivery_result  = mysqli_query($con,$cmd_delivery) or die(mysqli_error($con));
  $delivery=mysqli_fetch_all($delivery_result);
  $delivery_count = mysqli_num_rows($delivery_result);
   ?>
<p> Select Delivery Status: </p>
    <select name="delivery" id="listdelivery" onchange="deliverychange()">
        <option value=""></option>
        <?php for($i=0; $i<=$delivery_count-1; $i++){?>
        <option value="<?php echo $delivery[$i][0];?>"><?php echo $delivery[$i][1];?></option>
        <?php }?>
    </select>
    <br>
    <br>
<div id="delivery">
</div>
<?php include("footer.php") ?>
