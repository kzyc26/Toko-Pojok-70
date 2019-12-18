<?php
session_start();
require_once('db.php');
if (isset($_POST['search'])){  
    $_SESSION['keyword'] = $_POST['keyword'];
    $hasil = $_POST['keyword'];
    
      $query = "SELECT fullname, username, provinsi, kab_kota, kecamatan, kelurahan, kode_pos, alamat
      from customer WHERE (fullname LIKE '%$hasil%') or (username LIKE '%$hasil%')";      
      $sql_user = mysqli_query($con, $query) or die(mysqli_error($con));
      $hitung_user = mysqli_num_rows($sql_user);
      if ($hitung_user !== 0){
        $_SESSION['hasil_search'] = mysqli_fetch_all($sql_user);
        $_SESSION['baris'] = $hitung_user;
        header("location: alamat.php");
      } else {
        unset($_SESSION['hasil_search']);
        unset($_SESSION['baris']);
        echo '<script> alert("Maaf, user tidak ditemukan."); 
        window.location.replace("alamat.php");
        </script>';
      } 
  }
?>  