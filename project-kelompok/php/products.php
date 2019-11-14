<!DOCTYPE html>
<?php
	session_start();
  require_once('config.php');
  require('db.php');
		// require_once('_includes/check-out.php'); //have $cart
	// require_once('_includes/check_visitor.php'); //have $visitor
    if (isset($_GET["id_category"])){
      $category = strtolower($_GET["id_category"]);
      $cmd_extra = "AND lower(p.id_category)='".$category."'";
    } else{
      $cmd_extra = "";
    }
  
	$cmd = "SELECT id_product, product_name, p.id_category, Price
  FROM  product p, category c
 WHERE p.id_category = c.id_category $cmd_extra";
	
	$all_result 	= mysqli_query($con,$cmd) or die(mysqli_error($con));
	$count_all_item = mysqli_num_rows($all_result);

	$max_item 		= 9; //Max item in one page
	$page 			= isset($_GET['page'])? (int)$_GET["page"]:1; //contoh IF INLINE
	//echo $page;
	$start 			= ($page>1) ? (($page * $max_item) - $max_item) : 0; //contoh IF INLINE
	//echo $start;
	
	$cmd 			= $cmd." LIMIT $start, $max_item";
	//echo $cmd;
	$limit_result 	= mysqli_query($con,$cmd) or die(mysqli_error($con));

	$count_pages 	= ceil($count_all_item / $max_item); 

	$products = null;
	if ($count_all_item >= 1){
		while($row = mysqli_fetch_assoc($limit_result)) {
			$products[] = $row;
		}
    } ?>
<html>

<head>
    <title>Products</title>
    <script src="../assets/bootstrap-3.4.1-dist/js/jquery-1.12.4.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../assets/bootstrap-3.4.1-dist/css/bootstrap.css" rel="stylesheet">
    <link href="../css/template.css" rel="stylesheet">
    <link href="../css/product.css" rel="stylesheet">
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
                <a class="navbar-brand" href="../html/HomePage.html"><img src="../assets/images/99818.png"
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

                    <a href="../html/products.html"><button type="button" class="btn btn-default"><span
                                class="glyphicon glyphicon-search"></span></button></a>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../html/check-out.html"><span class="glyphicon glyphicon-shopping-cart"></span></a>
                    </li>
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
    <div class="categories">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                            Boy's Outift
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                        <ul>
                            <li><a href="products.php?id_category=st04">Setelan Panjang</a></li>
                            <li><a href="products.php?id_category=st03">Setelan Pendek</a></li>
                            <li><a href="products.php?id_category=ks02">Kaos</a></li>
                            <li><a href="products.php?id_category=sp03">Sneakers</a></li>
                            <li><a href="products.php?id_category=sp04">Sepatu Sandal</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                            href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Girl's Outfit
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        <ul>
                            <li><a href="products.php?id_category=ds02">Dress Lengan Panjang</a></li>
                            <li><a href="products.php?id_category=ds01">Dress Lengan Pendek</a></li>
                            <li><a href="products.php?id_category=st02">Setelan Lengan Panjang</a></li>
                            <li><a href="products.php?id_category=st01">Setelan Lengan Pendek</a></li>
                            <li><a href="products.php?id_category=sp01">Sneakers</a></li>
                            <li><a href="products.php?id_category=sp02">Sepatu Sandal</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container">

        <div class='row productsimg'>

            <?php 
        if ($count_all_item>0){
					foreach($products as $product){
            $id = $product['id_product'];
          
				?>
            <div class="thumbnail">
                <img src='../assets/images/products/<?php echo $id; ?>.jpg' class='img-responsive object-fit' />
                <h5><?php echo $product['product_name']; ?></h5>
                <p>
                    Rp.
                    <?php 
								$price = $product['Price'];
								echo number_format($price,2); 
							?>
                </p>
                <div class="space-ten"></div>
                <div class="btn-ground text-center">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addtocarts"
                        onclick=""></i>
                        Add To Cart</button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product_view"><i
                            class="fa fa-search"></i> Quick View</button>
                </div>
                <div class="space-ten"></div>
            </div>
            <?php } } else { ?>
            <h2 class="warning"> Product Not Available </h2> <?php }
          ?>
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
                            <div class='col-md-2'>

                            </div>
                            <div class='col-md-8'>
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
                            <div class='col-md-2'>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade product_view" id="addtocarts">
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
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the
                                    industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                    galley of type and
                                    scrambled it to make a type specimen book. It has survived not only five centuries,
                                    but also the leap
                                    into
                                    electronic typesetting, remaining essentially unchanged. It was popularised in the
                                    1960s with the
                                    release of
                                    Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                    publishing software
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
                                <button class="add btn btn-primary " onclick="showCheckout()" data-dismiss="modal">Add
                                    to
                                    Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="floatbutton">
        <a href="../php/" class="float">
            <img src="https://img.icons8.com/nolan/64/000000/shopping-cart.png">
            <h5>Checkout</h5>
        </a>

    </div>

    <div class='row text-center'>
        <div class="btn-group">
            <?php
						if ($page>1){
							$prev_page = $page-1;
							//echo "Prev: ".$prev_page;
					?>
            <a href='products.php?id_category=<?php echo $category; ?>&page=<?php echo $prev_page; ?>'
                class="btn btn-default" title='Previous'>
                <i class='glyphicon glyphicon-chevron-left'></i>
                Previous
            </a>
            <?php } ?>
            <?php
						for ($i=1; $i<=$count_pages; $i++){
							$flag_class = "";
							if ($page==$i){
								$flag_class = "active";
							}
							if($i==1){
								echo "<a href='products.php?id_category=$category&page=$i' class='btn btn-default $flag_class' title='First'>$i</a>";
							} else if($i==$count_pages) {
								echo "<a href='products.php?id_category=$category&page=$i' class='btn btn-default $flag_class' title='Last'>$i</a>";
							} else {
								echo "<a href='products.php?id_category=$category&page=$i' class='btn btn-default $flag_class' title='Page $i'>$i</a>";
							}
						}
					?>
            <?php
						if ($page<$count_pages){
							$next_page = $page+1;
							//echo "Next: ".$next_page;
							echo "<a href='products.php?id_category=$category&page=$next_page' class='btn btn-default' title='Next'>
										Next
										<i class='glyphicon glyphicon-chevron-right'></i>
									</a>";
						}
					?>
        </div>
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