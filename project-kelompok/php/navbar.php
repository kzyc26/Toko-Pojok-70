<?phpif(!isset($sid)){
session_start();
}
require_once('db.php');
?>

<!DOCTYPE html>
<html>

<head>
  <title><?php echo $page; ?></title>
  <script src="../assets/bootstrap-3.4.1-dist/js/jquery-1.12.4.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script:700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
</head>

<body>
<?php
if (isset($_POST['search'])){  
  $_SESSION['keyword'] = $_POST['keyword'];

  
  function search($hasil){
    $query = "SELECT * FROM product WHERE Product_name LIKE '%$hasil%'";
    $sql_prod = mysqli_query($con, $query) or die(mysqli_error($con));
    $hitung_prod = mysqli_num_rows($sql);

    $query = "SELECT * FROM category WHERE category_name LIKE '%$hasil%'";
    $sql_cat = mysqli_query($con, $query) or die(mysqli_error($con));
    $hitung_cat = mysqli_num_rows($sql);
    if ($hitung_prod !== 0){
      $_SESSION['hasil_search'] = mysqli_fetch_assoc($sql_prod);
      $_SESSION['rows'] = $hitung_prod;
      header("location: products.php");
    } elseif ($hitung_cat !== 0){
      $_SESSION['hasil_search'] = mysqli_fetch_assoc($sql_cat);
      $_SESSION['rows'] = $hitung_cat;
      header("location: products.php");
    } else {
      unset($_SESSION['hasil_search']);
      unset($_SESSION['rows']);
      echo '<script> alert("Sorry, keyword does not match."); </script>';
    }
  }
  
  search($_POST['keyword']);
  
}

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
        <a class="navbar-brand" href="index.php"><img src="../assets/images/99818.png" class="logo-toko"></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">        
        <form class="navbar-form navbar-left" action="" method="POST">
          <div class="form-group">
            <input type="text" name="keyword" class="form-control" placeholder="Search" autofocus autocomplete="off">
          </div>
          <button type="submit" name="search" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
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