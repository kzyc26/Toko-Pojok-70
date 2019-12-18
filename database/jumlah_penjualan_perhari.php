<?php include("header.php") ?>
<form action="jumlah_penjualan_perhari.php" method="post">
  <div class="col-md-3"><input class="form-control" type="date" id="tanggal" date-format="yyyy-MM-dd" name="tanggal">
  </div>
  <button type="submit" name="cari">Cari</button>
</form>
<?php
if(isset($_POST['cari'])){
  $p = $_POST;
  $tgl = $p['tanggal'];

  $query_total = "select sum(total_transaction) from transaction t where `date` = '$tgl' group by `date`;";
  $sql_total = mysqli_query($con, $query_total) or die(mysqli_error($con));
  $total = mysqli_fetch_assoc($sql_total);

  $query = "SELECT t.transaction_id, pd.id_product, pd.ukuran, pd.warna, jumlah_product, harga_jual_satuan, total_harga
  from product_detail pd, transaction_detail td, transaction t
  where pd.id_product_detail = td.id_product_detail and t.transaction_id = td.transaction_id and `date` = '$tgl'";
  $sql = mysqli_query($con, $query) or die(mysqli_error($con));
  $result = mysqli_fetch_all($sql);
  $row = mysqli_num_rows($sql);
  $i = 0;
?>
<h3>TOTAL = <?php echo number_format($total['sum(total_transaction)'], 2, ",", "."); ?></h3>
<h4>Tanggal: <?php 
$querytgl = "select concat(day('$tgl'), ' ', monthname('$tgl'), ' ', year('$tgl'))";
$sqltgl = mysqli_query($con, $querytgl) or die(mysqli_error($con));
$tanggal = mysqli_fetch_all($sqltgl);
echo $tanggal[0][0];
?></h4>
<table class="perhari standard">
  <tr>
    <th>ID Transaksi</th>
    <th>Gambar</th>
    <th>Ukuran</th>
    <th>Warna</th>
    <th>Jumlah Terjual</th>
    <th>Harga Jual Satuan</th>
    <th>Subtotal</th>
  </tr>
  <?php

  while($i < $row){
    ?>
  <tr>
    <td> <?php echo $result[$i][0];?></td>
    <td> <img style="width:100px; height:100px;" src="assets/images/Products/<?php echo $result[$i][1];?>.jpg"></td>
    <td> <?php echo $result[$i][2];?></td>
    <td> <?php echo $result[$i][3];?></td>
    <td> <?php echo $result[$i][4];?></td>
    <td> <?php echo $result[$i][5];?></td>
    <td> <?php echo $result[$i][6];?></td>
  </tr>
  <?php
    $i++;
  }
}

  ?>
  <style>
    h3 {
      text-align: center;
    }
  </style>
  <?php include("footer.php") ?>