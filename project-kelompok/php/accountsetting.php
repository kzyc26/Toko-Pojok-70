<?php
session_start();
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

if(!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must login first to view this page";
    header("location : login.php");
}

if(isset($_POST['logout'])) {
    if(session_destroy()) // Destroying All Sessions
    {
        header("Location: index.php"); // Redirecting To Home Page
    }
}
$cmd_profile ="SELECT fullname, telepon,jenis_kelamin,provinsi, kab_kota,kecamatan,kelurahan,kode_pos,alamat,PASSWORD
from customer where username='".$_SESSION['username']."'";
$profile_result= mysqli_query($con,$cmd_profile) or die(mysqli_error($con));
$profile=mysqli_fetch_assoc($profile_result);

$page = "Account";
require_once('navbar.php');
?>
    <div class="content">
        <div class="row">
            <div class="col-md-3 profilemenu">
                <div class="profilesetting">
                    <img class="profpic" src="https://img.icons8.com/officel/80/000000/user-female-circle.png">
                    <h3>
                        <?php 
                    require('db.php');
                    $query = "SELECT * from `customer` where `username`='".$_SESSION['username']."' LIMIT 1;";
                    $result = mysqli_query($con,$query) or die(mysqli_error());
                    $row = mysqli_fetch_assoc($result);
                    echo $row['fullname'];
                    ?>
                    </h3>
                    <form method="post" action="accountsetting.php">
                        <button type="submit" class="btn btn-info changepic" name="changepic">Change Picture</button>
                        <button type="submit" class="btn btn-info logout" name="logout">Log Out</button>
                    </form>
                </div>
                <div class="categories">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        My Account
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <ul>
                                        <li class="submenu"><a onclick="changeaccount()">Profile</a></li>
                                        <li class="submenu"><a onclick="changepass()">Change Password</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"
                                        >
                                        Order History
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <ul>
                                        <li class="submenu"><a class="history"  data-status="3" >All</a></li>
                                        <li class="submenu" ><a class="history"  data-status="2" >Completed</a></li>
                                        <li class="submenu"><a class="history"  data-status="1"  >Ongoing</a></li>
                                        <li class="submenu " ><a class="history" data-status="0" >Unpaid</a></li>
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
            <div class="col-md-8 informations" id="informations">
                <div class="subcatprofile" id="subcatprofiles">
                    <div class="profiledetails">
                        <h2>Profile</h2>
                        <table>
                            <tr>
                                <td>
                                    <div class="tulisan">Nama Lengkap</div>
                                </td>
                                <td><input type="type" id="nama-lengkap" class="form-control pendek"
                                      placeholder="<?php echo strval($profile['fullname']);?>"   disabled autofocus=""> </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="tulisan">No. Telepon</div>
                                </td>
                                <td><input type="tel" id="no-telp" class="form-control pendek"
                                        placeholder="<?php echo strval($profile['telepon']);?>" disabled></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="tulisan">Jenis Kelamin</div>
                                </td>
                                <?php if(strtolower(strval($profile['jenis_kelamin']))=="female"){
                                    $female="Checked";
                                    $male ="";} else if (strtolower(strval($profile['jenis_kelamin']))=="male"){
                                        $male="Checked";
                                        $female ="";
                                    }
                                
                                ?>
                                <td><input class="gender" type="checkbox" value="female" disabled <?php echo $female;?>> Female
                                    <br>
                                    <input class="gender" type="checkbox" value="male" disabled <?php  echo $male;?>> Male
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
                                        <option value="jawa-timur" >Jawa Timur</option>
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
                                <td><input type="text" id="kodepos" class="form-control pendek" placeholder="<?php echo $profile['kode_pos'];?>"
                                        required="" disabled></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="tulisan">Alamat</div>
                                </td>
                                <td><input type="text" id="alamat" class="form-control panjang" placeholder="<?php echo $profile['alamat'];?>"
                                        required="" disabled></td>
                            </tr>
                        </table>

                    </div>
                    
                </div>
                <div class ="subcatchangepass">
                <H2> Change Your Password </h2>
                </div>

                <div class="subcatorderhistory" id="historyinfo">
                   
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


        </div>
    </div>
    <?php require_once('footer.php'); ?>    
    <link href="../css/accountsetting.css" rel="stylesheet">
    <script src="../js/accountsetting.js"></script>
</body>
</html>