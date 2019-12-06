<!DOCTYPE html>
<?php
    session_start();
?>
<html>

<head>
    <title> Report </title>
    <script src="../assets/bootstrap-3.4.1-dist/js/jquery-1.12.4.min.js"></script>
</head>

<body>
    <?php
  require_once('db.php');
  $cmd_user="SELECT username, password FROM customer";
  $user_result  = mysqli_query($con,$cmd_user) or die(mysqli_error($con));
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

  
  
  $cmd_category = "SELECT id_category,category_name from category";
  $category_result  = mysqli_query($con,$cmd_category) or die(mysqli_error($con));
  $category=mysqli_fetch_all($category_result);
  $category_count = mysqli_num_rows($category_result);

   
 
   
  $cmd_wishlist="SELECT fullname, pd.id_product, ukuran,warna, price
  from product_detail pd, customer c, wishlist w, product p 
  where pd.id_product_detail=w.Id_product_detail and c.username = w.username and p.id_product = pd.id_product";
  $wishlist_result  = mysqli_query($con,$cmd_wishlist) or die(mysqli_error($con));
  $wishlist=mysqli_fetch_all($wishlist_result);
  $wishlist_count = mysqli_num_rows($wishlist_result);
 


 
  $cmd_userdelivdetails="SELECT * FROM delivery_details;";
  $userdelivdetails_result  = mysqli_query($con,$cmd_userdelivdetails) or die(mysqli_error($con));
  $userdelivdetails=mysqli_fetch_all($userdelivdetails_result);
  $userdelivdetails_count = mysqli_num_rows($userdelivdetails_result);


   
   

  

  

   if (isset($_POST['search'])){
    $hasil = $_POST['keyword'];
      $query = "SELECT * FROM product WHERE Product_name LIKE '%$hasil%'";
      $sql_prod = mysqli_query($con, $query) or die(mysqli_error($con));
      $hitung_prod = mysqli_num_rows($sql_prod);
      $prod = mysqli_fetch_all($sql_prod);
  
      $query = "SELECT * FROM category WHERE category_name LIKE '%$hasil%'";
      $sql_cat = mysqli_query($con, $query) or die(mysqli_error($con));
      $hitung_cat = mysqli_num_rows($sql_cat);
      $cat = mysqli_fetch_all($sql_cat);
      if ($hitung_prod !== 0){ 
          ?>
          
    <form action="" method="post">
    <br/><br/>
        <div class="search">
            <input type="text" name="keyword" class="form-control" placeholder="Search" autofocus autocomplete="off">
          </div>
          <button type="submit" name="search" class="btn btn-default" onclick="showsearchresult()"><span class="glyphicon glyphicon-search"></span></button>
    </form>
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
            <div class="col-md-9 result">
                <h2>Result</h2>
                <table class="hasil_search">
                <tr>
                    <th>Id Product</th>
                    <th>Product Name</th>
                    <th>Price</th>
                </tr>
                <?php                        
                    $i=0;
                    if ($hitung_prod>0){while($i <= $hitung_prod-1){ ?>
                <tr>
                    <td> <?php 
                    echo $prod[$i][0];
                    ?></td>
                    <td> <?php 
                    echo $prod[$i][3];
                    ?></td>
                    <td> <?php 
                    echo $prod[$i][6];
                    ?></td>
                </tr>
                <?php 
                $i++; }
                     } 
                     ?>

            </table>
            <?php
  } elseif ($hitung_cat !== 0){ 
      ?>
    <table class="hasil_search">
        <tr>
            <th>Id Category</th>
            <th>Category Name</th>
            <th>Gender</th>
        </tr>
        <?php                        
            $i=0;
            if ($hitung_cat>0){while($i <= $hitung_cat-1){ 
                ?>
        <tr>
            <td> <?php 
            echo $cat[$i][0];
            ?></td>
            <td> <?php 
            echo $cat[$i][1];
            ?></td>
            <td> <?php 
            echo $cat[$i][2];
            ?></td>
        </tr>
        <?php 
        $i++; }
             } 
             ?>

    </table> 
    <?php
  } else {
    
    echo '<script> alert("Sorry, keyword does not match."); </script>';
  }
}
?>
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
                <div class="itemcategory" id="itemcategory">
                    <p> Select Category: </p>
                    <select name="category" id="listcategory" onchange="categorychange()">
                        <option value=""></option>
                        <?php for($i=0; $i<=$category_count-1; $i++){?> 
                        <option value="<?php echo $category[$i][0];?>"><?php echo $category[$i][1];?></option>
                        <?php }?>
                    </select>
                    <table id="listitem">

                    </table>
                </div>

            
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
            
               
              
               
                <table class="userdelivdetails">
                    <tr>
                        <th>Transaction ID</th>
                        <th>Delivery ID</th>
                        <th>Alamat</th>
                        <th>Kode Pos</th>
                        <th>Kelurahan</th>
                        <th>Kecamatan</th>
                        <th>Kabupaten/Kota</th>
                        <th>Provinsi</th>
                    </tr>
                    <?php 
                            $i=1;
                            if ($userdelivdetails_count>0){
                                while($i <= $userdelivdetails_count){ ?>
                    <tr>
                        <td> <?php echo $userdelivdetails[$i-1][0];?></td>
                        <td> <?php echo $userdelivdetails[$i-1][1];?></td>
                        <td> <?php echo $userdelivdetails[$i-1][2];?></td>
                        <td> <?php echo $userdelivdetails[$i-1][3];?></td>
                        <td> <?php echo $userdelivdetails[$i-1][4];?></td>
                        <td> <?php echo $userdelivdetails[$i-1][5];?></td>
                        <td> <?php echo $userdelivdetails[$i-1][6];?></td>
                        <td> <?php echo $userdelivdetails[$i-1][7];?></td>
                    </tr>
                    <?php 
                        $i++; }
                            }
                            ?>
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
