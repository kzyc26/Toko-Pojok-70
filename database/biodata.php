<?php include("header.php") ?>

<?php
if (!isset($_SESSION['hasil_search'])){
    $cmd_biodata="SELECT fullname, telepon,jenis_kelamin, email, alamat, kab_kota, provinsi
from customer";
$biodata_result  = mysqli_query($con,$cmd_biodata) or die(mysqli_error($con));
$biodata=mysqli_fetch_all($biodata_result);
$biodata_count = mysqli_num_rows($biodata_result);
  } else {
    $biodata = $_SESSION['hasil_search'];
    $biodata_count= $_SESSION['baris'];
    unset($_SESSION['hasil_search']);
    unset($_SESSION['baris']);
  } 
 ?>
  <h2> Biodata </h2>
  <br>
  <form class="select" action="search_biodata.php" method="POST">
  <div class="form-group">
    <input type="text" name="keyword" class="form-control" placeholder="Search" autofocus autocomplete="off">
  </div>
  <button type="submit" name="search" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
</form>
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
                    while($i<=$biodata_count){                        
  $_SESSION['kota_id']=$biodata[$i-1][5];
  include('display_kabkota.php');
  $_SESSION['prov_id']=$biodata[$i-1][6];
  include('display_province.php');

  ?>
                    <tr>
                        <td><?php echo $biodata[$i-1][0];?></td>
                        <td><?php echo $biodata[$i-1][1];?></td>
                        <td><?php echo $biodata[$i-1][2];?></td>
                        <td><?php echo $biodata[$i-1][3];?></td>
                        <td><?php echo $biodata[$i-1][4];?></td>
                        <td><?php echo $_SESSION['kota'];?></td>
                        <td><?php echo $_SESSION['prov'];?></td>
                    </tr>
                    <?php 
                    $i++;
                    }
                    };
                
                     ?>
                </table>
<?php include("footer.php") ?>

