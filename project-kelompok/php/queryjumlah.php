  <?php 
  session_start();
  require_once('db.php');
// $g = $_GET;
// $id_detbarang = null;
// if(isset($g['id_prod_det'])){
//     $id_detbarang = $g['id_prod_det'];
//     $_SESSION['id_prod_det'] = $id_detbarang;
// }
// $jumlah = "0";
  
 
//   $query ="SELECT id_product_detail, jumlah
//           FROM product_detail
//           WHERE id_product_detail = '$id_detbarang'";
    
//           $result= mysqli_query($con, $query) or die(mysqli_error($con));
//           $result_arr = mysqli_fetch_assoc($result);          
          if(!empty($_GET['a'])){
            $g = $_GET;
            $iddetbar = $g['a'];
            $query = "SELECT id_product_detail, jumlah FROM product_detail WHERE id_product_detail = '$iddetbar'";
          $result= mysqli_query($con, $query) or die(mysqli_error($con));
          $result_arr = mysqli_fetch_assoc($result); /* DO YOUR QUERY HERE AND GET THE OUTPUT YOU WANT */
          ?>
            <input name="jumlah" type="number" id="jumlah" min="1" id="jumlah" max="<?php echo $result_arr['jumlah'];?>" >
          <?php
           /* PRINT THE OUTPUT YOU WANT, IT WILL BE RETURNED TO THE ORIGINAL PAGE */
          }
  ?>
  
