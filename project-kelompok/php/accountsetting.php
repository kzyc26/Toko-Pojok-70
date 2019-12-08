<?php
require_once('db.php');
session_start();
$g = $_GET;
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


$cmd_profile ="SELECT fullname, telepon,jenis_kelamin,provinsi, kab_kota,kecamatan,kelurahan,kode_pos,alamat
from customer where username='".$_SESSION['username']."'";
$profile_result= mysqli_query($con,$cmd_profile) or die(mysqli_error($con));
$profile=mysqli_fetch_assoc($profile_result);
$_SESSION['prevpage'] = "Account";
require_once('navbar.php');
?>

<body>
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
                                        <li class="submenu"><<a class="profile" data-profile="profile">Profile</a></li>
                                        <li class="submenu"><a class="profile" data-profile="password">Change Password</a></li>
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
                                        <li class="submenu"><a class="history" data-status="all">All</a></li>
                                        <li class="submenu "><a class="history" data-status="need">Need to be Delivered</a></li>
                                        <li class="submenu"><a class="history" data-status="ongoing">Ongoing</a></li>
                                        <li class="submenu"><a class="history" data-status="completed">Completed</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"
                                        data-notif="notif">
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

            </div>

            <br><br>

        </div>
    </div>
    <?php require_once('footer.php'); ?>
    <link href="../css/accountsetting.css" rel="stylesheet">
    <script src="../js/accountsetting.js"></script>
</body>

</html>

