<?php 
  session_start();
  require_once('db.php');
$g = $_GET;
$id_barang = null;
if(isset($g['id'])){
    $id_barang = $g['id'];
    $_SESSION['id_prod'] = $id_barang;
    $cmd_extra_details="AND d.id_product ='".$id_barang."'";
}else{
    $cmd_extra_details="";
}
$id = "Null";
  
 
  $cmd_product_details ="SELECT id_product_detail,ukuran,warna,jumlah, product_desc, jumlah_foto
          FROM product_detail d, product p
          WHERE d.id_product = p.id_product and jumlah > 0 $cmd_extra_details";
    
          $product_details_result= mysqli_query($con,$cmd_product_details) or die(mysqli_error($con));
          $product_details = mysqli_fetch_assoc($product_details_result);
          $product_details_count = mysqli_num_rows($product_details_result);
          $pick = 1;
          $cmd_limit = $cmd_product_details."LIMIT $pick";
          $Limit_details_execute =mysqli_query($con,$cmd_limit) or die(mysqli_error($con));
          $limit_details = mysqli_fetch_assoc($Limit_details_execute);
          
  ?>

<div class="row">
    <div class='col-md-3'>
        <h4>Product Description</h4>
        <p>
            <?php echo $product_details['product_desc'];?>
        </p>
    </div>
    <div class='col-md-5'>
        <div class="imagecollection">
            <img src="../assets/images/products/<?php echo $g['id'];?>.jpg" id="firstpreview" class="firstpic">
            <div class="row">
                <div class="column">
                    <img src="../assets/images/products/<?php echo $g['id'];?>.jpg" onclick="myFunction(this);">
                </div>
                <?php
                $jumlahfoto= intval($limit_details['jumlah_foto']);
                $i=1;
                if($jumlahfoto>0){
                    while($jumlahfoto>=$i){?>
                <div class="column">
                    <img src="../assets/images/products/<?php echo $g['id'];?>-<?php echo $i;?>.jpg" onclick="myFunction(this);">
                </div>
                <?php 
                $i++;
                }
                }

                ?>

            </div>

        </div>
    </div>
    <div class='col-md-4'>
        <div class="addtocart">
        <form action="action-buy.php" method="post">
            <h5>Pilih Ukuran dan Warna</h5>                      
            <select name="size" id ="size">
            <?php 
                    $query = "SELECT ukuran, warna, id_product_detail FROM `product_detail` where id_product='$g[id]'";         
                    $sql = mysqli_query($con, $query)  or die(mysqli_error($con));
                    $size_result= mysqli_fetch_all($sql);
                    $row = mysqli_num_rows($sql);
                    $x = 0;
                    while ($x < $row) {
                       echo "<option value=".$size_result[$x][2]."> ".$size_result[$x][0]." | ".$size_result[$x][1]." </option>";
                        $x += 1;
                        }
                    ?>  
            </select>            
            <h5>Jumlah</h5>
            <input type="number" min="1" id="jumlah" max="
            <?php
                
            ?>
            ">
            <br><br><br>            
            <button type="submit" class="add btn btn-primary btnaddcart" onclick="showCheckout()" name="btnaddcart">Add to Cart</button>
            </form>
        </div>
    </div>
</div>
