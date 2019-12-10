<?php
// ini_set('memory_limit', '-1');
session_start();
if(isset($_POST['checkout'])){
    header("location: check-out.php");
}
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
      
  require_once('db.php');
    if (isset($_GET["id_category"]) && !isset($_GET["gender"])){
      $category = strtolower($_GET["id_category"]);
      $cmd_extra = "AND lower(p.id_category)='".$category."'";
      $cmd_category_name ="SELECT category_name FROM category WHERE id_category = '".$category."'";
      $category_name_result	= mysqli_query($con,$cmd_category_name) or die(mysqli_error($con));
      $category_name = mysqli_fetch_row($category_name_result);
    } elseif (isset($_GET["gender"]) && !isset($_GET["id_category"]) ){
        $category = strtolower($_GET["gender"]);
        $cmd_extra = "AND lower(Gender)='".$category."'";  
        $cmd_category_name ="SELECT if(gender='F','All Girls Product','All Boys Product') as `kelamin` FROM category WHERE Gender= '".$category."'";
      $category_name_result	= mysqli_query($con,$cmd_category_name) or die(mysqli_error($con));
      $category_name = mysqli_fetch_row($category_name_result);
    }
    else{
        $category=null;
      $cmd_extra = "";
    }
  
	$cmd = "SELECT id_product, product_name, p.id_category, Price
  FROM  product p, category c
 WHERE p.id_category = c.id_category  $cmd_extra
 ORDER BY p.id_category";
 

    
    $all_result 	= mysqli_query($con,$cmd) or die(mysqli_error($con));
    $count_all_item = mysqli_num_rows($all_result);
    
    if(isset($_SESSION['baris'])){
        $count_all_item = $_SESSION['baris'];
    }
    
	$max_item 		= 9; //Max item in one page
	$page 			= isset($_GET['page'])? (int)$_GET["page"]:1; //contoh IF INLINE
	//echo $page;
	$start 			= ($page>1) ? (($page * $max_item) - $max_item) : 0; //contoh IF INLINE
	//echo $start;
	
	$cmd 			= $cmd." LIMIT $start, $max_item";
	//echo $cmd;
	$limit_result 	= mysqli_query($con,$cmd) or die(mysqli_error($con));

	$count_pages 	= ceil($count_all_item / $max_item); 
 
  
	$products = null;
   if ($count_all_item >= 1){
    if (isset($_SESSION['baris'])){
        $barang_display = $_SESSION['hasil_search'];
        $row = $_SESSION['baris'];
    } else{
        $barang_display = mysqli_fetch_all($limit_result);
        $row = mysqli_num_rows($limit_result);
    }		
}     
$_SESSION['prevpage']="Products";
require_once('navbar.php');
?>
<div class="content">
    <div class="categories">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                            Boy's Outift
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                        <ul>
                            <li><a href="products.php?gender=M">All Boy's Collection</a></li>
                            <li><a href="products.php?id_category=st04">Setelan Panjang</a></li>
                            <li><a href="products.php?id_category=st03">Setelan Pendek</a></li>
                            <li><a href="products.php?id_category=ks02">Kaos</a></li>
                            <li><a href="products.php?id_category=sp03">Sneakers</a></li>
                            <li><a href="products.php?id_category=sp04">Sepatu Sandal</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                            href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Girl's Outfit
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        <ul>
                            <li><a href="products.php?gender=F">All Girl's Collection</a></li>
                            <li><a href="products.php?id_category=ds02">Dress Lengan Panjang</a></li>
                            <li><a href="products.php?id_category=ds01">Dress Lengan Pendek</a></li>
                            <li><a href="products.php?id_category=st02">Setelan Lengan Panjang</a></li>
                            <li><a href="products.php?id_category=st01">Setelan Lengan Pendek</a></li>
                            <li><a href="products.php?id_category=sp01">Sneakers</a></li>
                            <li><a href="products.php?id_category=sp02">Sepatu Sandal</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="Categorytitle">
            <?php if ($category==null){ if (isset($_SESSION['baris'])) {
                ?>
            <h1> <?php echo 'Search Result for "'.$_SESSION['keyword'].'"';?></h1>
            <?php
            unset($_SESSION['hasil_search']);
            unset($_SESSION['baris']);
            }else{?>
            <h1> All Products </h1>
            <?php }  
            }           
        else { ?> <h1> <?php echo $category_name[0];?> </h1><?php }?>
        </div>
        <div class='row productsimg'>
            <?php 
            if ($count_all_item>0){
                $i=0;
					while($i < $row){
            $id = $barang_display[$i][0];          
				?>
            <div class="product-thumbnail">
                <img src='../assets/images/Products/<?php echo $id; ?>.jpg' class='img-responsive object-fit'
                    style="height:200px;" />
                <h5><?php echo $barang_display[$i][1]; ?></h5>
                <p name="harga">
                    Rp.
                    <?php 
								$price = $barang_display[$i][3];
								echo number_format($price,2,",","."); 
							?>
                </p>
                <div class="space-ten"></div>
                <div class="space-ten"></div>
                <div class="btn-ground text-center">

                    <label class="prod_id"> <?php echo $id;?> </label>
                    <?php 
                    $query = "SELECT ukuran FROM `product_detail` where id_product='$id'";
                    $sql = mysqli_query($con, $query);
                    $size_result= mysqli_fetch_array($sql);
                    ?>
                    <button type="button" class="btn btn-primary btnview " data-toggle="modal" data-target="#view"
                        data-id="<?php echo $id;?>"></i>
                        Buy</button>

                    <div class="space-ten"></div>


                </div>
                <div class="space-ten"></div>
            </div>
            <?php $i++;} } else { ?>
            <h2 class="warning"> Product Not Available </h2> <?php }
          ?>
        </div>
        <div class="modal fade product_view" id="view">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <a href="#" data-dismiss="modal" class="class pull-right"><span
                                class="glyphicon glyphicon-remove"></span></a>
                        <h3 class="modal-title">Product Details</h3>
                    </div>
                    <div id="contentview" class="modal-body">

                    </div>
                </div>
            </div>
        </div>

    </div>
 

    <div class='row text-center'>
        <div class="btn-group">
            <?php  if($category==null){
            if ($page>1){
                $prev_page = $page-1;
                //echo "Prev: ".$prev_page;
            ?>
            <a href='products.php?page=<?php echo $prev_page; ?>' class="btn btn-default" title='Previous'>
                <i class='glyphicon glyphicon-chevron-left'></i>
                Previous
            </a>
            <?php } 
            for ($i=1; $i<=$count_pages; $i++){
                $flag_class = "";
                if ($page==$i){
                    $flag_class = "active";
                }
                if($i==1){
                    echo "<a href='products.php?&page=$i' class='btn btn-default $flag_class' title='First'>$i</a>";
                } else if($i==$count_pages) {
                    echo "<a href='products.php?&page=$i' class='btn btn-default $flag_class' title='Last'>$i</a>";
                } else {
                    echo "<a href='products.php?page=$i' class='btn btn-default $flag_class' title='Page $i'>$i</a>";
                }
            }
     
            if ($page<$count_pages){
                $next_page = $page+1;
                //echo "Next: ".$next_page;
                echo "<a href='products.php?page=$next_page' class='btn btn-default' title='Next'>
                            Next
                            <i class='glyphicon glyphicon-chevron-right'></i>
                        </a>";
            }
        

            }
            elseif(isset($_GET["gender"]) && !isset($_GET["id_category"])){
                if ($page>1){
                    $prev_page = $page-1;
                    //echo "Prev: ".$prev_page;
            ?>
            <a href='products.php?gender=<?php echo $category; ?>&page=<?php echo $prev_page; ?>'
                class="btn btn-default" title='Previous'>
                <i class='glyphicon glyphicon-chevron-left'></i>
                Previous
            </a>
            <?php } 
                for ($i=1; $i<=$count_pages; $i++){
                    $flag_class = "";
                    if ($page==$i){
                        $flag_class = "active";
                    }
                    if($i==1){
                        echo "<a href='products.php?gender=$category&page=$i' class='btn btn-default $flag_class' title='First'>$i</a>";
                    } else if($i==$count_pages) {
                        echo "<a href='products.php?gender=$category&page=$i' class='btn btn-default $flag_class' title='Last'>$i</a>";
                    } else {
                        echo "<a href='products.php?gender=$category&page=$i' class='btn btn-default $flag_class' title='Page $i'>$i</a>";
                    }
                }
                if ($page<$count_pages){
                    $next_page = $page+1;
                    //echo "Next: ".$next_page;
                    echo "<a href='products.php?gender=$category&page=$next_page' class='btn btn-default' title='Next'>
                                Next
                                <i class='glyphicon glyphicon-chevron-right'></i>
                            </a>";
                }   
            }
            elseif (!isset($_GET["gender"]) && isset($_GET["id_category"])){
            if ($page>1){
                $prev_page = $page-1;
                //echo "Prev: ".$prev_page;
        ?>
            <a href='products.php?id_category=<?php echo $category; ?>&page=<?php echo $prev_page; ?>'
                class="btn btn-default" title='Previous'>
                <i class='glyphicon glyphicon-chevron-left'></i>
                Previous
            </a>
            <?php } 
            for ($i=1; $i<=$count_pages; $i++){
                $flag_class = "";
                if ($page==$i){
                    $flag_class = "active";
                }
                if($i==1){
                    echo "<a href='products.php?id_category=$category&page=$i' class='btn btn-default $flag_class' title='First'>$i</a>";
                } else if($i==$count_pages) {
                    echo "<a href='products.php?id_category=$category&page=$i' class='btn btn-default $flag_class' title='Last'>$i</a>";
                } else {
                    echo "<a href='products.php?id_category=$category&page=$i' class='btn btn-default $flag_class' title='Page $i'>$i</a>";
                }
            }
       
            if ($page<$count_pages){
                $next_page = $page+1;
                //echo "Next: ".$next_page;
                echo "<a href='products.php?id_category=$category&page=$next_page' class='btn btn-default' title='Next'>
                            Next
                            <i class='glyphicon glyphicon-chevron-right'></i>
                        </a>";
            }
         }
         ?>

        </div>
    </div>
</div>

<Br>
<br>
<?php require_once('footer.php'); ?>
<form action="products.php" method="post">
        <button type="submit" class="float" name="checkout"><img
                src="https://img.icons8.com/nolan/64/000000/shopping-cart.png"> Checkout </button>
    </form>
<link href="../css/product.css" rel="stylesheet">
<script src="../js/productview.js"></script>
<link href="../css/slider.css" rel="stylesheet">
<script src="../js/slider.js"></script>
<link href="https://fonts.googleapis.com/css?family=Courgette|Dancing+Script|Lato|Pacifico&display=swap"
    rel="stylesheet">
</body>