<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <title>Frequently Asked Questions</title>
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
            <a class="navbar-brand" href="../php/index.php"><img src="../assets/images/99818.png" class="logo-toko"></a>
    
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
      <h1>FAQs</h1>
      <div class="accordion" id="faq">
        <div class="card">
          <div class="card-header question" id="question-1">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#answer-1" aria-expanded="true" aria-controls="answer-1">
                Apakah semua barang ready stock?
              </button>
            </h2>
          </div>
      
          <div id="answer-1" class="collapse answer" aria-labelledby="question-1" data-parent="#faq">
            <div class="card-body">
              Semua barang yang ditampilkan di website merupakan barang yang sudah ready.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header question" id="question-2">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#answer-2" aria-expanded="false" aria-controls="answer-2">
                Ekspedisi apa yang digunakan untuk pengiriman barang?
              </button>
            </h2>
          </div>
          <div id="answer-2" class="collapse answer" aria-labelledby="question-2" data-parent="#faq">
            <div class="card-body">
              Kami menggunakan ekspedisi J&T dan JNE.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header question" id="question-3">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#answer-3" aria-expanded="false" aria-controls="answer-3">
                Bagaimana metode pembayarannya?
              </button>
            </h2>
          </div>
          <div id="answer-3" class="collapse answer" aria-labelledby="question-3" data-parent="#faq">
            <div class="card-body">
              Metode pembayaran dapat dilakukan dengan transfer ke BCA virtual account 538401982xxx. Kami juga menerima pembayaran via OVO dengan memindai <i>QR code</i> di bawah ini:
              <br><img src="../assets/images/qr code.png"><br>
              Harap memasukkan screenshot bukti transaksi ke halaman <i>check-out</i> apabila Anda sudah melakukan pembayaran.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header question" id="question-4">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#answer-4" aria-expanded="false" aria-controls="answer-4">
                Apakah toko ini melayani metode pembayaran COD (<i>Cash on Delivery</i>)?
              </button>
            </h2>
          </div>
          <div id="answer-4" class="collapse answer" aria-labelledby="question-4" data-parent="#faq">
            <div class="card-body">
              Toko ini melayani metode pembayaran COD (<i>Cash on Delivery</i>) di wilayah Tumpang, Kabupaten Malang.
            </div>
          </div>
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
</div>  
  <link href="../assets/bootstrap-3.4.1-dist/css/bootstrap.css" rel="stylesheet">
  <link href="../css/template.css" rel="stylesheet">
  <link href="../css/faq.css" rel="stylesheet">
  <script src="../assets/bootstrap-3.4.1-dist/js/bootstrap.js"></script>
</body>
</html>