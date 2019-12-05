<!DOCTYPE html>
<?php
    session_start();
    require_once('db.php');
?>
<html>

<head>
    <title> Report </title>
    <script src="../assets/bootstrap-3.4.1-dist/js/jquery-1.12.4.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3 report">
                <h2>Report</h2>
                <a href="user.php">Login Details Pengguna</a>
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
            <div class="seperator">
            </div>
            <div class="col-md-9 result">
                <h2>Result</h2>