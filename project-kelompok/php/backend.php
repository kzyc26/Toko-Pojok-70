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
  $user=mysqli_fetch_all($user_result);
  $user_count = mysqli_num_rows($user_result);
  
  $cmd_accumulated="SELECT Id_product,ukuran,warna, avg(Star_rating) as `Rating` 
  from review r, product_detail p
  where r.id_product_detail = p.id_product_detail
  group by r.id_product_detail";
  $accumulated_result  = mysqli_query($con,$cmd_accumulated) or die(mysqli_error($con));
  $accumulated=mysqli_fetch_all($accumulated_result);
  $accumulated_count = mysqli_num_rows($accumulated_result);

  $cmd_customerreview="SELECT fullname, r.id_product_detail,star_rating, review
  from review r, transaction t, customer c
  where r.Id_transaction = t.transaction_id and c.username = t.username
  ";
  $customerreview_result  = mysqli_query($con,$cmd_customerreview) or die(mysqli_error($con));
  $customerreview=mysqli_fetch_all($customerreview_result);
  $customerreview_count = mysqli_num_rows($customerreview_result);


  $cmd_customer_subtotal="SELECT fullname,td.transaction_id, sum(total_harga) as `subtotal`
  from transaction t, transaction_detail td, customer c
  where c.username=t.username and td.transaction_id = t.transaction_id and t.payment_status = 0
  group by transaction_detail_id ";
  $customer_subtotal_result  = mysqli_query($con,$cmd_customer_subtotal) or die(mysqli_error($con));
  $customer_subtotal=mysqli_fetch_all($customer_subtotal_result);
  $customer_subtotal_count = mysqli_num_rows($customer_subtotal_result);

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

   
  $cmd_cart_detail="SELECT fullname ,td.transaction_id,p.id_product,ukuran,warna, jumlah_product,harga_jual_satuan,total_harga
  from customer c, transaction t, transaction_detail td, product_detail p
  where c.username=t.username and td.transaction_id=t.transaction_id and td.id_product_detail = p.id_product_detail";
  $cart_detail_result  = mysqli_query($con,$cmd_cart_detail) or die(mysqli_error($con));
  $cart_detail=mysqli_fetch_all($cart_detail_result);
  $cart_detail_count = mysqli_num_rows($cart_detail_result);


   
  $cmd_wishlist="SELECT fullname, pd.id_product, ukuran,warna, price
  from product_detail pd, customer c, wishlist w, product p 
  where pd.id_product_detail=w.Id_product_detail and c.username = w.username and p.id_product = pd.id_product";
  $wishlist_result  = mysqli_query($con,$cmd_wishlist) or die(mysqli_error($con));
  $wishlist=mysqli_fetch_all($wishlist_result);
  $wishlist_count = mysqli_num_rows($wishlist_result);
 
  $cmd_orderhistory="SELECT fullname,t.date, total_transaction
from customer c, transaction t
where t.username=c.username and payment_status <> 0";
  $orderhistory_result  = mysqli_query($con,$cmd_orderhistory) or die(mysqli_error($con));
  $orderhistory=mysqli_fetch_all($orderhistory_result);
  $orderhistory_count = mysqli_num_rows($orderhistory_result);

 
