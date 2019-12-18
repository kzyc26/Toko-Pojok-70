<?php include("header.php") ?>

<?php
$cmd_biodata="SELECT fullname, telepon,jenis_kelamin, email, alamat, kab_kota, provinsi
from customer";
$biodata_result  = mysqli_query($con,$cmd_biodata) or die(mysqli_error($con));
$biodata=mysqli_fetch_all($biodata_result);
$biodata_count = mysqli_num_rows($biodata_result);
 ?>
  <h2> Biodata </h2>
  <br>

  <table class="standard">
                    <tr>
                        <th> Nama Lengkap</th>
                        <th> Nomor Telepon</th>
                        <th> Jenis Kelamin</th>
                        <th> Email</th>
                        <th> Alamat</th>
                        <th> Kabupaten/Kota</th>
                        <th> Provinsi</th>
                    </tr>
                    <?php
                    $i=1;
                    if($biodata_count>0){
                    while($i<=$biodata_count){?>
                    <tr>
                        <td><?php echo $biodata[$i-1][0];?></td>
                        <td><?php echo $biodata[$i-1][1];?></td>
                        <td><?php echo $biodata[$i-1][2];?></td>
                        <td><?php echo $biodata[$i-1][3];?></td>
                        <td><?php echo $biodata[$i-1][4];?></td>
                        <td><?php echo $biodata[$i-1][5];?></td>
                        <td><?php echo $biodata[$i-1][6];?></td>
                    </tr>
                    <?php 
                    $i++;
                    }
                    };
                
                     ?>
                </table>
<?php include("footer.php") ?>

