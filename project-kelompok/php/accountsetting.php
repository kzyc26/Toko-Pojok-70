<?php
require_once('db.php');
$g = $_GET;
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
if(isset($g['status'])){
    $stats="showhistory()";
    if($g['status'] == "ongoing"){
        $historycmd_extra="AND (dd.id_deliverystatus = 1 or dd.id_deliverystatus = 2) ";
        $title="Ongoing";
        $review=0;
    
    }
    elseif ($g['status'] == "completed"){
        $historycmd_extra="AND dd.id_deliverystatus = 3 ";
        $title="Completed";
        $review=1;
    }
    elseif ($g['status'] == "all"){
        $historycmd_extra="";
        $title="All";
        $review=0;
    }
    elseif ($g['status'] == "need"){
        $historycmd_extra="AND dd.id_deliverystatus = 0";
        $title="Need to be Delivered";
        $review=0;
    }
}else{ $historycmd_extra="";
$title="";
$stats="firstload()";
$review=0;}
if(isset($_POST['changepass'])){
    if(!isset($_POST['oldpass'])){
        $oldpass = '';
    } else{
        $oldpass = $_POST['oldpass'];
    }
    $cmd_check="select fullname, password from customer where username='".$_SESSION['username']."' and password ='".sha1($oldpass)."'";
    $check_result= mysqli_query($con,$cmd_check) or die(mysqli_error($con));
    $check_count=mysqli_num_rows($check_result);
    ?> <script>alert('<?php echo $check_count?>');</script><?php
    if($check_count>0){
        $cmd_newpass = "UPDATE customer set password='".sha1($_POST['newpass'])."' where username='".$_SESSION['username']."'";
        $newpass_result= mysqli_query($con,$cmd_newpass) or die(mysqli_error($con));
        ?><script>alert("Your Password Has Changed Please Relog")</script><?php
        if(session_destroy()) // Destroying All Sessions
        {
            header("Location: login.php"); // Redirecting To Home Page
        }
    } else 
      ?> <script>alert("Your Current Password is Incorrect Please Input your Current Password") ;
      </script><?php $stats="changepass()";
}

$cmd_orderhistory="SELECT t.transaction_id as `Transaction ID`,
 receiver,notelp,dd.alamat,dd.kab_kota,dd.kecamatan,dd.kelurahan,
 dd.provinsi,dd.kode_pos,total_transaction, d.delivery_status,
 ongkir,nama_ekspedisi,payment_method 
from transaction t, customer c, delivery_details dd,delivery d, ekspedisi e,
payment_method p
where t.username= c.username and dd.transaction_id = t.transaction_id 
and d.id_deliverystatus = dd.id_deliverystatus and dd.id_ekspedisi = e.id_ekspedisi 
and t.id_payment_method= p.id_payment_method and t.username = '".$_SESSION['username']."' 
$historycmd_extra;";
$orderhistory_result= mysqli_query($con,$cmd_orderhistory) or die(mysqli_error($con));
$orderhistory=mysqli_fetch_all($orderhistory_result);
$orderhistory_count=mysqli_num_rows($orderhistory_result);

