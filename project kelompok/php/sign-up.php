<!DOCTYPE html>
<html>

<head>
  <title>Sign Up</title>
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
            <a class="navbar-brand" href="../php/HomePage.php"><img src="../assets/images/99818.png" class="logo-toko"></a>
    
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
              <a href="../php/products.php"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button></a>
            </form>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="../php/check-out.php"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
              <li><a href="../php/login.php"><span class="glyphicon glyphicon-user"></span></a></li>
              <li><a href="../php/Trace and Track.php"><span class="glyphicon glyphicon-inbox"></span></a></li>
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
  <div class="content">
    <div class="col-md-9 biodata">
      <h1 class="title-bio">Biodata</h1><br>
      <table class="col-md-12">
        <tr>
          <td>
            <div class="tulisan">Nama Lengkap</div>
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
            <div class="tulisan">Jenis Kelamin</div>
          </td>
          <td><input class="gender" type="checkbox" value="female"> Female
            <br>
            <input class="gender" type="checkbox" value="male"> Male
          </td>
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
          <td colspan="2" class="subjudul">Detail Log In</td>
        </tr>
        <tr>
          <td>
            <div class="tulisan">Username</div>
          </td>
          <td><input type="text" id="username" class="form-control panjang" placeholder="username" required=""></td>
        </tr>
        <tr>
          <td>
            <div class="tulisan">Password</div>
          </td>
          <td><input type="password" id="password" class="form-control panjang" placeholder="password" required=""></td>
        </tr>
        <tr>
          <td>
            <div class="tulisan">Ketik Ulang Password</div>
          </td>
          <td><input type="password" id="retypepassword" class="form-control panjang" placeholder="ketik ulang password" required=""></td>
        </tr>
      </table>

    </div>
    <div class="col-md-3 benefits">
      <h1 class="title-bio">Benefits</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
        laborum.</p>
      <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->
      <input type="checkbox" value="agree"> I Agree to the user <a href="#">terms and conditions</a>
      <br><br><br>
      <input onClick="window.location.href='../php/check-out.php'" type="submit" value="Sign me in!" class="submit">
      <br><br><br><br>
    </div>
  </div>
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
  <link href="../css/sign-up.css" rel="stylesheet">
  <script src="../assets/bootstrap-3.4.1-dist/js/bootstrap.js"></script>
  <script src="../js/sign-up.js"></script>
</body>

</html>