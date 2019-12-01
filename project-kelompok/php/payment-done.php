<?php
session_start();
require_once('db.php');
$sid = session_id();
if(isset($_POST['button_pay'])){    
    //set the values
    $p = $_POST;
    $query = "select transaction_id from transaction where session_id = '$sid'";
    $sql = mysqli_query ($con, $query) or die(mysqli_error($con));
    $result = mysqli_fetch_assoc($sql);
    $t_id = $result['transaction_id'];
    $alamat = $p['alamat'];
    $kodepos = $p['kodepos'];
    $kelurahan = $p['kelurahan'];
    $kecamatan = $p['kecamatan'];
    $kabkota = $p['kabkota'];
    $provinsi = $p['provinsi'];

    //insert delivery details
    $query = "INSERT INTO delivery_details VALUES ('$t_id', 0, '$alamat', '$kodepos', '$kelurahan', '$kecamatan', '$kabkota', '$provinsi', '-');";
    $sql = mysqli_query ($con, $query) or die(mysqli_error($con));

    //set the transaction_status
    $query="UPDATE transaction set transaction_status = 1 where transaction_id='$t_id'";
    $sql = mysqli_query ($con, $query) or die(mysqli_error($con));

    echo "<script> alert('Pesanan berhasil dibuat, silakan tunggu pembayaran Anda dikonfirmasi!'); </script>";
    header("location: index.php");
    // echo $query;
    // die();
}
?>