<?php 
  session_start();
  require_once('db.php');
$g = $_GET;
if(isset($g['status'];)){
    if($g['status'] == 1){
        $historycmd_extra="AND (Deliv_details = 1 or Deliv_details = 2 or Deliv_details = 0) "
    }
    elseif ($g['status'] == 2){
        $historycmd_extra="AND Deliv_details = 3 "
    }
    elseif ($g['status'] == 3){
        $historycmd_extra=""
    }
}
$cmd_orderhistory="SELECT t.transaction_id, fullname, dd.alamat,dd.kab_kota,dd.kecamatan,dd.kelurahan,dd.provinsi,dd.kode_pos,total_transaction,d.delivery_status
from transaction t, customer c, delivery_details dd,delivery d where t.username= c.username and dd.transaction_id = t.transaction_id and d.id_deliverystatus = dd.Delivery_status and t.username = '".$_SESSION['Username']."' $historycmd_extra";
$orderhistory_result= mysqli_query($con,$cmd_orderhistory) or die(mysqli_error($con));
$orderhistory=mysqli_fetch_all($orderhistory_result);
$orderhistory_count=mysqli_num_rows($orderhistory_result);

$cmd_orderdetail = "SELECT pd.id_product, product_name, jumlah_product,harga_jual_satuan, total_harga
from transaction_detail td, transaction t, product p, product_detail pd, customer c, delivery d,delivery_details dd
where pd.id_product_detail = td.id_product_detail and p.id_product = pd.id_product and t.username = c.username and t.transaction_id = td.transaction_id and t.username = '".$_SESSION['Username']."' $historycmd_extra
group by transaction_detail_id";
$orderdetail_result= mysqli_query($con,$cmd_orderdetail) or die(mysqli_error($con));
$orderdetail=mysqli_fetch_all($orderdetail_result);
$orderdetail_count=mysqli_num_rows($orderhidetail_result);


?>
<h1>
hello
</h1>
