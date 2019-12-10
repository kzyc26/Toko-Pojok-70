<?php
session_start();
$sid = session_id();
if(isset($_SESSION['username'])){
  header("location: accountsetting.php");
        }else{
        // echo "<pre>";
        // print_r($_POST);
        // echo "</pre>";
        // die();
        require_once('db.php');
              // If form submitted, insert values into the database.
              if (isset($_POST['register'])){
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
                  $query = "INSERT into customer (`username`, `password`, `jenis_kelamin`, `fullname`, `email`, `telepon`, `provinsi`, `kab_kota`, `kecamatan`, `kelurahan`, `kode_pos`, `alamat`) values ('$username', '".sha1($pass)."', '$gender', '$fullname', '$email', '$phone', '$prov', '$kabkota', '$kecamatan', '$kelurahan', '$kodepos', '$alamat');";                
                  mysqli_query($con, $query);
                  $_SESSION['username'] = $username;
                  $_SESSION['success'] = "You are now logged in";
                  header('location: index.php');
                  mysqli_close($con);
              }                
$_SESSION['prevpage']="Sign Up";
require_once('navbar.php');
?>

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
<Br>
<br>
<?php require_once('footer.php'); ?>
  
  <link href="../css/sign-up.css" rel="stylesheet">
  <script src="../js/sign-up.js"></script>
  
</body>
</html>