<?php
session_start();
require_once('db.php');
if (isset($_POST['search'])){  
    $_SESSION['keyword'] = $_POST['keyword'];
    $hasil = $_POST['keyword'];
    
      $query = "SELECT fullname, uv.username , voucher_desc,qty
      from user_voucher uv,voucher v, customer c
      where uv.username = c.username and uv.id_voucher = v.id_voucher and ((fullname LIKE '%$hasil%') or (c.username LIKE '%$hasil%'))";
      $sql_user = mysqli_query($con, $query) or die(mysqli_error($con));
      $hitung_user = mysqli_num_rows($sql_user);
      if ($hitung_user !== 0){
        $_SESSION['hasil_search'] = mysqli_fetch_all($sql_user);
        $_SESSION['baris'] = $hitung_user;
        header("location: voucher.php");
      } else {
        unset($_SESSION['hasil_search']);
        unset($_SESSION['baris']);
        echo '<script> alert("Maaf, user tidak ditemukan."); 
        window.location.replace("voucher.php");
        </script>';
      } 
  }
?>  