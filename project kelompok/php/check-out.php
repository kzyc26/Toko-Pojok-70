
<!DOCTYPE html>
<html>

<head>
  <title></title>
  <script src="../assets/bootstrap-3.4.1-dist/js/jquery-1.12.4.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script:700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
</head>

<body>
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
        <a class="navbar-brand" href="../html/HomePage.html"><img src="../assets/images/99818.png" class="logo-toko"></a>

      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <!-- <ul class="nav navbar-nav">
          <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
          <li><a href="#">Link</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
              aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul> -->
        <form class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default"><a href="../html/products.html"><span class="glyphicon glyphicon-search"></span></a></button>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="../html/check-out.html"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
          <li><a href="../html/login.html"><span class="glyphicon glyphicon-user"></span></a></li>
          <li><a href="../html/Trace and Track.html"><span class="glyphicon glyphicon-inbox"></span></a></li>
          <!-- <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
              aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </li> -->
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

    <span class="col-md-6 judul"><h2>Cart</h2></span>
    <span class="col-md-6 judulgeser"><h2>Delivery Details</h2></span>
  
<div class="content">  
  <div class="col-md-6 cart">    
    <h3>Subtotal: Rp. 300.000,00</h3>
    <div> 
      <div class="col-md-1 product"><input type="checkbox" checked="true"></div> 
      <div class="col-md-1 product">
      <button type="submit form-control"><span class="glyphicon glyphicon-trash"></span></button> 
      </div> 
      <div class="col-md-10">        
        <table>
          <tr>
            <td class="pic"><img src="../assets/images/Slide 1.jpg" alt="" width="100%" height="auto"></td>
            <td><div>Size: </div>
              <select name="size" id="size" class="form-control">            
                  <option value="s">S</option>
                  <option value="m">M</option>
                  <option value="l">L</option>
              </select></td>
              <td class="pref"><div>Color: </div>
                <select name="color" id="color" class="form-control">            
                    <option value="pink">Pink</option>
                    <option value="white">White</option>
                    <option value="baby blue">Baby Blue</option>
                </select></td>
                <td class="qty pref"><div>Qty: </div>
                  <input type="number" class="form-control" min="1" value="1"></td>
          </tr>
        </table>        
      </div>
    </div>
    <div> 
        <div class="col-md-1 product"><input type="checkbox" checked="true"></div> 
        <div class="col-md-1 product">
        <button type="submit form-control"><span class="glyphicon glyphicon-trash"></span></button> 
        </div> 
        <div class="col-md-10">        
          <table>
            <tr>
              <td class="pic"><img src="../assets/images/Slide 2.jpg" alt="" width="100%" height="auto"></td>
              <td><div>Size: </div>
                <select name="size" id="size" class="form-control">            
                    <option value="s">S</option>
                    <option value="m">M</option>
                    <option value="l">L</option>
                </select></td>
                <td class="pref"><div>Color: </div>
                  <select name="color" id="color" class="form-control">            
                      <option value="pink">Pink</option>
                      <option value="white">White</option>
                      <option value="baby blue">Baby Blue</option>
                  </select></td>
                  <td class="qty pref"><div>Qty: </div>
                    <input type="number" class="form-control" min="1" value="1"></td>
            </tr>
          </table>        
        </div>
      </div>
      <div> 
          <div class="col-md-1 product"><input type="checkbox" checked="true"></div> 
          <div class="col-md-1 product">
          <button type="submit form-control"><span class="glyphicon glyphicon-trash"></span></button> 
          </div> 
          <div class="col-md-10">        
            <table>
              <tr>
                <td class="pic"><img src="../assets/images/Slide 3.jpg" alt="" width="100%" height="auto"></td>
                <td><div>Size: </div>
                  <select name="size" id="size" class="form-control">            
                      <option value="s">S</option>
                      <option value="m">M</option>
                      <option value="l">L</option>
                  </select></td>
                  <td class="pref"><div>Color: </div>
                    <select name="color" id="color" class="form-control">            
                        <option value="pink">Pink</option>
                        <option value="white">White</option>
                        <option value="baby blue">Baby Blue</option>
                    </select></td>
                    <td class="qty pref"><div>Qty: </div>
                      <input type="number" class="form-control" min="1" value="1"></td>
              </tr>
            </table>        
          </div>
        </div>
  </div>

  <div class="col-md-6 delivery-details"><br>
    <table class="col-md-12 tabel">
        <tr>
          <td>
            <div class="tulisan">Nama Penerima</div>
          </td>
          <td><input type="type" id="nama-lengkap" class="form-control pendek" placeholder="Nama Lengkap" required=""
              autofocus=""></td>
        </tr>
        <tr>
          <td>
            <div class="tulisan">No. Telepon</div>
          </td>
          <td><input type="tel" id="no-telp" class="form-control pendek" placeholder="+62 81637829xxx" required=""></td>
        </tr>
        <tr>
          <td>
            <div class="tulisan">E-Mail Penerima</div>
          </td>
          <td><input type="email" id="email" class="form-control pendek" placeholder="email@email.com"></td>
        </tr>
        <tr>
          <td>
            <div class="tulisan">Opsi Pengiriman</div>
          </td>
          <td><select name="pengiriman" id="pengiriman" class="form-control pendek">
              <option value=""></option>
              <option value="jne-reg">JNE Reguler</option>
              <option value="jne-eks">JNE Ekspress</option>
              <option value="jnt-reg">J&T Reguler</option>
              <option value="jnt-eks">J&T Ekspress</option>
            </select></td>
        </tr>
        <tr>
          <td colspan="2" class="subjudul">Alamat</td>
        </tr>
        <tr>
          <td>
            <div class="tulisan">Provinsi</div>
          </td>
          <td><select name="provinsi" id="provinsi" class="form-control pendek" onchange="gantikab(this.id, 'kabkota')">
              <option value=""></option>
              <option value="jawa-timur">Jawa Timur</option>
              <option value="jawa-tengah">Jawa Tengah</option>
              <option value="jawa-barat">Jawa Barat</option>
            </select></td>
        </tr>
        <tr>
          <td>
            <div class="tulisan">Kabupaten/Kota</div>
          </td>
          <td><select name="kabkota" id="kabkota" class="form-control pendek"
              onchange="gantikecamatan(this.id, 'kecamatan')"></select></td>
        </tr>
        <tr>
          <td>
            <div class="tulisan">Kecamatan</div>
          </td>
          <td><select name="kecamatan" id="kecamatan" class="form-control pendek"
              onchange="gantikelurahan(this.id, 'kelurahan')"></select></td>
        </tr>
        <tr>
          <td>
            <div class="tulisan">Kelurahan</div>
          </td>
          <td><select name="kelurahan" id="kelurahan" class="form-control pendek"></select></td>
        </tr>
        <tr>
          <td>
            <div class="tulisan">Kode Pos</div>
          </td>
          <td><input type="text" id="kodepos" class="form-control pendek" placeholder="Kodepos" required=""></td>
        </tr>
        <tr>
          <td>
            <div class="tulisan">Alamat</div>
          </td>
          <td><input type="text" id="alamat" class="form-control panjang" placeholder="Alamat" required=""></td>
        </tr>
        <tr>
          <td>
            <input type="checkbox" id="send-details" onclick="nyala()"> Send my order details via </td>
      <td>
            <select name="cb-details" id="cb-details" class="form-control pendek" disabled onchange="cekemail()">
        <option value=""></option>
        <option value="sms">SMS</option>
        <option value="email">E-Mail</option>
      </select>
          </td>
        </tr>
      </table>      
  </div>
  <a href="../html/payment.html"><button type="submit" id="payment-but"><img src="../assets/images/Cash.png">Payment</button></a>
</div>
  <footer class="footer">
      <div class="footer-container">
          <ul class="footer-list">
            <li><a href="../html/about-us.html">About Us</a></li>
            <li><a href="../html/faq.html">FAQs</a></li>
            <li><a href="../html/policy.html">Our Policy</a></li>
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
</div>
  <link href="../assets/bootstrap-3.4.1-dist/css/bootstrap.css" rel="stylesheet">
  <link href="../css/template.css" rel="stylesheet">
  <link href="../css/check-out.css" rel="stylesheet">
  <script src="../assets/bootstrap-3.4.1-dist/js/bootstrap.js"></script>
  <script src="../js/check-out.js"></script>
</body>