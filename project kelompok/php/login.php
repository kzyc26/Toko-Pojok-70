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
    require_once('config.php');
    require('db.php');	
			if (isset($_POST['inputEmail'])){
        $p = $_POST;
        $con = new mysqli("localhost", "root", "", "register");
        
      if ($con->connect_error){
        die("Connection Failed: ".$con -> connect_error);
      }
				$email = $p['inputEmail'];
				$password = $p['password'];
				
				//Checking is user existing in the database or not
				$query = "SELECT * FROM `users` WHERE email='$email' and password='".sha1($password)."'";
				$result = mysqli_query($con,$query) or die(mysql_error());
				$rows = mysqli_num_rows($result);
				if($rows==1){
					$_SESSION['inputEmail'] = $email;
					header("Location: HomePage.php"); // Redirect user to index.php
				} else {
					echo "<div class='form'><h3>Email/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
			} else {
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

    <img class="foto" src="../assets/images/User.png">
    <br><br><br>
    <div class="container">   
       
        <form class="form-signin" method="post" action="">
            <h2 class="form-signin-heading">Please sign in</h2><br>
            <label for="inputEmail">Email address</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required=""
                autofocus="" name="inputEmail"><br>
            <label for="inputPassword">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="" name="password">
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button onClick="window.location.href='../php/check-out.php'" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            <button onClick="window.location.href='../php/sign-up.php'" class="btn btn-lg btn-primary btn-block" type="submit">Register Now!</button>
        </form>
        <?php } ?>
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