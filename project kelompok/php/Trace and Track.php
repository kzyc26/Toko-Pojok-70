<!DOCTYPE HTML>
<html>
    <head>
        <title>Trace and Track
        </title>
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
                <a class="navbar-brand" href="../html/HomePage.html"><img src="../assets/images/99818.png" class="logo-toko"></a>
        
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
                  <a href="../html/products.html"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button></a>
                </form>
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="../html/check-out.html"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
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
            <button type="submit" class="reviewbtn"href="#">Give us a Review!</button>
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