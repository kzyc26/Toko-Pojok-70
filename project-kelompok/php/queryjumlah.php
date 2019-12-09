  <?php 
  session_start();
  require_once('db.php');     
          if(!empty($_GET['a'])){
            $g = $_GET;
            $iddetbar = $g['a'];
            $query = "SELECT id_product_detail, jumlah FROM product_detail WHERE id_product_detail = '$iddetbar'";
          $result= mysqli_query($con, $query) or die(mysqli_error($con));
          $result_arr = mysqli_fetch_assoc($result); /* DO YOUR QUERY HERE AND GET THE OUTPUT YOU WANT */
          ?>
            <input name="jumlah" type="number" id="jumlah" min="1" id="jumlah" max="<?php echo $result_arr['jumlah'];?>" >
          <?php
          }
  ?>
  
