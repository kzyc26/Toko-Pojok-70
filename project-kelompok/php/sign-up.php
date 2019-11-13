<!DOCTYPE html>
<html>

<head>
  <title>Sign Up</title>
  <script src="../assets/bootstrap-3.4.1-dist/js/jquery-1.12.4.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script:700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
</head>

<body>
<?php
      session_start();
      if(isset($_SESSION['username'])){
header("location: accountsetting.php");
      }else{
      // echo "<pre>";
      // print_r($_POST);
      // echo "</pre>";
      // die();
            // require('db.php');
            
            $con = new mysqli("localhost", "root", "", "toko_pojok_70");
            // If form submitted, insert values into the database.
            if (isset($_POST['register'])){
                // $username = stripslashes($_REQUEST['username']); // removes backslashes
                // $username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
                // $email = stripslashes($_REQUEST['email']);
                // $email = mysqli_real_escape_string($con,$email);
                // $password = stripslashes($_REQUEST['password']);
                // $password = mysqli_real_escape_string($con,$password);

                $email = mysqli_real_escape_string($con, $_POST['email']);
                $username = mysqli_real_escape_string($con, $_POST['username']);
                $pass = mysqli_real_escape_string($con, $_POST['password']);
                $repass = mysqli_real_escape_string($con, $_POST['retype-password']);
                $fullname = mysqli_real_escape_string($con, $_POST['nama-lengkap']);
                $gender = mysqli_real_escape_string($con, $_POST['gender']);
                $phone = mysqli_real_escape_string($con, $_POST['no-telp']);
                $dob = mysqli_real_escape_string($con, $_POST['tanggal-lahir']);
                $prov = mysqli_real_escape_string($con, $_POST['provinsi']);
                $kabkota = mysqli_real_escape_string($con, $_POST['kabkota']);
                $kecamatan = mysqli_real_escape_string($con, $_POST['kecamatan']);
                $kelurahan = mysqli_real_escape_string($con, $_POST['kelurahan']);
                $kodepos = mysqli_real_escape_string($con, $_POST['kodepos']);
                $alamat = mysqli_real_escape_string($con, $_POST['alamat']);

                // $trn_date = date("Y-m-d H:i:s");
                $query = "INSERT into customer (`username`, `password`, `jenis_kelamin`, `fullname`, `email`, `telepon`, `provinsi`, `kab_kota`, `kecamatan`, `kelurahan`, `kode_pos`, `alamat`) values ('$username', '".sha1($pass)."', '$gender', '$fullname', '$email', '$phone', '$prov', '$kabkota', '$kecamatan', '$kelurahan', '$kodepos', '$alamat');";
                mysqli_query($con, $query);
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in";
                header('location: index.php');
                mysqli_close($con);
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
        <a class="navbar-brand" href="../php/index.php"><img src="../assets/images/99818.png"
            class="logo-toko"></a>

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
          <a href="../php/products.php"><button type="button" class="btn btn-default"><span
                class="glyphicon glyphicon-search"></span></button></a>
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
  <form class="content" action="sign-up.php" method="post">
    <div class="col-md-12">
      <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Benefits</h3>
      </div>
      <div class="panel-body">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      </div>
    </div></div>
    <div class="col-md-6 col-sm-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Login Details</h3>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-4 tulisan">Email</div>
            <div class="col-md-8"><input type="email" id="email" class="form-control panjang"
                placeholder="Email@email.com" required="" name="email"></div>
          </div>
          <div class="row">
            <div class="col-md-4 tulisan">Username</div>
            <div class="col-md-8"><input type="text" id="username" class="form-control panjang" placeholder="Username"
                required="" name="username"></div>
          </div>
          <div class="row">
            <div class="col-md-4 tulisan">Password</div>
            <div class="col-md-8"><input type="password" id="password" class="form-control panjang"
                placeholder="Password" required="" name="password"></div>
          </div>
          <div class="row">
            <div class="col-md-4 tulisan">Ketik Ulang Password</div>
            <div class="col-md-8"><input type="password" id="retype-password" class="form-control panjang"
                placeholder="Ketik ulang password" required="" name="retype-password"></div>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Biodata</h3>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-4 tulisan">Nama Lengkap</div>
            <div class="col-md-8"><input type="type" id="nama-lengkap" class="form-control pendek" placeholder="Nama Lengkap" required="" name="nama-lengkap"></div>
          </div>
          <div class="row">
            <div class="col-md-4 tulisan">Jenis Kelamin</div>
            <div class="col-md-8"><input class="gender" type="radio" value="female" name="gender"> Female
              <br>
              <input class="gender" type="radio" value="male" name="gender"> Male</div>
          </div>
          <div class="row">
            <div class="col-md-4 tulisan">Telepon</div>
            <div class="col-md-8"><input type="tel" id="no-telp" class="form-control pendek" placeholder="+62 81637829xxx" name="no-telp"></div>
          </div>
          <div class="row">
            <div class="col-md-4 tulisan">Tanggal lahir</div>
            <div class="col-md-8"><input type="date" id="tanggal-lahir" class="form-control panjang"
                placeholder="Tanggal lahir" name="tanggal-lahir"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-sm-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Alamat</h3>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-4 tulisan">Provinsi</div>
            <div class="col-md-8"><select name="provinsi" id="provinsi" class="form-control pendek" onchange="gantikab(this.id, 'kabkota')">
              <option value=""></option>
              <option value="jawa-timur">Jawa Timur</option>
              <option value="jawa-tengah">Jawa Tengah</option>
              <option value="jawa-barat">Jawa Barat</option>
            </select></div>
          </div>
          <div class="row">
            <div class="col-md-4 tulisan">Kabupaten/Kota</div>
            <div class="col-md-8"><select name="kabkota" id="kabkota" class="form-control pendek"
              onchange="gantikecamatan(this.id, 'kecamatan')"></select></div>
          </div>
          <div class="row">
            <div class="col-md-4 tulisan">Kecamatan</div>
            <div class="col-md-8"><select name="kecamatan" id="kecamatan" class="form-control pendek"
              onchange="gantikelurahan(this.id, 'kelurahan')"></select></div>
          </div>
          <div class="row">
            <div class="col-md-4 tulisan">Kelurahan</div>
            <div class="col-md-8"><select name="kelurahan" id="kelurahan" class="form-control pendek"></select></div>
          </div>
          <div class="row">
            <div class="col-md-4 tulisan">Kode Pos</div>
            <div class="col-md-8"><input type="text" id="kodepos" class="form-control pendek" placeholder="Kodepos" required="" name="kodepos"></div>
          </div>
          <div class="row">
            <div class="col-md-4 tulisan">Alamat</div>
            <div class="col-md-8"><input type="text" id="alamat" class="form-control panjang" placeholder="Alamat" required="" name="alamat"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <input type="submit" value="Sign me in!" class= "register" name="register">
    </div>
  </form>
  <?php
      }
  ?>
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