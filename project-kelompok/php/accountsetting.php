<!DOCTYPE html>
<html>

<head>
    <title></title>
    <script src="../assets/bootstrap-3.4.1-dist/js/jquery-1.12.4.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script:700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
</head>

<body>
    <?php
session_start();

if(isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must login first to view this page";
    header("location : login.php");
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location : HomePage.php");
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
    <div class="content">
        <div class="row">
            <div class="col-md-3 profilemenu">
                <div class="profilesetting">
                    <h2>Jane Doe</h2>
                    <img class="profpic" src="https://img.icons8.com/officel/80/000000/user-female-circle.png">
                    <button type="submit" class="btn btn-info changepic">Change Picture</button>
                    <!-- <button type="submit" class="changepic">Change Picture</button> -->
                    <button type="submit" class="btn btn-info logout">Log Out</button>
                    <!-- <button type="submit" class="logout">Log Out</button> -->
                </div>
                <div class="categories">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne" onclick="changeaccount()">
                                        My Account
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <ul>
                                        <li class="submenu">Profile</li>
                                        <li class="submenu">Bank and Cards</li>
                                        <li class="submenu">Address</li>
                                        <li class="submenu">Change Password</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"
                                        onclick="showhistory()">
                                        Order History
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <ul>
                                        <li class="submenu"><a>All</a></li>
                                        <li class="submenu"><a>Completed</a></li>
                                        <li class="submenu"><a>Ongoing</a></li>
                                        <li class="submenu"><a>Unpaid</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"
                                        onclick="shownotif()">
                                        Notifications
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingThree">
                                <div class="panel-body">

                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseFour" aria-expanded="false" aria-controls="collapseFour"
                                        onclick="changetovoucher()">
                                        My Vouchers
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingFour">
                                <div class="panel-body">

                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFive">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseFive" aria-expanded="false" aria-controls="collapseFive"
                                        onclick="showwish()">
                                        Wishlist
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingFive">
                                <div class="panel-body">
                                    <ul>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-md-8 informations">
                <div class="subcatprofile" id="subcatprofiles">
                    <div class="profiledetails">
                        <h2>Profile</h2>
                        <table>
                            <tr>
                                <td>
                                    <div class="tulisan">Nama Lengkap</div>
                                </td>
                                <td><input type="type" id="nama-lengkap" class="form-control pendek"
                                        placeholder="Nama Lengkap" disabled autofocus=""></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="tulisan">No. Telepon</div>
                                </td>
                                <td><input type="tel" id="no-telp" class="form-control pendek"
                                        placeholder="+62 81637829xxx" disabled></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="tulisan">Jenis Kelamin</div>
                                </td>
                                <td><input class="gender" type="checkbox" value="female" disabled> Female
                                    <br>
                                    <input class="gender" type="checkbox" value="male" disabled> Male
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="subjudul">Alamat</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="tulisan">Provinsi</div>
                                </td>
                                <td><select name="provinsi" id="provinsi" class="form-control pendek"
                                        onchange="gantikab(this.id, 'kabkota')" disabled>
                                        <option value=""></option>
                                        <option value="jawa-timur">Jawa Timur</option>
                                        <option value="jawa-tengah">Jawa Tengah</option>
                                        <option value="jawa-barat">Jawa Barat</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="tulisan">Kabupaten/Kota</div>
                                </td>
                                <td><select name="kabkota" id="kabkota" class="form-control pendek"
                                        onchange="gantikecamatan(this.id, 'kecamatan')" disabled></select></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="tulisan">Kecamatan</div>
                                </td>
                                <td><select name="kecamatan" id="kecamatan" class="form-control pendek"
                                        onchange="gantikelurahan(this.id, 'kelurahan')" disabled></select></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="tulisan">Kelurahan</div>
                                </td>
                                <td><select name="kelurahan" id="kelurahan" class="form-control pendek"
                                        disabled></select></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="tulisan">Kode Pos</div>
                                </td>
                                <td><input type="text" id="kodepos" class="form-control pendek" placeholder="Kodepos"
                                        required="" disabled></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="tulisan">Alamat</div>
                                </td>
                                <td><input type="text" id="alamat" class="form-control panjang" placeholder="Alamat"
                                        required="" disabled></td>
                            </tr>
                        </table>

                    </div>
                    <div class="Bankdetails">
                        banks
                    </div>
                    <div class="Addressdetails">
                        address
                    </div>
                    <div class="changepass">
                        nantinya berupa input
                    </div>
                </div>
                <div class="subcatorderhistory">
                    <h2>Order History</h2>
                    <h4 class="historycat"></h4>
                    <table class="histories">
                        <tr>
                            <th><a>Order ID</a></th>
                            <th>Date/Time</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td>0e930423803</td>
                            <td>09-10-2019 / 09:30</td>
                            <td>Order Completed</td>
                        </tr>

                        <tr>
                            <td>0e930423803</td>
                            <td>09-10-2019 / 09:30</td>
                            <td>Order Completed</td>
                        </tr>

                        <tr>
                            <td>0e930423803</td>
                            <td>09-10-2019 / 09:30</td>
                            <td>Order Completed</td>
                        </tr>

                        <tr>
                            <td>0e930423803</td>
                            <td>09-10-2019 / 09:30</td>
                            <td>Order Completed</td>
                        </tr>
                    </table>
                </div>
                <div class="subcatnotifications">
                    <h2>Notifications</h2>
                    <table class="notif">
                        <tr>
                            <td style="text-align:center;">
                                <img src="https://img.icons8.com/nolan/64/000000/star.png">
                            </td>
                            <td style="padding-left: 30px;">
                                <h4><a> Rate Your Order Now!</a></h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with desktop publishing software like Aldus PageMaker including versions of Lorem
                                    Ipsum.</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center;">
                                <img src="https://img.icons8.com/nolan/64/000000/star.png">
                            </td>
                            <td style="padding-left: 30px;">
                                <h4><a> Rate Your Order Now!</a></h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with desktop publishing software like Aldus PageMaker including versions of Lorem
                                    Ipsum.</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center;">
                                <img src="https://img.icons8.com/nolan/64/000000/star.png">
                            </td>
                            <td style="padding-left: 30px;">
                                <h4><a> Rate Your Order Now!</a></h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with desktop publishing software like Aldus PageMaker including versions of Lorem
                                    Ipsum.</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center;">
                                <img src="https://img.icons8.com/nolan/64/000000/star.png">
                            </td>
                            <td style="padding-left: 30px;">
                                <h4><a> Rate Your Order Now!</a></h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with desktop publishing software like Aldus PageMaker including versions of Lorem
                                    Ipsum.</p>
                            </td>
                        </tr>
                    </table>

                </div>
                <div class="subcatvoucher">
                    <h2>My Vouchers</h2>
                    <table>
                        <tr>
                            <td><img src="https://img.icons8.com/nolan/100/000000/loyalty-card.png"></td>
                            <td style="padding: 10px 0px 10px 100px; width:80%;">
                                <h5>10% Discount</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with desktop publishing software like Aldus PageMaker including versions of Lorem
                                    Ipsum.</p>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <table style="padding-bottom:10px;">
                        <tr>
                            <td><img src="https://img.icons8.com/nolan/100/000000/loyalty-card.png"></td>
                            <td style="padding: 10px 0px 10px 100px; width:80%;">
                                <h5>10% Discount</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with desktop publishing software like Aldus PageMaker including versions of Lorem
                                    Ipsum.</p>
                            </td>
                        </tr>

                    </table>
                    <br>
                    <table style="padding-bottom:10px;">
                        <tr>
                            <td><img src="https://img.icons8.com/nolan/100/000000/loyalty-card.png"></td>
                            <td style="padding: 10px 0px 10px 100px; width:80%;">
                                <h5>10% Discount</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with desktop publishing software like Aldus PageMaker including versions of Lorem
                                    Ipsum.</p>
                            </td>
                        </tr>

                    </table>
                </div>
                <div class="subcatwish">
                    <h2>Wishlist</h2>
                    <br>
                    <table class="wishes">
                        <tr>
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Variant</th>
                            <th>Availablity</th>
                            <th>Unit Price</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td><img src="../assets/images/Slide 1.jpg"></td>
                            <td>Floral Shoes</td>
                            <td>Pink</td>
                            <td>5 pair</td>
                            <td>Rp. 150.000</td>
                            <td>
                                <button>add to cart</button>
                                <button>remove</button>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="../assets/images/Slide 1.jpg"></td>
                            <td>Floral Shoes</td>
                            <td>Pink</td>
                            <td>5 pair</td>
                            <td>Rp. 150.000</td>
                            <td>
                                <button>add to cart</button>
                                <button>remove</button>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="../assets/images/Slide 1.jpg"></td>
                            <td>Floral Shoes</td>
                            <td>Pink</td>
                            <td>5 pair</td>
                            <td>Rp. 150.000</td>
                            <td>
                                <button>add to cart</button>
                                <button>remove</button>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="../assets/images/Slide 1.jpg"></td>
                            <td>Floral Shoes</td>
                            <td>Pink</td>
                            <td>5 pair</td>
                            <td>Rp. 150.000</td>
                            <td>
                                <button>add to cart</button>
                                <button>remove</button>
                            </td>
                        </tr>
                    </table>
                    <br>
                </div>
            </div>

            <br><br>

            </footer>
        </div>
    </div>
    <footer class="footer">
        <div class="footer-container">
            <ul class="footer-list">
                <li><a href="#">About Us</a></li>
                <li><a href="#">FAQs</a></li>
                <li><a href="#">Our Policy</a></li>
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
        <link href="../assets/bootstrap-3.4.1-dist/css/bootstrap.css" rel="stylesheet">
        <link href="../css/template.css" rel="stylesheet">
        <link href="../css/accountsetting.css" rel="stylesheet">

        <script src="../assets/bootstrap-3.4.1-dist/js/bootstrap.js"></script>
        <script src="../js/accountsetting.js"></script>

</body>
</html>