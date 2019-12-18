<?php 
session_start();
require_once('db.php');
if (isset($_POST['search'])){  
    $_SESSION['keyword'] = $_POST['keyword'];
    $hasil = $_POST['keyword'];
    
      $query = "SELECT fullname, p.id_product, price
      from  customer c, wishlist w, product p 
      where p.id_product = w.Id_product and c.username = w.username and ((fullname LIKE '%$hasil%') or (c.username LIKE '%$hasil%'))";
      $sql_user = mysqli_query($con, $query) or die(mysqli_error($con));
      $hitung_user = mysqli_num_rows($sql_user);
      if ($hitung_user !== 0){
        $_SESSION['hasil_search'] = mysqli_fetch_all($sql_user);
        $_SESSION['baris'] = $hitung_user;
        header("location: wishlist.php");
      } else {
        unset($_SESSION['hasil_search']);
        unset($_SESSION['baris']);
        echo '<script> alert("Maaf, user tidak ditemukan."); 
        window.location.replace("wishlist.php");
        </script>';
      } 
  }
?>