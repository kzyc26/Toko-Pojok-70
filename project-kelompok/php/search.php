<?php
session_start();
require_once('db.php');
if (isset($_POST['search'])){  
    $_SESSION['keyword'] = $_POST['keyword'];
    $hasil = $_POST['keyword'];
    
      $query = "SELECT id_product, product_name, id_category, Price FROM product WHERE Product_name LIKE '%$hasil%'";      
      $sql_prod = mysqli_query($con, $query) or die(mysqli_error($con));
      $hitung_prod = mysqli_num_rows($sql_prod);
      if ($hitung_prod !== 0){
        $_SESSION['hasil_search'] = mysqli_fetch_all($sql_prod);
        $_SESSION['baris'] = $hitung_prod;
        header("location: products.php");
      } else {
        unset($_SESSION['hasil_search']);
        unset($_SESSION['baris']);
        echo '<script> alert("Sorry, keyword does not match."); 
        window.location.replace("products.php");
        </script>';
      } 
  }
?>  