$cmd_profile ="SELECT fullname, telepon,jenis_kelamin,provinsi, kab_kota,kecamatan,kelurahan,kode_pos,alamat
from customer where username='".$_SESSION['username']."'";
$profile_result= mysqli_query($con,$cmd_profile) or die(mysqli_error($con));
$profile=mysqli_fetch_assoc($profile_result);
$page = "Account";
require_once('navbar.php');
?>
<body onload = "<?php echo $stats?>">
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
                                    href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Order History
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <ul>
                                    <li class="submenu"><a class="history" href="accountsetting.php?status=all"
                                            >All</a></li>
                                    <li class="submenu"><a class="history" href="accountsetting.php?status=completed"
                                            >Completed</a></li>
                                    <li class="submenu"><a class="history" href="accountsetting.php?status=ongoing"
                                            >Ongoing</a></li>
                                    <li class="submenu "><a class="history" href="accountsetting.php?status=need"
                                            >Need to be Delivered</a></li>
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
                                    placeholder="<?php echo strval($profile['fullname']);?>" disabled autofocus="">
                            </td>
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
                            <td><input class="gender" type="checkbox" value="female" disabled <?php echo $female;?>>
                                Female
                                <br>
                                <input class="gender" type="checkbox" value="male" disabled <?php  echo $male;?>>
                                Male
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="subjudul">Alamat</td>
                            <script type="text/javascript">
                                var isiprovinsi = "<?php echo $fillalamat[0];?>";
                            </script>
                        </tr>
                        <tr>
                            <td>
                                <div class="tulisan">Provinsi</div>

                            </td>
                            <td><select name="provinsi" id="provinsi" class="form-control pendek" disabled>
                                    <option value=""></option>
                                    <option value="jawa-timur">Jawa Timur</option>
                                    <option value="jawa-tengah">Jawa Tengah</option>
                                    <option value="jawa-barat">Jawa Barat</option>
                                </select>
                                <script type="text/javascript">
                                    document.getElementById("provinsi").value = isiprovinsi;
                                </script>

                            </td>

                        </tr>
                        <tr>
                            <td>
                                <div class="tulisan">Kabupaten/Kota</div>
                            </td>
                            <td><select name="kabkota" id="kabkota" class="form-control pendek" disabled>
                                    <option><?php echo ucfirst($profile['kab_kota']);?></option>
                                </select>


                            </td>

                        </tr>

                        <tr>
                            <td>
                                <div class="tulisan">Kecamatan</div>
                            </td>
                            <td><select name="kecamatan" id="kecamatan" class="form-control pendek" disabled>
                                    <option><?php echo ucfirst($profile['kecamatan']);?></option>
                                </select>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <div class="tulisan">Kelurahan</div>
                            </td>
                            <td><select name="kelurahan" id="kelurahan" class="form-control pendek" disabled>
                                    <option><?php echo ucfirst($profile['kelurahan']);?></option>
                                </select>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <div class="tulisan">Kode Pos</div>
                            </td>
                            <td><input type="text" id="kodepos" class="form-control pendek"
                                    placeholder="<?php echo $profile['kode_pos'];?>" required="" disabled></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="tulisan">Alamat</div>
                            </td>
                            <td><input type="text" id="alamat" class="form-control panjang"
                                    placeholder="<?php echo $profile['alamat'];?>" required="" disabled></td>
                        </tr>
                    </table>

                </div>

            </div>
            <div class="subcatchangepass">
                <H2> Change Your Password </h2>
                <form method="post" id="passwordForm">
                    <input type="password" class="input-lg form-control" name="oldpass" id="oldpass"
                        placeholder="Current Password" required>
                    <br><br>
                    <input type="password" class="input-lg form-control" name="newpass" id="newpass"
                        placeholder="New Password" required>
                    <br><br>
                    <!-- <input type="password" class="input-lg form-control" name="password2" id="confirmpass"
                        placeholder="Repeat Password" onkeyup="confirmcheck()" required>
                    <br><br>
                    <div class="row">
                        <div class="col-sm2">
                            <span id="pwmatch" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span>
                            Passwords Match
                        </div>
                    </div> -->
                    <br><br>

                    <input type="submit" class="col-xs2 btn btn-primary btn-load btn-lg"
                        data-loading-text="Changing Password..." name="changepass" value="Change Password">
                </form>
            </div>

            <div class="subcatorderhistory" id="historyinfo">
                <h2><?php echo $title;?> Order History</h2>

                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <?php for($i=0; $i<=$orderhistory_count-1; $i++){
                        ?> <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading-<?php echo $i;?>">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapse-<?php echo $i;?>" aria-expanded="true"
                                    aria-controls="collapse-<?php echo $i;?>">
                                    Transaction ID : <?php echo $orderhistory[$i][0];?>
                                </a>
                            </h4>
                        </div>
                        <?php 
                            $cmd_orderdetail = "SELECT  pd.id_product,category_name, product_name, jumlah_product,harga_jual_satuan,total_harga
                            from transaction_detail td, transaction t, product p, product_detail pd, customer c,category ct
                            where ct.id_category = p.id_category and pd.id_product_detail = td.id_product_detail and p.id_product = pd.id_product and t.username = c.username and t.transaction_id = td.transaction_id and t.username = '".$_SESSION['username']."'
                            and t.transaction_id='".$orderhistory[$i][0]."'";
                            $orderdetail_result= mysqli_query($con,$cmd_orderdetail) or die(mysqli_error($con));
                            $orderdetail=mysqli_fetch_all($orderdetail_result);
                            $orderdetail_count=mysqli_num_rows($orderdetail_result);
                            if ($orderdetail_count>=1){
                                $subtotal=0;
                             for($a=1; $a<=$orderdetail_count; $a++){
                                 $price = intval($orderdetail[$a][5]);
                                 
                                 $subtotal = $subtotal + $price;
                         
                             }
                         }?>
                        <div id="collapse-<?php echo $i;?>" class="panel-collapse collapse in" role="tabpanel"
                            aria-labelledby="heading-<?php echo $i;?>">
                            <div class="panel-body">
                                <table class="alamat">
                                    <tr>
                                        <th>Alamat Pengiriman</th>
                                    </tr>
                                    <tr>
                                    <tr>
                                        <th> <?php echo $orderhistory[$i][1];?>
                                            <br></th>
                                    </tr>
                                    <td>
                                        <?php echo $orderhistory[$i][2];?>
                                        <br>
                                        <?php echo $orderhistory[$i][3];?>,
                                        <br>
                                        <?php echo $orderhistory[$i][4];?>, <?php echo $orderhistory[$i][5];?>,
                                        <?php echo $orderhistory[$i][6];?>,
                                        <br>
                                        <?php echo $orderhistory[$i][7];?>,ID,<?php echo $orderhistory[$i][8];?>
                                        <br>

                                        <br>
                                    </td>
                                    </tr>
                                </table>
                                <br>
                                <?php for($x=0; $x<=$orderdetail_count-1; $x++){?>
                                <table class="orderdetail">
                                    <tr>
                                        <td><img src="../assets/images/products/<?php echo $orderdetail[$x][0];?>.jpg"
                                                style="width:100px; height:100px;"></td>
                                        <td style="float:left;">
                                            <?php echo $orderdetail[$x][1];?><?php echo $orderdetail[$x][2];?><br> x
                                            <?php echo $orderdetail[$x][3];?></td>
                                        <td style="float:right;"> Rp.
                                            <?php 
								            $price = $orderdetail[$x][4];
								            echo number_format($price,2,",","."); 
                                     } ?></td>

                                    </tr>
                                </table>
                                <br><br>
                                <table class="totals">

                                    <tr>
                                        <td class="title"> Subtotal Untuk Produk </td>
                                        <td class="totalcontent"> Rp. <?php  
                                            echo number_format($subtotal,2,",","."); 
                                            ?> </td>
                                    </tr>
                                    <tr>
                                        <td class="title"> Pengiriman - <?php echo $orderhistory[$i][12];?> </td>
                                        <td class="totalcontent"> Rp. <?php  
                                            $ongkir = intval($orderhistory[$i][11]);
                                            echo number_format($ongkir,2,",","."); 
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="title"> TOTAL PESANAN </td>
                                        <td class="totalcontent totalprice"> Rp. <?php  
                                            $total = intval($orderhistory[$i][9]);
                                            echo number_format($total,2,",","."); 
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="title"> Metode Pembayaran </td>
                                        <td class="totalcontent"> <?php  echo $orderhistory[$i][13]; ?>
                                        </td>
                                    </tr>
                                </table>
                            <?php

                            if($review == 1){

                            }?>

                            </div>
                        </div>
                    </div>

                    <?php }?>

                </div>
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
                                unknown printer took a galley of type and scrambled it to make a type specimen
                                book.
                                It has survived not only five centuries, but also the leap into electronic
                                typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                with
                                the release of Letraset sheets containing Lorem Ipsum passages, and more
                                recently
                                with desktop publishing software like Aldus PageMaker including versions of
                                Lorem
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
                                unknown printer took a galley of type and scrambled it to make a type specimen
                                book.
                                It has survived not only five centuries, but also the leap into electronic
                                typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                with
                                the release of Letraset sheets containing Lorem Ipsum passages, and more
                                recently
                                with desktop publishing software like Aldus PageMaker including versions of
                                Lorem
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
                                unknown printer took a galley of type and scrambled it to make a type specimen
                                book.
                                It has survived not only five centuries, but also the leap into electronic
                                typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                with
                                the release of Letraset sheets containing Lorem Ipsum passages, and more
                                recently
                                with desktop publishing software like Aldus PageMaker including versions of
                                Lorem
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
                                unknown printer took a galley of type and scrambled it to make a type specimen
                                book.
                                It has survived not only five centuries, but also the leap into electronic
                                typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                with
                                the release of Letraset sheets containing Lorem Ipsum passages, and more
                                recently
                                with desktop publishing software like Aldus PageMaker including versions of
                                Lorem
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
                                unknown printer took a galley of type and scrambled it to make a type specimen
                                book.
                                It has survived not only five centuries, but also the leap into electronic
                                typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                with
                                the release of Letraset sheets containing Lorem Ipsum passages, and more
                                recently
                                with desktop publishing software like Aldus PageMaker including versions of
                                Lorem
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
                                unknown printer took a galley of type and scrambled it to make a type specimen
                                book.
                                It has survived not only five centuries, but also the leap into electronic
                                typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                with
                                the release of Letraset sheets containing Lorem Ipsum passages, and more
                                recently
                                with desktop publishing software like Aldus PageMaker including versions of
                                Lorem
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
                                unknown printer took a galley of type and scrambled it to make a type specimen
                                book.
                                It has survived not only five centuries, but also the leap into electronic
                                typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                with
                                the release of Letraset sheets containing Lorem Ipsum passages, and more
                                recently
                                with desktop publishing software like Aldus PageMaker including versions of
                                Lorem
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