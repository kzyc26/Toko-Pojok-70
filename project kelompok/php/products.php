<!DOCTYPE html>
<html>

<head>
  <title>Products</title>
  <script src="../assets/bootstrap-3.4.1-dist/js/jquery-1.12.4.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">

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
  <div class="categories">
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
          <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true"
              aria-controls="collapseOne">
              Boy's Outift
            </a>
          </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
          <div class="panel-body">
            <ul>
              <li><a>Celana Panjang</a></li>
              <li><a>Celana Pendek</a></li>
              <li><a>Kaos Lengan Panjang</a></li>
              <li><a>Kaos Lengan Pendek</a></li>
              <li><a>Setelan</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwo">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
              aria-expanded="false" aria-controls="collapseTwo">
              Girl's Outfit
            </a>
          </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
          <div class="panel-body">
            <ul>
              <li><a>Celana Panjang</a></li>
              <li><a>Celana Pendek</a></li>
              <li><a>Kaos Lengan Panjang</a></li>
              <li><a>Kaos Lengan Pendek</a></li>
              <li><a>Setelan</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingThree">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
              aria-expanded="false" aria-controls="collapseThree">
              Footwear
            </a>
          </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
          <div class="panel-body">
            <ul>
              <li><a>Sepatu Sandal</a></li>
              <li><a>Sneakers</a></li>
              <li><a>Sandal</a></li>
              <li><a>Kaos Kaki</a></li>
              <li><a>Sepatu Keds</a></li>
            </ul>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="dropdown">
      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="true">
        Filter
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
        <li><a href="#">Size</a></li>
        <li><a href="#">Age</a></li>
        <li><a href="#">Color</a></li>
      </ul>
    </div>
    <div class="productsimg">
     
      <div class="thumbnail">
        <img src="../assets/images/Slide 1.jpg">
        <h2>Product 2</h2>
        <p>Rp 250.000</p>
        <div class="space-ten"></div>
        <div class="btn-ground text-center">
          <button type="button" onclick="showCheckout()" class="add btn btn-default"><i class="fa fa-shopping-cart"></i>
            Add To Cart</button>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product_view"><i
              class="fa fa-search"></i> Quick View</button>
        </div>
        <div class="space-ten"></div>
      </div>
      <div class="thumbnail">
        <img src="../assets/images/Slide 1.jpg">
        <h2>Product 2</h2>
        <p>Rp 250.000</p>
        <div class="space-ten"></div>
        <div class="btn-ground text-center">
          <button type="button" onclick="showCheckout()" class="add btn btn-default"><i class="fa fa-shopping-cart"></i>
            Add To Cart</button>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product_view"><i
              class="fa fa-search"></i> Quick View</button>
        </div>
        <div class="space-ten"></div>
      </div>
      <div class="thumbnail">
        <img src="../assets/images/Slide 1.jpg">
        <h2>Product 2</h2>
        <p>Rp 250.000</p>
        <div class="space-ten"></div>
        <div class="btn-ground text-center">
          <button type="button" onclick="showCheckout()" class="add btn btn-default"><i class="fa fa-shopping-cart"></i>
            Add To Cart</button>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product_view"><i
              class="fa fa-search"></i> Quick View</button>
        </div>
        <div class="space-ten"></div>
      </div>
      <div class="thumbnail">
        <img src="../assets/images/Slide 2.jpg">
        <h2>Product 2</h2>
        <p>Rp 250.000</p>
        <div class="space-ten"></div>
        <div class="btn-ground text-center">
          <button type="button" onclick="showCheckout()" class="add btn btn-default"><i class="fa fa-shopping-cart"></i>
            Add To Cart</button>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product_view"><i
              class="fa fa-search"></i> Quick View</button>
        </div>
        <div class="space-ten"></div>
      </div>
      <div class="thumbnail">
        <img src="../assets/images/Slide 3.jpg">
        <h2>Product 2</h2>
        <p>Rp 250.000</p>
        <div class="space-ten"></div>
        <div class="btn-ground text-center">
          <button type="button" onclick="showCheckout()" class="add btn btn-default"><i class="fa fa-shopping-cart"></i>
            Add To Cart</button>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product_view"><i
              class="fa fa-search"></i> Quick View</button>
        </div>
        <div class="space-ten"></div>
      </div>
      <div class="thumbnail">
        <img src="../assets/images/Slide 2.jpg">
        <h2>Product 2</h2>
        <p>Rp 250.000</p>
        <div class="space-ten"></div>
        <div class="btn-ground text-center">
          <button type="button" onclick="showCheckout()" class="add btn btn-default"><i class="fa fa-shopping-cart"></i>
            Add To Cart</button>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product_view"><i
              class="fa fa-search"></i> Quick View</button>
          <div class="space-ten"></div>
        </div>
      </div>
    </div>
    <div class="modal fade product_view" id="product_view">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <a href="#" data-dismiss="modal" class="class pull-right"><span
                class="glyphicon glyphicon-remove"></span></a>
            <h3 class="modal-title">Product Details</h3>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class='col-md-3'>
                <h4>Product Description</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                  industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                  scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                  into
                  electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                  release of
                  Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                  like
                  Aldus PageMaker including versions of Lorem Ipsum.
                </p>
              </div>
              <div class='col-md-5'>
                <div class="imagecollection">
                  <img src="../assets/images/Slide 1.jpg" id="firstpreview" class="firstpic">
                  <div class="row">
                    <div class="column">
                      <img src="../assets/images/Slide 2.jpg" onclick="myFunction(this);">
                    </div>
                    <div class="column">
                      <img src="../assets/images/Slide 3.jpg" onclick="myFunction(this);">
                    </div>
                    <div class="column">
                      <img src="../assets/images/color pallete.jpg" onclick="myFunction(this);">
                    </div>
                    <div class="column">
                      <img src="../assets/images/Slide 1.jpg" onclick="myFunction(this);">
                    </div>
                  </div>

                </div>
              </div>
              <div class='col-md-4'>
                <div class="addtocart">
                  <h5>Pilih Size</h5>
                  <select name="size">
                    <option value="small">"S"</option>
                    <option value="medium">"M"</option>
                    <option value="large">"L"</option>
                    <option value="XL">"XL"</option>
                  </select>
                  <h5>Pilih Warna</h5>
                  <select name="size">
                    <option value="Pink">"Pink"</option>
                    <option value="Biru">"Biru"</option>
                    <option value="Kuning">"Kuning"</option>
                  </select>
                  <h5>Jumlah</h5>
                  <input type="number" min="1" max="4">
                  <br><br><br>
                  <button class="add btn btn-primary " onclick="showCheckout()" data-dismiss="modal">Add to
                    Cart</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="floatbutton">
      <a href="../php/check-out.php" class="float">
        <img src="https://img.icons8.com/nolan/64/000000/shopping-cart.png">
        <h5>Checkout</h5>
      </a>

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
  <link href="../css/product.css" rel="stylesheet">
  <script src="../assets/bootstrap-3.4.1-dist/js/bootstrap.js"></script>

  <script>
    function myFunction(imgs) {
      // Get the expanded image
      var expandImg = document.getElementById("firstpreview");
      // // Use the same src in the expanded image as the image being clicked on from the grid
      expandImg.src = imgs.src;
      // Use the value of the alt attribute of the clickable image as text inside the expanded image
      expandImg.parentElement.style.display = "block";
      document.getElementsByClassName("column").style.borderColor = "blue";
    }
  </script>
  <script>
    document.querySelector('.floatbutton').style.display = 'none';

    function showCheckout() {
      document.querySelector('.floatbutton').style.display = 'block';
    }
  </script>
</body>
</html>