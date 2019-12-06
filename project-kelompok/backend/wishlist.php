<?php include("header.php") ?>

<?php 
  $cmd_wishlist="SELECT fullname, pd.id_product, ukuran,warna, price
  from product_detail pd, customer c, wishlist w, product p 
  where pd.id_product_detail=w.Id_product_detail and c.username = w.username and p.id_product = pd.id_product";
  $wishlist_result  = mysqli_query($con,$cmd_wishlist) or die(mysqli_error($con));
  $wishlist=mysqli_fetch_all($wishlist_result);
  $wishlist_count = mysqli_num_rows($wishlist_result);
  ?>
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



<?php include("footer.php") ?>