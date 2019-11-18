<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <title>Check Out</title>
  <script src="../assets/bootstrap-3.4.1-dist/js/jquery-1.12.4.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script:700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
</head>

<body>
<?php
if (isset($_POST['user'])){
  if(isset($_SESSION['username'])){
    header("location: accountsetting.php");
exit;
          }else{
            header("location: login.php");
exit;
          }
}

if (isset($_POST['cart'])){
  header("location: check-out.php");
}
?>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
          data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="../assets/images/99818.png" class="logo-toko"></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">        
        <form class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <a href="../php/products.php"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button></a>
        </form>
        <form action="index.php" method="post">
        <ul class="nav navbar-nav navbar-right">
          <li><span class="icon-input-btn"><span class="glyphicon glyphicon-shopping-cart"></span> <input type="submit" class="btn btn-default" name="cart" value=""></span></li>
          <li><span class="icon-input-btn"><span class="glyphicon glyphicon-user"></span> <input type="submit" class="btn btn-default posisi" name="user" value=""></span></li>
          <li><span class="icon-input-btn"><span class="glyphicon glyphicon-usd"></span> <input type="submit" class="btn btn-default" name="trace" value=""></span></li>
        </ul>
        </form>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
 
  <span class="col-md-6 col-sm-12 judulgeser">
    <h2>Delivery Details</h2>
  </span>
  <span class="col-md-6 col-sm-12 judul">
      <h2>Cart</h2>
    </span>

  <div class="col-md-6"><div class="col-md-12 col-sm-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Biodata Penerima</h3>
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-md-4 tulisan">Nama Penerima</div>
          <div class="col-md-8"><input type="type" id="nama-lengkap" class="form-control pendek"
              placeholder="Nama Lengkap" required="" autofocus=""></div>
        </div>
        <div class="row">
          <div class="col-md-4 tulisan">No. Telepon</div>
          <div class="col-md-8"><input type="type" id="nama-lengkap" class="form-control pendek"
              placeholder="Nama Lengkap"></div>
        </div>
        <div class="row">
          <div class="col-md-4 tulisan">E-mail Penerima</div>
          <div class="col-md-8"><input type="tel" id="no-telp" class="form-control pendek"
              placeholder="+62 81637829xxx"></div>
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
            <select name="pengiriman" id="pengiriman" class="form-control pendek">
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
            <select name="provinsi" id="provinsi" class="form-control pendek" onchange="gantikab(this.id, 'kabkota')">
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
              onchange="gantikecamatan(this.id, 'kecamatan')"></select>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 tulisan">Kecamatan</div>
          <div class="col-md-8">
            <select name="kecamatan" id="kecamatan" class="form-control pendek"
              onchange="gantikelurahan(this.id, 'kelurahan')"></select>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 tulisan">Kelurahan</div>
          <div class="col-md-8">
            <select name="kelurahan" id="kelurahan" class="form-control pendek"></select>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 tulisan">Kode Pos</div>
          <div class="col-md-8">
            <input type="text" id="kodepos" class="form-control pendek" placeholder="Kodepos" required="">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 tulisan">Alamat</div>
          <div class="col-md-8">
            <input type="text" id="alamat" class="form-control panjang" placeholder="Alamat" required="">
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
  </div></div>
  
  <div class="col-md-6 col-sm-12 cart">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Purchased Items</h3>
        </div>
        <div class="panel-body">
          <h3>Subtotal: Rp. 300.000,00</h3>
          <div>
            <div class="col-md-1 product"><input type="checkbox" checked="true"></div>
            <div class="col-md-1 product">
              <button type="submit form-control"><span class="glyphicon glyphicon-trash"></span></button>
            </div>
              <table>
                <tr>
                  <td class="pic"><img src="../assets/images/Slide 1.jpg" alt="" width="100%" height="auto"></td>
                  <td>
                    <div>Size: </div>
                    <select name="size" id="size" class="form-control">
                      <option value="s">S</option>
                      <option value="m">M</option>
                      <option value="l">L</option>
                    </select>
                  </td>
                  <td class="pref">
                    <div>Color: </div>
                    <select name="color" id="color" class="form-control">
                      <option value="pink">Pink</option>
                      <option value="white">White</option>
                      <option value="baby blue">Baby Blue</option>
                    </select>
                  </td>
                  <td class="qty pref">
                    <div>Qty: </div>
                    <input type="number" class="form-control" min="1" value="1">
                  </td>
                </tr>
              </table>
          </div>
          <div>
            <div class="col-md-1 product"><input type="checkbox" checked="true"></div>
            <div class="col-md-1 product">
              <button type="submit form-control"><span class="glyphicon glyphicon-trash"></span></button>
            </div>
              <table>
                <tr>
                  <td class="pic"><img src="../assets/images/Slide 2.jpg" alt="" width="100%" height="auto"></td>
                  <td>
                    <div>Size: </div>
                    <select name="size" id="size" class="form-control">
                      <option value="s">S</option>
                      <option value="m">M</option>
                      <option value="l">L</option>
                    </select>
                  </td>
                  <td class="pref">
                    <div>Color: </div>
                    <select name="color" id="color" class="form-control">
                      <option value="pink">Pink</option>
                      <option value="white">White</option>
                      <option value="baby blue">Baby Blue</option>
                    </select>
                  </td>
                  <td class="qty pref">
                    <div>Qty: </div>
                    <input type="number" class="form-control" min="1" value="1">
                  </td>
                </tr>
              </table>
          </div>
          <div>
            <div class="col-md-1 product"><input type="checkbox" checked="true"></div>
            <div class="col-md-1 product">
              <button type="submit form-control"><span class="glyphicon glyphicon-trash"></span></button>
            </div>
              <table>
                <tr>
                  <td class="pic"><img src="../assets/images/Slide 3.jpg" alt="" width="100%" height="auto"></td>
                  <td>
                    <div>Size: </div>
                    <select name="size" id="size" class="form-control">
                      <option value="s">S</option>
                      <option value="m">M</option>
                      <option value="l">L</option>
                    </select>
                  </td>
                  <td class="pref">
                    <div>Color: </div>
                    <select name="color" id="color" class="form-control">
                      <option value="pink">Pink</option>
                      <option value="white">White</option>
                      <option value="baby blue">Baby Blue</option>
                    </select>
                  </td>
                  <td class="qty pref">
                    <div>Qty: </div>
                    <input type="number" class="form-control" min="1" value="1">
                  </td>
                </tr>
              </table>
          </div>
        </div>
      </div>
    </div>
  <a href="../php/payment.php"><button type="submit" id="payment-but"><img
        src="../assets/images/Cash.png">Payment</button></a>
  <footer class="footer">
    <div class="footer-container">
      <ul class="footer-list">
        <li><a href="../php/about-us.php">About Us</a></li>
        <li><a href="../php/faq.php">FAQs</a></li>
        <li><a href="../php/policy.php">Our Policy</a></li>
      </ul>
      <div class="contact-container">
        <div class="contact"><a href="#"><img src="../assets/images/instagram logo.png">
            <p>@baybees.wardrobe</p>
          </a></div>
        <div class="contact"><a href="#"><img src="../assets/images/Whatsapp.png">
            <p>+62 81638495xx7</p>
          </a></div>
      </div>

    </div>
  </footer>

  <link href="../assets/bootstrap-3.4.1-dist/css/bootstrap.css" rel="stylesheet">
  <link href="../css/template.css" rel="stylesheet">
  <link href="../css/check-out.css" rel="stylesheet">
  <script src="../assets/bootstrap-3.4.1-dist/js/bootstrap.js"></script>
  <script src="../js/check-out.js"></script>
</body>
</html>