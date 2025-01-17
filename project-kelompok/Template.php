<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <title>Homepage</title>
  <script src="assets/bootstrap-3.4.1-dist/js/jquery-1.12.4.min.js"></script>
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
        <a class="navbar-brand" href="#"><img src="assets/images/99818.png" class="logo-toko"></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">        
        <form class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <a href="products.php"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button></a>
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
        
  <footer class="footer">
      <div class="footer-container">
          <ul class="footer-list">
              <li><a href="about-us.php">About Us</a></li>
              <li><a href="faq.php">FAQs</a></li>
              <li><a href="policy.php">Our Policy</a></li>
          </ul>
          <div class="contact-container">
              <div class="contact"><a href="#"><img src="assets/images/instagram logo.png">
                      <p>@baybees.wardrobe</p>
                  </a></div>
              <div class="contact"><a href="#"><img src="assets/images/Whatsapp.png">
                      <p>+62 81638495xx7</p>
                  </a></div>
          </div>

      </div>
  </footer>
</div>  
  <link href="assets/bootstrap-3.4.1-dist/css/bootstrap.css" rel="stylesheet">
  <link href="css/template.css" rel="stylesheet">
  <script src="assets/bootstrap-3.4.1-dist/js/bootstrap.js"></script>
  <script src="js/template.js"></script>
</body>
</html>