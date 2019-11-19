<?php 
  require_once('db.php');
$g = $_GET;
$id_barang = null;
if(isset($g['id'])){
    $id_barang = $g['id'];
    $cmd_extra_details="AND d.id_product ='".$id_barang."'";
}else{
    $cmd_extra_details="";
}
$id = "Null";
  
 
  $cmd_product_details ="SELECT id_product_detail,ukuran,warna,jumlah, product_desc
          FROM product_detail d, product p
          WHERE d.id_product = p.id_product and jumlah > 0 $cmd_extra_details";

          $product_details_result= mysqli_query($con,$cmd_product_details) or die(mysqli_error($con));
          $product_details = mysqli_fetch_assoc($product_details_result);
 
        
          
  

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
                    <img src="../assets/images/Slide 2.jpg" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="../assets/images/Slide 3.jpg" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="../assets/images/color pallete.jpg" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="../assets/images/Slide 1.jpg" onclick="myFunction(this);">
                </div>
            </div>

        </div>
    </div>
    <div class='col-md-4'>
        <div class="addtocart">
            <h5>Pilih Size</h5>
            <select name="size">
                <option value="small">"S"</option>
                <option value="medium">"M"</option>
                <option value="large">"L"</option>
                <option value="XL">"XL"</option>
            </select>
            <h5>Pilih Warna</h5>
            <select name="size">
                <option value="Pink">"Pink"</option>
                <option value="Biru">"Biru"</option>
                <option value="Kuning">"Kuning"</option>
            </select>
            <h5>Jumlah</h5>
            <input type="number" min="1" max="4">
            <br><br><br>
            <button class="add btn btn-primary " onclick="showCheckout()" data-dismiss="modal">Add
                to
                Cart</button>
        </div>
    </div>

</div>