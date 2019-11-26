<?php 
//   session_start();
//   require_once('db.php');
// $g = $_GET;
// $id_barang = null;
// if(isset($g['id'])){
//     $id_barang = $g['id'];
//     $_SESSION['id_prod'] = $id_barang;
//     $cmd_extra_details="AND d.id_product ='".$id_barang."'";
// }else{
//     $cmd_extra_details="";
// }
// $id = "Null";
  
 
//   $cmd_product_details ="SELECT id_product_detail,ukuran,warna,jumlah, product_desc, jumlah_foto
//           FROM product_detail d, product p
//           WHERE d.id_product = p.id_product and jumlah > 0 $cmd_extra_details";
    
//           $product_details_result= mysqli_query($con,$cmd_product_details) or die(mysqli_error($con));
//           $product_details = mysqli_fetch_assoc($product_details_result);
//           $product_details_count = mysqli_num_rows($product_details_result);
//           $pick = 1;
//           $cmd_limit = $cmd_product_details."LIMIT $pick";
//           $Limit_details_execute =mysqli_query($con,$cmd_limit) or die(mysqli_error($con));
//           $limit_details = mysqli_fetch_assoc($Limit_details_execute);
          
  ?>
  
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
          echo $_GET['product_detail_id'];
          if(!empty($_GET["variasi"])){
            $iddetbar = $_GET["variasi"];
            $query = "SELECT id_product_detail, jumlah FROM product_detail WHERE id_product_detail = '$iddetbar'";
    echo $query;
    die();
          $result= mysqli_query($con, $query) or die(mysqli_error($con));
          $result_arr = mysqli_fetch_assoc($result); /* DO YOUR QUERY HERE AND GET THE OUTPUT YOU WANT */
          echo $result_arr['jumlah'];
          ?>
            <input type="number" id="nud_jumlah" min="1" id="jumlah" max="<?php echo $result_arr['jumlah'];?>">
          <?php
           /* PRINT THE OUTPUT YOU WANT, IT WILL BE RETURNED TO THE ORIGINAL PAGE */
          }
  ?>
  
