<!DOCTYPE html>
<?php
    session_start();
?>
<html>

<head>
    <title> Report </title>

</head>

<body>
    <?php
  require_once('db.php');
  $cmd_user="SELECT username, password FROM customer";
  $user_result	= mysqli_query($con,$cmd_user) or die(mysqli_error($con));
  $user=mysqli_fetch_assoc($user_result);
  $user_count = mysqli_num_rows($user_result);

  $cmd_product_details="SELECT d.Id_product,ukuran,warna,jumlah 
                        from product_detail d, product p
                        where p.id_product = d.id_product ";
  $product_details_result  = mysqli_query($con,$cmd_product_details) or die(mysqli_error($con));
  $product_details=mysqli_fetch_all($product_details_result);
  $product_details_count = mysqli_num_rows($product_details_result);

  $Cmd_items_category ="SELECT id_product,category_name
  from product p,category c
  where p.Id_category = c.id_category";
  $items_category_result  = mysqli_query($con,$Cmd_items_category) or die(mysqli_error($con));
  $items_category=mysqli_fetch_all($items_category_result);
  $items_category_count = mysqli_num_rows($items_category_result);

  $cmd_alamat="SELECT username, provinsi, kab_kota,kecamatan,kelurahan,kode_pos,alamat
  from customer";
   $alamat_result  = mysqli_query($con,$cmd_alamat) or die(mysqli_error($con));
   $alamat=mysqli_fetch_assoc($alamat_result);
   $alamat_count = mysqli_num_rows($alamat_result);
   
   $cmd_biodata="SELECT fullname, telepon,jenis_kelamin
   from customer";
   $biodata_result  = mysqli_query($con,$cmd_biodata) or die(mysqli_error($con));
   $biodata=mysqli_fetch_assoc($biodata_result);
   $biodata_count = mysqli_num_rows($biodata_result);

   $cmd_bestseller="SELECT d.id_product,sum(jumlah_product) as`best seller`
   from product p, product_detail d, transaction_detail td,transaction t
   where td.id_product_detail=d.id_product_detail and d.id_product=p.id_product and t.transaction_id = td.transaction_id and t.payment_status =0
   group by td.id_product_detail
   order by `best seller`
   limit 5";
   $bestseller_result  = mysqli_query($con,$cmd_bestseller) or die(mysqli_error($con));
   $bestseller=mysqli_fetch_assoc($bestseller_result);
   $bestseller_count = mysqli_num_rows($bestseller_result);
  
   $cmd_discount="SELECT id_product, if(Discount_price=null,Discount_price,'Normal Price') as `Discount`
   from product";
   $discount_result  = mysqli_query($con,$cmd_discount) or die(mysqli_error($con));
   $discount=mysqli_fetch_all($discount_result);
   $discount_count = mysqli_num_rows($discount_result);
   
   $cmd_voucher="SELECT uv.username , voucher_name
   from user_voucher uv,voucher v, customer c
   where uv.username = c.username and uv.id_voucher = v.id_voucher";
   $voucher_result  = mysqli_query($con,$cmd_voucher) or die(mysqli_error($con));
   $voucher=mysqli_fetch_assoc($voucher_result);
   $voucher_count = mysqli_num_rows($voucher_result);

    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-3 report">
                <h2>Report</h2>
                <a href="#" onclick="showuser()">Login Details Pengguna</a>
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
                <a href="#" onclick="showsubtotal()">Subtotal</a>
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
                <h2>Result</h2>
                <table class="user">
                    <tr>
                        <th>Username</th>
                        <th>Password</th>
                    </tr>
                    <?php 
                        $count = intval($user_count);
                        $i=1;
                        if ($user_count>0){while($i <= $user_count){ ?>
                    <tr>
                        <td> <?php echo $user['username'];?></td>
                        <td> <?php echo $user['password'];?></td>
                    </tr>
                    <?php $i++; }
                         } ?>

                </table>
                <table class="accumulated">
                </table>
                <table class="customerreview">
                </table>
                <table class="customer_subtotal">
                </table>
                <table class="productdetails">
                    <tr>
                        <th> ID Product </th>
                        <th> Ukuran</th>
                        <th> Warna </th>
                        <th> Jumlah</th>
                    </tr>
                    <?php 
                    $i=1;
                
                    if($product_details_count>0){
                        while($i<$product_details_count){?>
                    <tr>
                        <td><?php echo $product_details[$i][0];?></td>
                        <td><?php echo $product_details[$i][1];?></td>
                        <td><?php echo $product_details[$i][2];?></td>
                        <td><?php echo $product_details[$i][3];?></td>
                    </tr>
                    <?php   $i++;}
                     
                    }
                    ?>
                    <tr>

                    </tr>
                </table>
                <table class="itemcategory">
                
                </table>
                <table class="cartdetails">
                </table>
                <table class="SubTotal">
                </table>
                <table class="Wishlist">
                </table>
                <table class="vouchercustomer">
                    <tr>
                        <th>Username</th>
                        <th>Voucher</th>
                    </tr>
                    <?php 
                        $i=1;
                        if ($bestseller_count>0){
                            while($i <= $bestseller_count){ ?>
                    <tr>
                        <td> <?php echo $bestseller['id_product'];?></td>
                        <td> <?php echo $bestseller['best seller'];?></td>
                    </tr>
                    <?php 
                    $i++; }
                         }
                        ?>
                </table>
                <table class="orderhistory">
                </table>
                <table class="alamat">
                    <tr>
                        <th> Username </th>
                        <th> Provinsi </th>
                        <th> Kabupaten/Kota </th>
                        <th> Kecamatan </th>
                        <th> Kelurahan </th>
                        <th> Kode Pos </th>
                        <th> Alamat </th>
                    </tr>
                    <?php
                     $i=1;
                    if ($alamat_count>0){
                    while ($i<=$alamat_count){?>
                    <tr>
                        <td><?php echo $alamat['username'];?></td>
                        <td><?php echo $alamat['provinsi'];?></td>
                        <td><?php echo $alamat['kab_kota'];?></td>
                        <td><?php echo $alamat['kecamatan'];?></td>
                        <td><?php echo $alamat['kelurahan'];?></td>
                        <td><?php echo $alamat['kode_pos'];?></td>
                        <td><?php echo $alamat['alamat'];?></td>
                    </tr>
                    <?php 
                  $i++;
                    }
                    }
                    ?>
                </table>
                <table class="biodata">
                    <tr>
                        <th> Nama Lengkap</th>
                        <th> Nomor Telepon</th>
                        <th> Jenis Kelamin</th>
                    </tr>
                    <?php
                    $i=1;
                    if($biodata_count>0){
                    while($i<=$biodata_count){?>
                    <tr>
                        <td><?php echo $biodata['fullname'];?></td>
                        <td><?php echo $biodata['telepon'];?></td>
                        <td><?php echo $biodata['jenis_kelamin'];?></td>
                    </tr>
                    <?php 
                    $i++;
                    }
                    };
                
                     ?>
                </table>
                <table class="oldpassword">
                    <tr>
                        <th>Username</th>
                        <th>Old Password</th>
                    </tr>
                    <?php 
                        $count = intval($user_count);
                        $i=1;
                        if ($user_count>0){while($i <= $user_count){ ?>
                    <tr>
                        <td> <?php echo $user['username'];?></td>
                        <td> <?php echo $user['password'];?></td>
                    </tr>
                    <?php $i++; }
                         } ?>
                </table>
                <table class="userdelivdetails">
                
                </table>
                <table class="bestseller">
                    <tr>
                        <th>Product ID</th>
                        <th>Jumlah Terjual</th>
                    </tr>
                    <?php 
                        $i=1;
                        if ($bestseller_count>0){
                            while($i <= $bestseller_count){ ?>
                    <tr>
                        <td> <?php echo $bestseller['id_product'];?></td>
                        <td> <?php echo $bestseller['best seller'];?></td>
                    </tr>
                    <?php 
                    $i++; }
                         }
                        ?>
                </table>
                <table class="Discount">

                    <tr>
                        <th>Product ID</th>
                        <th>Discount Price</th>
                    </tr>
                    <?php 
                        $i=1;
                        if ($discount_count>0){
                            while($i <= $discount_count){ ?>
                    <tr>
                        <td> <?php echo $discount[$i-1][0];?></td>
                        <td> <?php echo $discount[$i-1][1];?></td>
                    </tr>
                    <?php $i++; }
                         }; ?>

                </table>
            </div>
        </div>
    </div>


    <link href="../css/backend.css" rel="stylesheet">
    <script src="../assets/bootstrap-3.4.1-dist/js/bootstrap.js"></script>
    <link href="../assets/bootstrap-3.4.1-dist/css/bootstrap.css" rel="stylesheet">
    <script src="../js/backend.js"></script>
</body>

</html>