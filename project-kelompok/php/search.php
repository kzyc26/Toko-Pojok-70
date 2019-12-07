<?php
require_once('db.php');
if (isset($_POST['search'])){  
    $_SESSION['keyword'] = $_POST['keyword'];
    $hasil = $_POST['keyword'];
    
      $query = "SELECT * FROM product WHERE Product_name LIKE '%$hasil%'";
      $sql_prod = mysqli_query($con, $query) or die(mysqli_error($con));
      $hitung_prod = mysqli_num_rows($sql);
  
      $query = "SELECT * FROM category WHERE category_name LIKE '%$hasil%'";
      $sql_cat = mysqli_query($con, $query) or die(mysqli_error($con));
      $hitung_cat = mysqli_num_rows($sql);
      if ($hitung_prod !== 0){
        $_SESSION['hasil_search'] = mysqli_fetch_assoc($sql_prod);
        $_SESSION['rows'] = $hitung_prod;
        header("location: products.php");
      } elseif ($hitung_cat !== 0){
        $_SESSION['hasil_search'] = mysqli_fetch_assoc($sql_cat);
        $_SESSION['rows'] = $hitung_cat;
        header("location: products.php");
      } else {
        unset($_SESSION['hasil_search']);
        unset($_SESSION['rows']);
        echo '<script> alert("Sorry, keyword does not match."); </script>';
      } 
  }
?>  