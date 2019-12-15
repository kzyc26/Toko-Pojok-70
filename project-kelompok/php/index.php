<?php
$_SESSION['prevpage']="Homepage";
require_once('navbar.php');
?>
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
        <a href="products.php">
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

    <div id="girl" class="dropdown">
      <button onclick="scrollWin()" class="btn btn-default dropdown-toggle tombol pink" type="button" id="dropdownMenu1"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        Girl's Outfit
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">

        <li><a href="products.php?gender=F">All Girl's Collection</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="products.php?id_category=ds02">Dress Lengan Panjang</a></li>
        <li><a href="products.php?id_category=ds01">Dress Lengan Pendek</a></li>
        <li><a href="products.php?id_category=st02">Setelan Lengan Panjang</a></li>
        <li><a href="products.php?id_category=st01">Setelan Lengan Pendek</a></li>
        <li><a href="products.php?id_category=sp01">Sneakers</a></li>
        <li><a href="products.php?id_category=sp02">Sepatu Sandal</a></li>
      </ul>
    </div>
    <div id="boy" class="dropdown">
      <button onclick="scrollWin()" class="btn btn-default dropdown-toggle tombol cyan" type="button" id="dropdownMenu1"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        Boy's Outfit
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
        <li><a href="products.php?gender=M">All Boy's Collection</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="products.php?id_category=st04">Setelan Panjang</a></li>
        <li><a href="products.php?id_category=st03">Setelan Pendek</a></li>
        <li><a href="products.php?id_category=ks02">Kaos</a></li>
        <li><a href="products.php?id_category=sp03">Sneakers</a></li>
        <li><a href="products.php?id_category=sp04">Sepatu Sandal</a></li>
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

  <?php require_once('footer.php'); ?>
  
  <link href="../css/homepage.css" rel="stylesheet">
  <script src="../js/homepage.js"></script>
</body>

</html>