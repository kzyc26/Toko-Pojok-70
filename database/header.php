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
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    User
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                            aria-labelledby="headingOne">
                            <div class="panel-body">
                                <a href="user.php">Login Details Pengguna</a>
                                <br>
                                <a href="alamat.php">Alamat User</a>
                                <br>
                                <a href="biodata.php">Biodata</a>
                                <br>
                                <a href="wishlist.php">Wishlist</a>
                                <br>
                                <a href="voucher.php">Voucher Customer</a>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Products
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <a href="accumulated.php">Customer Review Accumulated per Product</a>
                                <br>
                                <a href="customer_review.php">Individual Customer Review</a>
                                <br>
                                <a href="items_per_category.php">Items Per Category</a>
                                <br>
                                <a href="bestseller.php">Best Seller Products</a>
                                <br>
                                <a href="mostwanted.php">Most Wanted Products</a>
                                <br>
                                <a href="discount.php">Product dengan Diskon</a>

                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Transaction & Deliveries
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingThree">
                            <div class="panel-body">
                                <a href="invoice.php">Invoice per Hari</a>
                                <br>
                                <a href="detail_penjualan_perhari.php"> Detail Penjualan per Hari</a>
                                <br>
                                <a href="jumlah_penjualan_perbulan.php">Detail Penjualan per Bulan</a>
                                <br>
                                <a href="item_details_in_cart.php">Item Details in Cart</a>
                                <br>
                                <a href="orderhistory.php">User Order History</a>
                                <br>

                                <a href="oldpass.php">Frequently Used Ekspedisi</a>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- <a href="customer_subtotal.php">Customer Subtotal</a>
                <br> -->
                <!-- <a href="product_details.php">Product Details</a>
                <br> -->


                <!-- <a href="userdelivdetails.php" >User Delivery Details</a>
                <br> -->

            </div>

            <div class="col-md-8 result">
               