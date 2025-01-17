<!DOCTYPE html>
<html>

<head>
  <title><?php echo $_SESSION['prevpage']; ?></title>
  <script src="assets/bootstrap-3.4.1-dist/js/jquery-1.12.4.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script:700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
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
        <a class="navbar-brand" href="index.php"><img src="assets/images/99818.png" class="logo-toko"></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">        
        <form class="navbar-form navbar-left" action="search.php" method="POST">
          <div class="form-group">
            <input type="text" name="keyword" class="form-control" placeholder="Search" autofocus autocomplete="off">
          </div>
          <button type="submit" name="search" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
        </form>
        <form action="navbar-redirect.php" method="POST">
        <ul class="nav navbar-nav navbar-right nav-buttons">        
          <li><button type="submit" class="btn btn-default" name="home"><span class="glyphicon glyphicon-home icon-input-btn"></span></button></li>          
          <li><button type="submit" class="btn btn-default" name="cart"><span class="glyphicon glyphicon-shopping-cart icon-input-btn"></span></button></li>          
          <li><button type="submit" class="btn btn-default" name="user"><span class="glyphicon glyphicon-user icon-input-btn"></span></button></li>
        </ul>
        </form>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>