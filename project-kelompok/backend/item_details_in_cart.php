<?php include("header.php") ?>

<?php 
  $cmd_cart_detail="SELECT fullname ,td.transaction_id,p.id_product,ukuran,warna, jumlah_product,harga_jual_satuan,total_harga
  from customer c, transaction t, transaction_detail td, product_detail p
  where c.username=t.username and td.transaction_id=t.transaction_id and td.id_product_detail = p.id_product_detail";
  $cart_detail_result  = mysqli_query($con,$cmd_cart_detail) or die(mysqli_error($con));
  $cart_detail=mysqli_fetch_all($cart_detail_result);
  $cart_detail_count = mysqli_num_rows($cart_detail_result);
  ?>
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

<?php include("footer.php") ?>