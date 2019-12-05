<!DOCTYPE html>
<?php
    session_start();
?>
<html>

<head>
    <title> Report </title>
    <script src='../assets/bootstrap-3.4.1-dist/js/jquery-1.12.4.min.js'></script>
</head>

<body>

<form action="" method="post">
    <br/><br/>
    <div class="search">
        <input type="text" name="keyword" class="form-control" placeholder="Search" autofocus autocomplete="off">
    </div>
        <button type="submit" name="search" class="btn btn-default" onclick="showsearchresult()"><span class="glyphicon glyphicon-search"></span></button>
</form>
<div class="col-md-3 report">
                <h2>Report</h2>
                <a href="#" class="isi" data-query = "SELECT username, password FROM customer">Login Details Pengguna</a>
                <br>
                <a href="#" onclick="showaccumulated()">Customer Review Accumulated per Product</a>
                <br>
                <a href="#" onclick="showreview()">Individual Customer Review</a>
                <br>
                <a href="#" onclick="showcustsubtotal()">Customer Subtotal</a>
                <br>
                <a href="#" onclick="showproductdetails()">Product Details</a>
                <br>
                <a href="#" onclick="showitemscategory()">Items Per Category</a>
                <br>
                <a href="#" onclick="showcartdetails()">Item Details in Cart</a>
                <br>

                <a href="#" onclick="showwishlist()">Wishlist</a>
                <br>
                <a href="#" onclick="showvoucher()">Voucher Customer</a>
                <br>
                <a href="#" onclick="showorderhistory()">User Order History</a>
                <br>
                <a href="#" onclick="showalamat()">Alamat User</a>
                <br>
                <a href="#" onclick="showbiodata()">Biodata</a>
                <br>
                <a href="#" onclick="showoldpass()">Old Password</a>
                <br>
                <a href="#" onclick="showuserdeliverydetails()">User Delivery Details</a>
                <br>
                <a href="#" onclick="showbestseller()">Best Seller Products</a>
                <br>
                <a href="#" onclick="showdiscount()">Product dengan Diskon</a>
            </div>
            <div class="col-md-9 result">                
                <div id="hasil">

                </div>
            </div>         

    <link href="../css/backend.css" rel="stylesheet">
    <script src="../assets/bootstrap-3.4.1-dist/js/bootstrap.js"></script>
    <link href="../assets/bootstrap-3.4.1-dist/css/bootstrap.css" rel="stylesheet">
    <script src="../js/backend-ajax.js"></script>
</body>

</html>