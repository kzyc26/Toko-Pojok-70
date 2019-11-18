<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <title>Homepage</title>
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


  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <!-- decoration -->
      <img src="../assets/images/orange-watercolor.png" class="garland">
      <div class="item active">
        <a href="../php/products.php">
          <img src="../assets/images/Slide 1.jpg" alt="...">
          <div class="carousel-caption">
            Shoes
          </div>
        </a>
      </div>
      <div class="item">
        <a href="../php/products.php">
          <img src="../assets/images/Slide 2.jpg" alt="...">
          <div class="carousel-caption">
            GIRL's Outfit
          </div>
        </a>
      </div>
      <div class="item">
        <a href="../php/products.php">
          <img src="../assets/images/Slide 3.jpg" alt="...">
          <div class="carousel-caption">
            BOY's Outfit
          </div>
      </div>
      </a>
      ...
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- Dropdown grouped -->
  <div class="dropdown_group">
    <div id="footwear" class="dropdown">
      <button onclick="scrollWin()" class="btn btn-default dropdown-toggle tombol purple" type="button"
        id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        Footwear
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
        <li><a href="../php/products.php">All Footwear Collection</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="../php/products.php">a</a></li>
        <li><a href="../php/products.php">b</a></li>
        <li><a href="../php/products.php">c</a></li>
        <li><a href="../php/products.php">d</a></li>
        <li><a href="../php/products.php">e</a></li>
      </ul>
    </div>
    <div id="girl" class="dropdown">
      <button onclick="scrollWin()" class="btn btn-default dropdown-toggle tombol pink" type="button" id="dropdownMenu1"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        Girl's Outfit
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
        <li><a href="../php/products.php">All Girl's Collection</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="../php/products.php">Celana Panjang</a></li>
        <li><a href="../php/products.php">Celana Pendek</a></li>
        <li><a href="../php/products.php">Kaos Lengan Panjang</a></li>
        <li><a href="../php/products.php">Kaos Lengan Pendek</a></li>
        <li><a href="../php/products.php">Setelan</a></li>
      </ul>
    </div>
    <div id="boy" class="dropdown">
      <button onclick="scrollWin()" class="btn btn-default dropdown-toggle tombol cyan" type="button" id="dropdownMenu1"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        Boy's Outfit
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
        <li><a href="../php/products.php">All Boy's Collection</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="../php/products.php">Celana Panjang</a></li>
        <li><a href="../php/products.php">Celana Pendek</a></li>
        <li><a href="../php/products.php">Kaos Lengan Panjang</a></li>
        <li><a href="../php/products.php">Kaos Lengan Pendek</a></li>
        <li><a href="../php/products.php">Setelan</a></li>
      </ul>
    </div>
    <div id="baby-gear" class="dropdown">
      <button onclick="scrollWin()" class="btn btn-default dropdown-toggle tombol blue" type="button" id="dropdownMenu1"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        Baby Gear
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
        <li><a href="../php/products.php">All Baby Gear Collection</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="../php/products.php">a</a></li>
        <li><a href="../php/products.php">b</a></li>
        <li><a href="../php/products.php">c</a></li>
        <li><a href="../php/products.php">d</a></li>
        <li><a href="../php/products.php">e</a></li>
      </ul>
    </div>
  </div>
  <br><br><br><br><br><br>

  <!-- cust. reviews -->
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title panel-font">Reviews</h3>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-lg-4">
          <h2>Jane Doe</h2>
          <p>"Donec id elit non mi porta gravida at eget metus."</p>
          <!-- <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p> -->
          <div class="rating">
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star-empty"></span>
          </div>
          <!-- <p><a class="btn btn-primary" href="#" role="button">View details »</a></p> -->
        </div>
        <div class="col-lg-4">
          <h2>Marshall John</h2>
          <p>"Donec id elit non mi porta gravida at eget metus."</p>
          <div class="rating">
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star-empty"></span>
          </div>
          <!-- <p><a class="btn btn-primary" href="#" role="button">View details »</a></p> -->
        </div>
        <div class="col-lg-4">
          <h2>John Doe</h2>
          <p>"Donec id elit non mi porta gravida at eget metus."</p>
          <div class="rating">
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star-empty"></span>
          </div>
          <!-- <p><a class="btn btn-primary" href="#" role="button">View details »</a></p> -->
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

  <link href="../assets/bootstrap-3.4.1-dist/css/bootstrap.css" rel="stylesheet">
  <link href="../css/template.css" rel="stylesheet">
  <link href="../css/homepage.css" rel="stylesheet">
  <script src="../assets/bootstrap-3.4.1-dist/js/bootstrap.js"></script>
  <script src="../js/template.js"></script>
  <script src="../js/homepage.js"></script>
</body>
</html>