<!DOCTYPE html>
<?php
    session_start();
    require_once('db.php');
?>
<html>

<head>
    <title> Report </title>
    <script src="assets/bootstrap-3.4.1-dist/js/jquery-1.12.4.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3 report">
                <h2>Report</h2>
                <a href="user.php">Login Details Pengguna</a>
                <br>
                <a href="accumulated.php">Customer Review Accumulated per Product</a>
                <br>
                <a href="customer_review.php">Individual Customer Review</a>
                <br>
                <a href="customer_subtotal.php">Customer Subtotal</a>
                <br>
                <!-- <a href="product_details.php">Product Details</a>
                <br> -->
                <a href="items_per_category.php">Items Per Category</a>
                <br>
                <a href="item_details_in_cart.php">Item Details in Cart</a>
                <br>
                <a href="wishlist.php">Wishlist</a>
                <br>
                <a href="invoice.php">Invoice per Hari</a>
                <br>
                <a href="jumlah_penjualan_perhari.php">Jumlah Penjualan per Hari</a>
                <br>
                <a href="jumlah_penjualan_perbulan.php">Jumlah Penjualan per Bulan</a>
                <br>
                <a href="voucher.php" >Voucher Customer</a>
                <br>
                <a href="orderhistory.php" >User Order History</a>
                <br>
                <a href="alamat.php">Alamat User</a>
                <br>
                <a href="biodata.php" >Biodata</a>
                <br>
                <a href="oldpass.php" >Frequently Used Ekspedisi</a>
                <br>
                <!-- <a href="userdelivdetails.php" >User Delivery Details</a>
                <br> -->
                <a href="bestseller.php">Best Seller Products</a>
                <br>
                <a href="mostwanted.php">Most Wanted Products</a>
                <br>
                <a href="discount.php" >Product dengan Diskon</a>
            </div>
            <div class="seperator">
            </div>
            <div class="col-md-8 result">
                <h2>Result</h2>