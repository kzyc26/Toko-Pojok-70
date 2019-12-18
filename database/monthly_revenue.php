<?php
session_start();
require_once('db.php');
$g=$_GET;
if(isset($g['month'])){
    $month=$g['month'];
}
$Cmd_bulanan ="SELECT td.id_product_detail, pd.id_product, jumlah_product, total_harga,ukuran, warna
from transaction t, transaction_detail td, product p , product_detail pd
where td.transaction_id = t.transaction_id and td.id_product_detail=pd.id_product_detail and p.id_product = pd.id_product and year(t.date) = year(CURRENT_DATE) and month(t.date) = '".$month."'" ;
$bulanan_result  = mysqli_query($con,$Cmd_bulanan) or die(mysqli_error($con));
$bulanan=mysqli_fetch_all($bulanan_result);
$bulanan_count = mysqli_num_rows($bulanan_result);
$subtotal = 0;
$baris= $bulanan_count;
for($i=0; $i<=$bulanan_count-1; $i++){
    $subtotal = $subtotal + intval($bulanan[$i][3]);}
?>


<table class="standard">
    <tr class="title">
        <th> Gambar </th>
        <th> Product Detail ID </th>
        <th> Ukuran | Warna </th>
        <th> Jumlah Produk</th>
        <th> Total Harga </th>
    </tr>
    <?php 
                    for($i=0; $i<=$bulanan_count-1; $i++){
                    $price = $bulanan[$i][3];?>
                <tr class="details">
                    <td><img style="widht:100px; height:100px;" src="assets/images/Products/<?php echo $bulanan[$i][1];?>.jpg">
                    </td>
                    <td><?php echo $bulanan[$i][0] ;?> </td>
                    <td><?php echo $bulanan[$i][4] ;?> | <?php echo $bulanan[$i][5] ;?> </td>

                    <td>
                        <?Php echo $bulanan[$i][2];?>
                    </td>
                    <td>Rp.<?php echo number_format($price,2,",",".");?></td>

                </tr>
                <?php 
                   }
                   ?>
    <tr>
        <td colspan="4"> Total </td>
        <td> Rp. <?php echo  number_format($subtotal,2,",",".");?> </td>
    <tr> 
 
                 
  



</table>