<?php 
$id = "Null";
  
  if (isset($_POST["add".$id])){ 
      $id_prod = strtolower(substr($_POST["add".$id],0,3));
     $cmd_extra_details="AND lower(id_product_detail)='".$id_prod."'";
      } else{
          $cmd_extra_details="";
      }
  $cmd_product_details ="SELECT id_product_detail,ukuran,warna,jumlah, product_desc
          FROM product_detail d, product p
          WHERE d.id_product = p.id_product and jumlah > 0 $cmd_extra_details";
          $product_details_result= mysqli_query($con,$cmd_product_details) or die(mysqli_error($con));
          $product_details = mysqli_fetch_assoc($product_details_result);
 
        
          
  
  function displayview(){
      if (isset($_POST["".$id.""])){
          $id = strtolower($_POST["".$id.""]);
          $cmd_product_views ="SELECT jumlah_foto from product p
          WHERE  id_product='".$id."'";
          $product_views_result	= mysqli_query($con,$cmd_product_views) or die(mysqli_error($con));
          $product_views = mysqli_fetch_assoc($product_views_result);
        }
  }
  ?>
