<?php include("header.php") ?>

<?php 
$cmd_voucher="SELECT uv.username , voucher_name
   from user_voucher uv,voucher v, customer c
   where uv.username = c.username and uv.id_voucher = v.id_voucher";
   $voucher_result  = mysqli_query($con,$cmd_voucher) or die(mysqli_error($con));
   $voucher=mysqli_fetch_all($voucher_result);
   $voucher_count = mysqli_num_rows($voucher_result); ?>

<table class="standard">
                    <tr>
                        <th>Username</th>
                        <th>Voucher</th>
                    </tr>
                    <?php 
                        $i=1;
                        if ($voucher_count>0){
                            while($i <= $voucher_count){ ?>
                    <tr>
                        <td> <?php echo $voucher[$i-1][0];?></td>
                        <td> <?php echo $voucher[$i-1][1];?></td>
                    </tr>
                    <?php 
                    $i++; }
                         }
                        ?>
                </table>
<?php include("footer.php") ?>

