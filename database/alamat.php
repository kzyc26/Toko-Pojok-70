<?php include("header.php") ?>

<?php
if (!isset($_SESSION['hasil_search'])){
  $cmd_alamat="SELECT fullname, username, provinsi, kab_kota, kecamatan, kelurahan, kode_pos, alamat
  from customer";
   $alamat_result  = mysqli_query($con,$cmd_alamat) or die(mysqli_error($con));
   $alamat=mysqli_fetch_all($alamat_result);
   $alamat_count = mysqli_num_rows($alamat_result);
} else {
  $alamat = $_SESSION['hasil_search'];
  $alamat_count= $_SESSION['baris'];
  unset($_SESSION['hasil_search']);
  unset($_SESSION['baris']);
} 

?>
<br/>
 <h2> Alamat User  </h2>
 
<form class="select" action="search_alamat.php" method="POST">
  <div class="form-group">
    <input type="text" name="keyword" class="form-control" placeholder="Search" autofocus autocomplete="off">
  </div>
  <button type="submit" name="search" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
</form>
 
 <table class="standard">
                    <tr>
                    <th>Fullname </th>
                        <th> Username </th>
                        <th> Provinsi </th>
                        <th> Kabupaten/Kota </th>
                        <th> Kecamatan </th>
                        <th> Kelurahan </th>
                        <th> Kode Pos </th>
                        <th> Alamat </th>
                    </tr>
                    <?php
                     $i=0;
                    if ($alamat_count>0){
                    while ($i<$alamat_count){?>
                    <tr>
                        <td><?php echo $alamat[$i][0];?></td>
                        <td><?php echo $alamat[$i][1];?></td>
                        <td><?php echo $alamat[$i][2];?></td>
                        <td><?php echo $alamat[$i][3];?></td>
                        <td><?php echo $alamat[$i][4];?></td>
                        <td><?php echo $alamat[$i][5];?></td>
                        <td><?php echo $alamat[$i][6];?></td>
                        <td><?php echo $alamat[$i][7];?></td>
                    </tr>
                    <?php 
                  $i++;
                    }
                    }
                    ?>
                </table>
<?php include("footer.php") ?>

