<?php include("header.php") ?>

<?php 
if (!isset($_SESSION['hasil_search'])){  
  $cmd_wishlist="SELECT fullname, p.id_product, price
  from  customer c, wishlist w, product p 
  where p.id_product = w.Id_product and c.username = w.username ";
  $wishlist_result  = mysqli_query($con,$cmd_wishlist) or die(mysqli_error($con));
  $wishlist=mysqli_fetch_all($wishlist_result);
  $wishlist_count = mysqli_num_rows($wishlist_result);
} else {
  $wishlist = $_SESSION['hasil_search'];
  $wishlist_count= $_SESSION['baris'];
  unset($_SESSION['hasil_search']);
  unset($_SESSION['baris']);
} 

  ?>

  <h2>Wishlist</h2>
  <form class="select" action="customer_wishlist_display.php" method="POST">
  <div class="form-group">
    <input type="text" name="keyword" class="form-control" placeholder="Masukkan Username/Nama" autofocus autocomplete="off">
  </div>
  <button type="submit" name="search" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
</form>

<table class="standard" id="display_custwishlist">
    <tr>
        <th>Name</th>
        <th>ID Product</th>
        <th>Image</th>
        <th> Price </th>
        
    </tr>
    <?php 
                    $i=1;
                
                    if($wishlist_count>0){
                        while($i<$wishlist_count){?>
    <tr>

        <td><?php echo $wishlist[$i-1][0];?></td>
        <td><?php echo $wishlist[$i-1][1];?></td>
        <td><img style="width:100px; height:100px;" src="assets/images/Products/<?php echo $wishlist[$i-1][1];?>.jpg"></td>
        <td>Rp.<?php echo number_format($wishlist[$i-1][2],2,',','.');?></td>
       
    </tr>
    <?php   $i++;}
                     
                    }
                    ?>
</table>



<?php include("footer.php") ?>