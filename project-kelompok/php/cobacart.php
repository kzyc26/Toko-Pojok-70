<?php 
session_start();    
$sid = session_id();
require_once('db.php');
?>
<!DOCTYPE html>
<html>
<head></head>
<body>
<h1>Keranjang Belanja</h1>
          <table border=1>
          <tr>
                <th>Nama Produk</th>
                <th>Qty</th>
                <th>Harga</th>
                <th>Sub Total</th>
          </tr>
<?php    //jalankan perintah inner join dari tabel keranjang dan produk
        $query = "SELECT Product_name, p.id_product, dt.id_product_detail, ukuran, warna, jumlah_product, Price FROM transaction_detail dt, transaction t, product p, product_detail dp WHERE session_id='$sid' AND dt.transaction_id = t.transaction_id and dt.id_product_detail = dp.id_product_detail and dp.id_product = p.id_product;";
          $sql = mysqli_query($con, $query) or die(mysqli_error($con)); 
          $total = null;  
while($r = mysqli_fetch_assoc($sql)){
        $subtotal    = $r['Price']* $r['jumlah_product'];
        $total       = $total + $subtotal;
        ?><tr><td><?php echo $r['Product_name']; ?></td>
            <td><?php echo $r['jumlah_product']; ?></td>
            <td><?php echo $r['Price']; ?></td>
            <td><?php echo $subtotal; ?></td></tr>
            <?php } ?>
</table>
<h2>Total Belanja : <b><?php echo $total; ?></b></h2>
<ul>
<li><a href='products.php'>Tambah Barang</a></li>
<li><a href='payment.php'>Selesai belanja</a></li>
</ul>

</body>
</html>