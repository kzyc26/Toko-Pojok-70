<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <title>Order Track</title>
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
        <h4>Input Your Order ID Here</h4>
        <p>(you can check your ID on your account)</p>
        <div class="search">
            <input type="text" class="srchbar" placeholder="Search">
            <button type="submit" class="btsearch" onclick="showtracking()"><span class="glyphicon glyphicon-search"></span></button>
        </div>
        <div class="ordertable">
          <h3 class="orderid">Order ID:A0929302</h3>
            <table>
              <tr>
                <th> Date </th>
                <th> Order Progress</th>
              </tr>
              <tr>
                <td>09/10/2019 10:00</td>
                <td>Order Made</td>
              </tr>
              <tr>
                  <td>09/10/2019 10:10</td>
                  <td>Payment Confirmed</td>
                </tr>
                <tr>
                    <td>10/10/2019 10:00</td>
                    <td>Order Sent By</td>
                  </tr>
            </table>  
            </div>
            <a href="../php/Product Review.php"><button type="button" class="reviewbtn">Give us a review!</button></a>
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
          <link href="../css/Trace and track.css"rel="stylesheet">
          <script src="../assets/bootstrap-3.4.1-dist/js/bootstrap.js"></script>
    
        </body>
    <script>
     document.querySelector('.ordertable').style.display = 'none';
     document.querySelector('.reviewbtn').style.display = 'none';
    function showtracking(){
      document.querySelector('.ordertable').style.display = 'block';
      document.querySelector('.reviewbtn').style.display = 'block';
    }
    </script>
</html>