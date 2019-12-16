<?php
session_start();
$sid = session_id();
require_once('db.php');    
    
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
      $halaman="Log In";
require_once('navbar.php');
		?>
<div class="content">
    <img class="foto" src="assets/images/User.png">
    <br><br><br>
    <div class="container">
        <form class="form-signin" method="post" action="login.php">

            <h2 class="form-signin-heading">Please sign in</h2><br>
            <label for="username">Username</label>
            <input type="text" id="username" class="form-control" placeholder="Username" required="" autofocus=""
                name="username"><br>
            <label for="inputPassword">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required=""
                name="password">
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Sign in</button>
            <button onClick="window.location.href='sign-up.php'"
                class="btn btn-lg btn-primary btn-block">Register Now!</button>
        </form>
    </div>
</div>
<br><br>

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

<link href="assets/bootstrap-3.4.1-dist/css/bootstrap.css" rel="stylesheet">
<link href="css/template.css" rel="stylesheet">
<link href="css/login.css" rel="stylesheet">
<script src="assets/bootstrap-3.4.1-dist/js/bootstrap.js"></script>
</body>

</html>