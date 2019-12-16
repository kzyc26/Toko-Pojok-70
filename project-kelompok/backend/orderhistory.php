<?php include("header.php") ?>

<?php  
 $cmd_delivery="SELECT * from delivery ";
  $delivery_result  = mysqli_query($con,$cmd_delivery) or die(mysqli_error($con));
  $delivery=mysqli_fetch_all($delivery_result);
  $delivery_count = mysqli_num_rows($delivery_result);
  $cmd_user="SELECT username from customer ";
  $user_result  = mysqli_query($con,$cmd_user) or die(mysqli_error($con));
  $user=mysqli_fetch_all($user_result);
  $user_count = mysqli_num_rows($user_result);
   ?>
<p> Select Delivery Status: </p>
    <select name="delivery" id="listdelivery" >
        <option value="none">All</option>
        <?php for($i=0; $i<=$delivery_count-1; $i++){?>
        <option value="<?php echo $delivery[$i][0];?>"><?php echo $delivery[$i][1];?></option>
        <?php }?>
    </select>
    <div class = "chooseuser">
    <p> Select User: </p>
    <select name="user" id="listuser">
    <option value="none">All</option>
    <?php for($i=0; $i<=$user_count-1; $i++){?>
        <option value="<?php echo $user[$i][0];?>"><?php echo $user[$i][0];?></option>
        <?php }?>
    </select>
    </div>
    <button onclick="deliverychange()" id="btnsearch">Search</button>
    <br>
    <br>
<div id="delivery">
</div>
<?php include("footer.php") ?>
