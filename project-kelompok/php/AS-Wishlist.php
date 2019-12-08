<?php
  session_start();
  require_once('db.php');
$g = $_GET;
$cmd_wishlist = "SELECT w.id_product,concat(category_name,' ',product_name), sum(jumlah),price
from wishlist w, product p, product_detail pd, category c
where w.Id_product =  pd.id_product and w.Id_product = p.id_product and c.id_category = p.id_category
group by Id_product";
$wishlist_result= mysqli_query($con,$cmd_wishlist) or die(mysqli_error($con));
$wishlist=mysqli_fetch_all($wishlist_result); 
$wishlist_count=mysqli_num_rows($wishlist_result); 
?>
    <h2>Wishlist</h2>
    <br>
    <table class="wishes">
        <tr>
            <th>Image</th>
            <th>Product Name</th>
            <th>Availablity</th>
            <th>Unit Price</th>
            
        </tr>
        <?php
        $i=1; 
        if($wishlist_count>0){
                        while($i<=$wishlist_count){?>
      <tr>
      <td><img style= "width:150px; height:150px;"src="../assets/images/Products/<?php echo $wishlist[$i-1][0];?>.jpg"></td>
      <td><?php echo $wishlist[$i-1][1];?></td>
      <td><?php echo $wishlist[$i-1][2];?></td>
      <td><?php echo $wishlist[$i-1][3];?></td>
      
      </tr>
      <?php   $i++;}
                     
                    }
                    ?>

    </table>