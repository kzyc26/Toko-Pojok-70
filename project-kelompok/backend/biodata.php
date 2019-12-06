<?php include("header.php") ?>

<?php
$cmd_biodata="SELECT fullname, telepon,jenis_kelamin
from customer";
$biodata_result  = mysqli_query($con,$cmd_biodata) or die(mysqli_error($con));
$biodata=mysqli_fetch_all($biodata_result);
$biodata_count = mysqli_num_rows($biodata_result);
 ?>
  <table class="biodata">
                    <tr>
                        <th> Nama Lengkap</th>
                        <th> Nomor Telepon</th>
                        <th> Jenis Kelamin</th>
                    </tr>
                    <?php
                    $i=1;
                    if($biodata_count>0){
                    while($i<=$biodata_count){?>
                    <tr>
                        <td><?php echo $biodata[$i-1][0];?></td>
                        <td><?php echo $biodata[$i-1][1];?></td>
                        <td><?php echo $biodata[$i-1][2];?></td>
                    </tr>
                    <?php 
                    $i++;
                    }
                    };
                
                     ?>
                </table>
<?php include("footer.php") ?>

