<?php 
session_start();
require_once('db.php');
if(isset($_POST['btnaddcart'])){    
    $id_det_prod = $_POST['size'];
    $p=$_POST;
    $sid = session_id();
    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
    }else{
        $username = '-';
    }
    
//cek transaksi
$curdate= date("Y-m-d");
$query = "SELECT transaction_id FROM transaction where `date` = '$curdate' and session_id = '$sid'";
$sql = mysqli_query($con, $query) or die(mysqli_error($con));
$ketemu=mysqli_num_rows($sql);
if ($ketemu == 0){
    $query = "SELECT transaction_id FROM transaction where `date` = '$curdate';";
    $sql = mysqli_query($con, $query) or die(mysqli_error($con));
    $ketemu=mysqli_num_rows($sql);
    $t_id = $ketemu +1;
    $id_transaction = date("Ymd").$t_id;
    $query="INSERT INTO transaction VALUES ('$id_transaction', '$sid', '$curdate', 0, '$username', 0, 'N', 0);";
    $sql = mysqli_query($con, $query) or die(mysqli_error($con));
}else{
    $get_id_t = mysqli_fetch_assoc($sql);
    $id_transaction = $get_id_t['transaction_id'];
}
//di cek dulu apakah barang yang di beli sudah ada di tabel keranjang
$query = "SELECT id_product_detail FROM transaction_detail td, transaction t WHERE t.transaction_id = td.transaction_id and session_id = '$sid' and id_product_detail='$id_det_prod';";
$sql = mysqli_query($con, $query);

    $ketemu=mysqli_num_rows($sql);
    if ($ketemu==0){
        // kalau barang belum ada, maka di jalankan perintah insert        
        $query = "SELECT id_product_detail, Price FROM product_detail pd, product p WHERE id_product_detail='$id_det_prod' and pd.id_product=p.id_product;";         
        $sql = mysqli_query($con, $query) or die(mysqli_error($con));
        $hasil = mysqli_fetch_assoc($sql);
        $harga = (double)$hasil['Price'];
        $subtotal = $harga * (double)$_POST['jumlah'];

        $query = "SELECT * FROM `transaction_detail` WHERE transaction_id = '$id_transaction'" ;
        $sql = mysqli_query($con, $query) or die(mysqli_error($con));
        $ketemu=mysqli_num_rows($sql);
        $td_id = $ketemu + 1;
        $id_transaction_detail = $id_transaction."-".$td_id;
        
        $query="INSERT INTO transaction_detail VALUES ('".$id_transaction_detail."', '".$id_transaction."', '".$id_det_prod."', $harga, $_POST[jumlah], $subtotal);";
    } else {
        //  kalau barang ada, maka di jalankan perintah update
        $query="UPDATE transaction_detail d, transaction t SET jumlah_product = jumlah_product + $_POST[jumlah] WHERE session_id ='$sid' AND id_product_detail='$id_det_prod'";        
    }
    $sql = mysqli_query($con, $query) or die(mysqli_error($con));   
    header('Location: cobacart.php');
}
?>