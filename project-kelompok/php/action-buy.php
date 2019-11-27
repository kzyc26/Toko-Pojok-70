<?php 
session_start();
require_once('db.php');
$td_id = 0;
if(isset($_POST['btnaddcart'])){    
    $id_det_prod = $_POST['size'];
    $p=$_POST;
    $sid = session_id();
    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
    }else{
        $username = '';
    }
    
 
//di cek dulu apakah barang yang di beli sudah ada di tabel keranjang
$query = "SELECT id_product_detail FROM transaction_detail td, transaction t WHERE t.transaction_id = td.transaction_id and session_id = '$sid' and id_product_detail='$id_det_prod';";
$sql = mysqli_query($con, $query);

    $ketemu=mysqli_num_rows($sql);
    if ($ketemu==0){
        // kalau barang belum ada, maka di jalankan perintah insert
        $query = "SELECT td.id_product_detail, Price FROM transaction_detail td, transaction t, product_detail pd, product p WHERE t.transaction_id = td.transaction_id and td.id_product_detail='$id_det_prod' and td.id_product_detail = pd.id_product_detail and pd.id_product=p.id_product;";
        $sql = mysqli_query($con, $query);
        $hasil = mysqli_fetch_assoc($sql);
        $harga = (double)$hasil['Price'];
        var_dump ($hasil);
        die();
        $id_transaction = date("Ymd");
        $td_id++;
        $id_transaction_detail = $id_transaction."-".$td_id;
        $curdate= date("Y-m-d");
        
        $total = $harga * (double)$_POST['jumlah'];
        $query="INSERT INTO transaction VALUES ('$id_transaction', '$sid', '$curdate', 400000, '$username', 0, 'CSH', 0);";        
        // $sql;
        $query="INSERT INTO transaction_detail VALUES ('".$id_transaction_detail."', '".$id_transaction."', '".$id_det_prod."', $harga, $_POST[jumlah], $total);";
        echo $query;
        die();
        $sql;
    } else {
        //  kalau barang ada, maka di jalankan perintah update
        $query="UPDATE transaction_detail d, transaction t SET jumlah_product = jumlah_product + 1 WHERE session_id ='$sid' AND id_product_detail='$id_det_prod1'";
        $sql;
    }   
    header('Location: cobacart.php');
}
?>