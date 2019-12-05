<?php include("header.php") ?>

<?php   
$cmd_alamat="SELECT username, provinsi, kab_kota,kecamatan,kelurahan,kode_pos,alamat
  from customer";
   $alamat_result  = mysqli_query($con,$cmd_alamat) or die(mysqli_error($con));
   $alamat=mysqli_fetch_all($alamat_result);
   $alamat_count = mysqli_num_rows($alamat_result);?>
 <table class="alamat">
                    <tr>
                        <th> Username </th>
                        <th> Provinsi </th>
                        <th> Kabupaten/Kota </th>
                        <th> Kecamatan </th>
                        <th> Kelurahan </th>
                        <th> Kode Pos </th>
                        <th> Alamat </th>
                    </tr>
                    <?php
                     $i=1;
                    if ($alamat_count>0){
                    while ($i<=$alamat_count){?>
                    <tr>
                        <td><?php echo $alamat[$i-1][0];?></td>
                        <td><?php echo $alamat[$i-1][1];?></td>
                        <td><?php echo $alamat[$i-1][2];?></td>
                        <td><?php echo $alamat[$i-1][3];?></td>
                        <td><?php echo $alamat[$i-1][4];?></td>
                        <td><?php echo $alamat[$i-1][5];?></td>
                        <td><?php echo $alamat[$i-1][6];?></td>
                    </tr>
                    <?php 
                  $i++;
                    }
                    }
                    ?>
                </table>
<?php include("footer.php") ?>