//   $cmd_userdelivdetails="";
//   $userdelivdetails_result  = mysqli_query($con,$cmd_userdelivdetails) or die(mysqli_error($con));
//   $userdelivdetails=mysqli_fetch_all($userdelivdetails_result);
//   $userdelivdetails_count = mysqli_num_rows($userdelivdetails_result);


  $cmd_alamat="SELECT username, provinsi, kab_kota,kecamatan,kelurahan,kode_pos,alamat
  from customer";
   $alamat_result  = mysqli_query($con,$cmd_alamat) or die(mysqli_error($con));
   $alamat=mysqli_fetch_all($alamat_result);
   $alamat_count = mysqli_num_rows($alamat_result);
   
   $cmd_biodata="SELECT fullname, telepon,jenis_kelamin
   from customer";
   $biodata_result  = mysqli_query($con,$cmd_biodata) or die(mysqli_error($con));
   $biodata=mysqli_fetch_all($biodata_result);
   $biodata_count = mysqli_num_rows($biodata_result);

   $cmd_bestseller="SELECT d.id_product,sum(jumlah_product) as`best seller`
   from product p, product_detail d, transaction_detail td,transaction t
   where td.id_product_detail=d.id_product_detail and d.id_product=p.id_product and t.transaction_id = td.transaction_id and t.payment_status =0
   group by td.id_product_detail
   order by `best seller`
   limit 5";
   $bestseller_result  = mysqli_query($con,$cmd_bestseller) or die(mysqli_error($con));
   $bestseller=mysqli_fetch_all($bestseller_result);
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
   $voucher=mysqli_fetch_all($voucher_result);
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
            <div class="col-md-8 result">
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
                        <td> <?php echo $user[$i-1][0];?></td>
                        <td> <?php echo $user[$i-1][1];?></td>
                    </tr>
                    <?php $i++; }
                         } ?>

                </table>
                <table class="accumulated">
                    <tr>
                        <th>ID Product</th>
                        <th> Ukuran </th>
                        <th>Warna</th>
                        <th>Star Rating</th>
                    </tr>
                    <?php 
                    $i=1;
                
                    if($accumulated_count>0){
                        while($i<$accumulated_count){?>
                    <tr>
                        <td><?php echo $accumulated[$i-1][0];?></td>
                        <td><?php echo $accumulated[$i-1][1];?></td>
                        <td><?php echo $accumulated[$i-1][2];?></td>
                        <td><?php echo $accumulated[$i-1][3];?></td>
                    </tr>
                    <?php   $i++;}
                     
                    }
                    ?>
                </table>
                <table class="customerreview">
                    <tr>
                        <th>Name</th>
                        <th> ID Product </th>
                        <th>Star Rating</th>
                        <th>Review</th>
                    </tr>
                    <?php 
                    $i=1;
                
                    if($customerreview_count>0){
                        while($i<$customerreview_count){?>
                    <tr>
                        <td><?php echo $customerreview[$i-1][0];?></td>
                        <td><?php echo $customerreview[$i-1][1];?></td>
                        <td><?php echo $customerreview[$i-1][2];?></td>
                        <td><?php echo $customerreview[$i-1][3];?></td>
                    </tr>
                    <?php   $i++;}
                     
                    }
                    ?>
                </table>
                <table class="customer_subtotal">
                    <tr>
                        <th>Name</th>
                        <th> ID transaction </th>
                        <th>Subtotal</th>
                    </tr>
                    <?php 
                    $i=1;
                
                    if($customer_subtotal_count>0){
                        while($i<$customer_subtotal_count){?>
                    <tr>
                        <td><?php echo $customer_subtotal[$i-1][0];?></td>
                        <td><?php echo $customer_subtotal[$i-1][1];?></td>
                        <td><?php echo $customer_subtotal[$i-1][2];?></td>
                    </tr>
                    <?php   $i++;}
                     
                    }
                    ?>
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
                        <td><?php echo $product_details[$i-1][0];?></td>
                        <td><?php echo $product_details[$i-1][1];?></td>
                        <td><?php echo $product_details[$i-1][2];?></td>
                        <td><?php echo $product_details[$i-1][3];?></td>
                    </tr>
                    <?php   $i++;}
                     
                    }
                    ?>

                </table>
                <table class="itemcategory">
                    <tr>
                        <th> Product ID </th>
                        <th> Category </th>
                    </tr>
                    <?php 
                    $i=1;
                
                    if($items_category_count>0){
                        while($i<$items_category_count){?>
                    <tr>
                        <td><?php echo $items_category[$i-1][0];?></td>
                        <td><?php echo $items_category[$i-1][1];?></td>
                    </tr>
                    <?php   $i++;}
                     
                    }
                    ?>
                </table>
                <table class="cartdetails">
                    <tr>
                        <th>Name</th>
                        <th> Transaction Id </th>
                        <th> Product ID </th>
                        <th> Ukuran </th>
                        <th> Warna </th>
                        <th> Jumlah </th>
                        <th> Harga </th>
                        <th> Total </th>
                    </tr>
                    <?php 
                    $i=1;
                
                    if($cart_detail_count>0){
                        while($i<$cart_detail_count){?>
                    <tr>
                        <td><?php echo $cart_detail[$i-1][0];?></td>
                        <td><?php echo $cart_detail[$i-1][1];?></td>
                        <td><?php echo $cart_detail[$i-1][2];?></td>
                        <td><?php echo $cart_detail[$i-1][3];?></td>
                        <td><?php echo $cart_detail[$i-1][4];?></td>
                        <td><?php echo $cart_detail[$i-1][5];?></td>
                        <td><?php echo $cart_detail[$i-1][6];?></td>
                        <td><?php echo $cart_detail[$i-1][7];?></td>
                    </tr>
                    <?php   $i++;}
                     
                    }
                    ?>
                </table>
                <table class="Wishlist">
                    <tr>
                        <th>Name</th>
                        <th>ID Product</th>
                        <th> Ukuran </th>
                        <th>Warna</th>
                    </tr>
                    <?php 
                    $i=1;
                
                    if($wishlist_count>0){
                        while($i<$wishlist_count){?>
                    <tr>
                        <td><?php echo $wishlist[$i-1][0];?></td>
                        <td><?php echo $wishlist[$i-1][1];?></td>
                        <td><?php echo $wishlist[$i-1][2];?></td>
                        <td><?php echo $wishlist[$i-1][3];?></td>
                    </tr>
                    <?php   $i++;}
                     
                    }
                    ?>
                </table>
                <table class="vouchercustomer">
                    <tr>
                        <th>Username</th>
                        <th>Voucher</th>
                    </tr>
                    <?php 
                        $i=1;
                        if ($voucher_count>0){
                            while($i <= $voucher_count){ ?>
                    <tr>
                        <td> <?php echo $voucher[$i-1][0];?></td>
                        <td> <?php echo $voucher[$i-1][1];?></td>
                    </tr>
                    <?php 
                    $i++; }
                         }
                        ?>
                </table>
                <table class="orderhistory">
                    <tr>
                        <th> Name </th>
                        <th> Date </th>
                        <th> Total </th>
                    </tr>
                    <?php
                    $i=1;
                    if($orderhistory_count>0){
                    while($i<=$orderhistory_count){?>
                    <tr>
                        <td><?php echo $orderhistory[$i-1][0];?></td>
                        <td><?php echo $orderhistory[$i-1][1];?></td>
                        <td><?php echo $orderhistory[$i-1][2];?></td>
                    </tr>
                    <?php 
                    $i++;
                    }
                    };
                
                     ?>
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
                        <td><?php echo $alamat[$i-1][0];?></td>
                        <td><?php echo $alamat[$i-1][1];?></td>
                        <td><?php echo $alamat[$i-1][2];?></td>
                        <td><?php echo $alamat[$i-1][3];?></td>
                        <td><?php echo $alamat[$i-1][4];?></td>
                        <td><?php echo $alamat[$i-1][5];?></td>
                        <td><?php echo $alamat[$i-1][6];?></td>
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
                        <td><?php echo $biodata[$i-1][0];?></td>
                        <td><?php echo $biodata[$i-1][1];?></td>
                        <td><?php echo $biodata[$i-1][2];?></td>
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
                        <td> <?php echo $user[$i-1][0];?></td>
                        <td> <?php echo $user[$i-1][1];?></td>
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
                        <td> <?php echo $bestseller[$i-1][0];?></td>
                        <td> <?php echo $bestseller[$i-1][1];?></td>
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