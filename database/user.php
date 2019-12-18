<?php include("header.php") ?>

<?php 
  $cmd_user="SELECT username, password FROM customer";
  $user_result  = mysqli_query($con,$cmd_user) or die(mysqli_error($con));
  $user=mysqli_fetch_all($user_result);
  $user_count = mysqli_num_rows($user_result);?>
<table class="standard">
    <tr>
        <th>Username</th>
        <th>Password</th>
    </tr>
    <?php 
        $count = intval($user_count);
        $i=1;
        if ($user_count>0){while($i <= $user_count)
        { ?>
    <tr>
        <td> <?php echo $user[$i-1][0];?></td>
        <td> <?php echo $user[$i-1][1];?></td>
    </tr>
    <?php $i++; }
        } ?>

</table>



<?php include("footer.php") ?>