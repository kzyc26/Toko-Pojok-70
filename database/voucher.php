<?php include("header.php") ?>

<?php
if (!isset($_SESSION['hasil_search'])){
    $cmd_voucher="SELECT fullname, uv.username , voucher_desc,qty
   from user_voucher uv,voucher v, customer c
   where uv.username = c.username and uv.id_voucher = v.id_voucher";
   $voucher_result  = mysqli_query($con,$cmd_voucher) or die(mysqli_error($con));
   $voucher=mysqli_fetch_all($voucher_result);
   $voucher_count = mysqli_num_rows($voucher_result); 
  } else {
    $voucher = $_SESSION['hasil_search'];
    $voucher_count= $_SESSION['baris'];
    unset($_SESSION['hasil_search']);
    unset($_SESSION['baris']);
  }
  ?>

<h2>Voucher Customer</h2>
  <br>
  <form class="select" action="search_voucher.php" method="POST">
  <div class="form-group">
    <input type="text" name="keyword" class="form-control" placeholder="Search" autofocus autocomplete="off">
  </div>
  <button type="submit" name="search" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
</form>
<table class="standard">
                    <tr>
                        <th>Fullname</th>
                        <th>Username</th>
                        <th>Voucher</th>
                        <th>Qty</th>
                    </tr>
                    <?php 
                        $i=1;
                        if ($voucher_count>0){
                            while($i <= $voucher_count){ ?>
                    <tr>
                        <td> <?php echo $voucher[$i-1][0];?></td>
                        <td> <?php echo $voucher[$i-1][1];?></td>
                        <td> <?php echo $voucher[$i-1][2];?></td>
                        <td> <?php echo $voucher[$i-1][3];?></td>
                    </tr>
                    <?php 
                    $i++; }
                         }
                        ?>
                </table>
<?php include("footer.php") ?>

