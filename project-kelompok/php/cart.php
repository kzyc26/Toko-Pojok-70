<?php 
session_start();
$sid = session_id();
require_once('db.php');?>

<?php   
        $query = "SELECT Product_name, p.id_product, dt.id_product_detail, ukuran, warna, jumlah_product, Price FROM transaction_detail dt, transaction t, product p, product_detail dp WHERE session_id='$sid' AND dt.transaction_id = t.transaction_id and dt.id_product_detail = dp.id_product_detail and dp.id_product = p.id_product;";
          $sql = mysqli_query($con, $query) or die(mysqli_error($con)); 
          $_SESSION['total'] = null;            
while($r = mysqli_fetch_assoc($sql)){
        $subtotal    = $r['Price']* $r['jumlah_product'];
        $_SESSION['total']       = $_SESSION['total'] + $subtotal;
         }
         $query = "UPDATE transaction set total_transaction = ".$_SESSION['total']." WHERE session_id = '$sid'";
         $sql = mysqli_query($con, $query) or die(mysqli_error($con));
         ?>
<h3>Total: Rp. <?php echo number_format($_SESSION['total'],2,",","."); ?></h3>
<?php
$query = "SELECT Product_name, p.id_product, dt.id_product_detail, ukuran, warna, jumlah_product, Price FROM transaction_detail dt, transaction t, product p, product_detail dp WHERE session_id='$sid' AND dt.transaction_id = t.transaction_id and dt.id_product_detail = dp.id_product_detail and dp.id_product = p.id_product;";
$sql = mysqli_query($con, $query) or die(mysqli_error($con)); 

while($r = mysqli_fetch_assoc($sql)){ 
  $id = $r['id_product'];
  $size = $r['ukuran'];
  $warna = $r['warna'];
  $jumlah = $r['jumlah_product'];
  $id_pd = $r['id_product_detail'];
  ?>
          <div id="<?php echo $id_pd; ?>">
            <div class="col-md-2 product">
            <button class="form-control delete" type="button" onclick="hapus('<?php echo $id_pd; ?>', '<?php echo $sid?>')"><span class="glyphicon glyphicon-trash"></span></button>
            </div>
            <table>
              <tr>
                <td class="pic"><img src='../assets/images/products/<?php echo $id; ?>.jpg' style="height:200px;" />
                </td>
                <td class="qty pref">
                  <div>Size: </div>
                  <input type="text" name="size" id="size" class="form-control" placeholder="<?php echo $size; ?>"
                    disabled>
                </td>
                <td class="pref">
                  <div>Color: </div>
                  <input type="text" name="warna" id="warna" class="form-control" placeholder="<?php echo $warna; ?>"
                    disabled>
                </td>
                <td class="qty pref">
                  <div>Qty: </div>
                  <input type="number" class="form-control" min="1" value="<?php echo $jumlah; ?>" disabled>
                </td>
              </tr>
            </table>
          </div>
          <?php } ?>