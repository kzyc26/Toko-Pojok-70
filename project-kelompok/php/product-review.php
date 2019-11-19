
<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <title>Review</title>
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

<div class="content">
  <h1>PRODUCT REVIEW</h1>
  <div class="reviews">
      <table>
<tr>
  <td><img src="../assets/images/Slide 1.jpg"></td>
    <td style="padding:20px; margin-top:10%;"> 
    <br>
    <h4>Product Name - Variant</h4>
    <fieldset class="rating" >
      <input type="radio" id="star5-1" name="rating-1" value="5" /><label class = "full" for="star5-1" title="Awesome - 5 stars"></label>
      <input type="radio" id="star4half-1" name="rating-1" value="4 and a half" /><label class="half" for="star4half-1" title="Pretty good - 4.5 stars"></label>
      <input type="radio" id="star4-1" name="rating-1" value="4" /><label class = "full" for="star4-1" title="Pretty good - 4 stars"></label>
      <input type="radio" id="star3half-1" name="rating-1" value="3 and a half" /><label class="half" for="star3half-1" title="Meh - 3.5 stars"></label>
      <input type="radio" id="star3-1" name="rating-1" value="3" /><label class = "full" for="star3-1" title="Meh - 3 stars"></label>
      <input type="radio" id="star2half-1" name="rating-1" value="2 and a half" /><label class="half" for="star2half-1" title="Kinda bad - 2.5 stars"></label>
      <input type="radio" id="star2-1" name="rating-1" value="2" /><label class = "full" for="star2-1" title="Kinda bad - 2 stars"></label>
      <input type="radio" id="star1half-1" name="rating-1" value="1 and a half" /><label class="half" for="star1half-1" title="Meh - 1.5 stars"></label>
      <input type="radio" id="star1-1" name="rating-1" value="1" /><label class = "full" for="star1-1" title="Sucks big time - 1 star"></label>
      <input type="radio" id="starhalf-1" name="rating-1" value="half" /><label class="half" for="starhalf-1" title="Sucks big time - 0.5 stars"></label>
    </fieldset>
  <br>
    <textarea rows="10" cols="50" name="comment"></textarea>
   </td>  
   
</tr>
<tr>
    <td ><img src="../assets/images/Slide 2.jpg"></td>
    <td style="padding:20px; margin-top:10%;">
        <h4>Product Name - Variant</h4>
      <fieldset class="rating" >
        <input type="radio" id="star5-2" name="rating-2" value="5" /><label class = "full" for="star5-2" title="Awesome - 5 stars"></label>
        <input type="radio" id="star4half-2" name="rating-2" value="4 and a half" /><label class="half" for="star4half-2" title="Pretty good - 4.5 stars"></label>
        <input type="radio" id="star4-2" name="rating-2" value="4" /><label class = "full" for="star4-2" title="Pretty good - 4 stars"></label>
        <input type="radio" id="star3half-2" name="rating-2" value="3 and a half" /><label class="half" for="star3half-2" title="Meh - 3.5 stars"></label>
        <input type="radio" id="star3-2" name="rating-2" value="3" /><label class = "full" for="star3-2" title="Meh - 3 stars"></label>
        <input type="radio" id="star2half-2" name="rating-2" value="2 and a half" /><label class="half" for="star2half-2" title="Kinda bad - 2.5 stars"></label>
        <input type="radio" id="star2-2" name="rating-2" value="2" /><label class = "full" for="star2-2" title="Kinda bad - 2 stars"></label>
        <input type="radio" id="star1half-2" name="rating-2" value="1 and a half" /><label class="half" for="star1half-2" title="Meh - 1.5 stars"></label>
        <input type="radio" id="star1-2" name="rating-2" value="1" /><label class = "full" for="star1-2" title="Sucks big time - 1 star"></label>
        <input type="radio" id="starhalf-2" name="rating-2" value="half" /><label class="half" for="starhalf-2" title="Sucks big time - 0.5 stars"></label>
      </fieldset>
    <br>
      <textarea rows="10" cols="50" name="comment"></textarea> </td>  
     
  </tr>
  <tr>
      <td ><img src="../assets/images/Slide 3.jpg"></td>
      <td style="padding:20px; margin-top:10%;">
          <h4>Product Name - Variant</h4>
        <fieldset class="rating" >
          <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
          <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
          <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
          <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
          <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
          <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
          <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
          <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
          <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
          <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
        </fieldset>
      <br>
      <textarea rows="10" cols="50" name="comment"></textarea> </td>  
       
    </tr>
 
    </table>
  </div>
  
  <a href="#" class="float">
      <img src="https://img.icons8.com/nolan/100/000000/star.png">
      <h6>Submit Review</h6>
      </a>
     
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
 
<link href="../css/template.css" rel="stylesheet">
<link href="../css/product review.css" rel="stylesheet">
<link href="../css/font-awesome.css" rel ="stylesheet">
  <link href="../assets/bootstrap-3.4.1-dist/css/bootstrap.css" rel="stylesheet">
  <script src="../assets/bootstrap-3.4.1-dist/js/bootstrap.js"></script>
</body>
</html>