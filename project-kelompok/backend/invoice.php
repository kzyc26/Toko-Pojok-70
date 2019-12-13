<?php include("header.php") ?>
<form action="invoice.php" method="post">
  <div class="col-md-3"><input class="form-control" type="date" id="tanggal" date-format="yyyy-MM-dd" name="tanggal">
  </div>
  <button type="submit" name="cari">Cari</button>
  <button type="submit" name="all">Show All Invoice</button>
</form>
<?php
if(isset($_POST['cari'])){
  $p = $_POST;
  $tgl = $p['tanggal'];
  $jenis = "tanggal";

  $query_total = "select sum(total_transaction) from transaction t where `date` = '$tgl' group by `date`;";
  $sql_total = mysqli_query($con, $query_total) or die(mysqli_error($con));
  $total = mysqli_fetch_assoc($sql_total);

  $query = "SELECT transaction_id, session_id, concat(day('$tgl'), ' ', monthname('$tgl'), ' ', year('$tgl')), total_transaction, username, total_discount, payment_method, IF(payment_status = 1, 'Lunas', 'Belum dibayar'), IF(transaction_status = 1, 'Sudah Checkout', 'Belum Checkout') FROM `transaction` t, payment_method p where t.id_payment_method = p.id_payment_method";
  $sql = mysqli_query($con, $query) or die(mysqli_error($con));
  $result = mysqli_fetch_all($sql);
  $row = mysqli_num_rows($sql);
  $i = 0;
display($jenis, $i, $row, $result, $total);
}elseif(isset($_POST['all'])){
    $jenis = "semua";
    $query = "SELECT transaction_id, session_id, concat(day(`date`), ' ', monthname(`date`), ' ', year(`date`)), total_transaction, username, total_discount, payment_method, IF(payment_status = 1, 'Lunas', 'Belum dibayar'), IF(transaction_status = 1, 'Sudah Checkout', 'Belum Checkout') FROM `transaction` t, payment_method p where t.id_payment_method = p.id_payment_method";
  $sql = mysqli_query($con, $query) or die(mysqli_error($con));
  $result = mysqli_fetch_all($sql);
  $row = mysqli_num_rows($sql);
  $i = 0;
display($jenis, $i, $row, $result, 0);
}

  function display($jenis, $i, $row, $result, $total){
?>
<?php if($jenis == "tanggal"){ ?>
<h3>TOTAL = <?php echo number_format($total['sum(total_transaction)'], 2, ",", "."); ?></h3>
<?php } ?>
<table class="standard">
  <tr>
    <th>ID Transaksi</th>
    <th>Order ID</th>
    <th>Tanggal</th>
    <th>Total Transaksi</th>
    <th>User</th>
    <th>Payment Method</th>
    <th>Payment Status</th>
    <th>Status Transaksi</th>
    <th>Ongkir</th>
  </tr>
  <?php

  while($i < $row){
    ?>
  <tr>
    <td> <?php echo $result[$i][0];?></td>
    <td> <?php echo $result[$i][1];?></td>
    <td> <?php echo $result[$i][2];?></td>
    <td> <?php echo $result[$i][3];?></td>
    <td> <?php echo $result[$i][4];?></td>
    <td> <?php echo $result[$i][5];?></td>
    <td> <?php echo $result[$i][6];?></td>
    <td> <?php echo $result[$i][7];?></td>
    <td> <?php echo $result[$i][8];?></td>
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