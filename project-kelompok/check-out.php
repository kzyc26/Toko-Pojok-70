<?php
session_start();
$sid = session_id();
$_SESSION['prevpage'] = "Check Out";
require_once('navbar.php');
require_once('db.php');
?>

<?php 
$query = "SELECT Product_name, p.id_product, dt.id_product_detail, ukuran, warna, jumlah_product, Price FROM transaction_detail dt, transaction t, product p, product_detail dp WHERE session_id='$sid' AND dt.transaction_id = t.transaction_id and dt.id_product_detail = dp.id_product_detail and dp.id_product = p.id_product and transaction_status = 0;";
$sql = mysqli_query($con, $query) or die(mysqli_error($con));
$ketemu = mysqli_num_rows($sql);
if($ketemu !== 0){ ?>
<div class="content">
<span class="col-md-6 col-sm-12 judulgeser">
  <h2>Delivery Details</h2>
</span>
<span class="col-md-6 col-sm-12 judul">
  <h2>Cart</h2>
</span>
<form action="payment-done.php" method="post">
  <div class="col-md-6">
    <div class="col-md-12 col-sm-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Biodata Penerima</h3>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-4 tulisan">Nama Penerima</div>
            <div class="col-md-8"><input type="type" id="nama-lengkap" name="nama" class="form-control pendek"
                placeholder="Nama Lengkap" required="" autofocus=""></div>
          </div>
          <div class="row">
            <div class="col-md-4 tulisan">No. Telepon</div>
            <div class="col-md-8"><input type="tel" id="no-telp" name="telp" class="form-control pendek"
                placeholder="+62 81637829xxx" required=""></div>
          </div>
          <div class="row">
            <div class="col-md-4 tulisan">E-mail Penerima</div>
            <div class="col-md-8"><input type="email" id="email" name="email" class="form-control pendek"
                placeholder="email@mail.com"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12 col-sm-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Delivery Details</h3>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-4 tulisan">Opsi Pengiriman</div>
            <div class="col-md-8">
              <select name="pengiriman" id="pengiriman" class="form-control pendek" required="">
                <option value=""></option>
                <option value="jne-reg">JNE Reguler</option>
                <option value="jne-eks">JNE Ekspress</option>
                <option value="jnt-reg">J&T Reguler</option>
                <option value="jnt-eks">J&T Ekspress</option>
                <option value="cod">Cash on Delivery (Kota Malang)</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-12 col-sm-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Alamat Pengiriman</h3>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-4 tulisan">Provinsi</div>
            <div class="col-md-8">
              <select name="provinsi" id="provinsi" class="form-control pendek" onchange="gantikab(this.id, 'kabkota')"
                required="">
                <option value=""></option>
                <option value="jawa-timur">Jawa Timur</option>
                <option value="jawa-tengah">Jawa Tengah</option>
                <option value="jawa-barat">Jawa Barat</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 tulisan">Kabupaten/Kota</div>
            <div class="col-md-8">
              <select name="kabkota" id="kabkota" class="form-control pendek"
                onchange="gantikecamatan(this.id, 'kecamatan')" required=""></select>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 tulisan">Kecamatan</div>
            <div class="col-md-8">
              <select name="kecamatan" id="kecamatan" class="form-control pendek"
                onchange="gantikelurahan(this.id, 'kelurahan')" required=""></select>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 tulisan">Kelurahan</div>
            <div class="col-md-8">
              <select name="kelurahan" id="kelurahan" class="form-control pendek" required=""></select>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 tulisan">Kode Pos</div>
            <div class="col-md-8">
              <input type="text" id="kodepos" name="kodepos" class="form-control pendek" placeholder="Kodepos"
                required="">
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 tulisan">Alamat</div>
            <div class="col-md-8">
              <input type="text" id="alamat" name="alamat" class="form-control panjang" placeholder="Alamat"
                required="">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6"><input type="checkbox" id="send-details" onclick="nyala()"> Send my order details
              via</div>
            <div class="col-md-6">
              <select name="cb-details" id="cb-details" class="form-control pendek" disabled onchange="cekemail()">
                <option value=""></option>
                <option value="sms">SMS</option>
                <option value="email">E-Mail</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-6 col-sm-12 cart">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Purchased Items</h3>
      </div>
      <div id="display" class="panel-body">
        
      </div>
    </div>
  </div>  
  <div class="modal fade product_view" id="pay">
    <div class="modal-dialog">
      <div class="modal-content" id="modalpay-content">
        
      </div>
    </div>
  </div>
  <?php } else {
    ?>
  <div class="content">
    <h2> Your cart is empty </h2>
    <h3><a href="products.php"> Click here </a> to shop <h3>
  </div>
  <?php 
  } ?>
</form>
</div>

<Br>
<br>
<?php require_once('footer.php'); ?>
<link href="css/check-out.css" rel="stylesheet">
<script src="js/check-out.js"></script>
</body>

</html>