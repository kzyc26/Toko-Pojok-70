<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <script src="../assets/bootstrap-3.4.1-dist/js/jquery-1.12.4.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script:700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
</head>

<body> 
<?php    
    require('db.php');	    
    
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
    
    if (isset($_POST['username'])){
        $p = $_POST;
				$username = $p['username'];
				$password = $p['password'];				
				//Checking is user existing in the database or not
				$query = "SELECT * FROM `customer` WHERE username='$username' and password='".sha1($password)."'";
        $result = mysqli_query($con,$query) or die(mysqli_error());
        // echo "<pre>";
        // print_r($query);
        // echo "</pre>";
        // die();
				$rows = mysqli_num_rows($result);
				if($rows==1){
					$_SESSION['username'] = $username;
					header("Location: index.php"); // Redirect user to index.php
				} else {
          $errmessage = "Username/Password is incorrect";
					echo "<script type='text/javascript'> alert('$errmessage');</script>";
				}
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
    <img class="foto" src="../assets/images/User.png">
    <br><br><br>
    <div class="container">       
        <form class="form-signin" method="post" action="login.php">
       
            <h2 class="form-signin-heading">Please sign in</h2><br>
            <label for="username">Username</label>
            <input type="text" id="username" class="form-control" placeholder="Username" required=""
                autofocus="" name="username"><br>
            <label for="inputPassword">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="" name="password">
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Sign in</button>
            <button onClick="window.location.href='../php/sign-up.php'" class="btn btn-lg btn-primary btn-block" type="submit">Register Now!</button>
        </form>
    </div>
    <br><br>
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
    <link href="../css/login.css" rel="stylesheet">
    <script src="../assets/bootstrap-3.4.1-dist/js/bootstrap.js"></script>
</body>

</html>