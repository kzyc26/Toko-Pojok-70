<?php include("header.php") ?>

<?php  $cmd_userdelivdetails="SELECT * FROM delivery_details;";
  $userdelivdetails_result  = mysqli_query($con,$cmd_userdelivdetails) or die(mysqli_error($con));
  $userdelivdetails=mysqli_fetch_all($userdelivdetails_result);
  $userdelivdetails_count = mysqli_num_rows($userdelivdetails_result);?>

<table class="userdelivdetails">
                    <tr>
                        <th>Transaction ID</th>
                        <th>Delivery ID</th>
                        <th>Alamat</th>
                        <th>Kode Pos</th>
                        <th>Kelurahan</th>
                        <th>Kecamatan</th>
                        <th>Kabupaten/Kota</th>
                        <th>Provinsi</th>
                    </tr>
                    <?php 
                            $i=1;
                            if ($userdelivdetails_count>0){
                                while($i <= $userdelivdetails_count){ ?>
                    <tr>
                        <td> <?php echo $userdelivdetails[$i-1][0];?></td>
                        <td> <?php echo $userdelivdetails[$i-1][1];?></td>
                        <td> <?php echo $userdelivdetails[$i-1][2];?></td>
                        <td> <?php echo $userdelivdetails[$i-1][3];?></td>
                        <td> <?php echo $userdelivdetails[$i-1][4];?></td>
                        <td> <?php echo $userdelivdetails[$i-1][5];?></td>
                        <td> <?php echo $userdelivdetails[$i-1][6];?></td>
                        <td> <?php echo $userdelivdetails[$i-1][7];?></td>
                    </tr>
                    <?php 
                        $i++; }
                            }
                            ?>
                </table>

<?php include("footer.php") ?>

