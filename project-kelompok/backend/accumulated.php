<?php include("header.php") ?>

<?php 
  $cmd_accumulated="SELECT Id_product,ukuran,warna, avg(Star_rating) as `Rating` 
  from review r, product_detail p
  where r.id_product_detail = p.id_product_detail
  group by r.id_product_detail";
  $accumulated_result  = mysqli_query($con,$cmd_accumulated) or die(mysqli_error($con));
  $accumulated=mysqli_fetch_all($accumulated_result);
  $accumulated_count = mysqli_num_rows($accumulated_result);?>
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
                        while($i<=$accumulated_count){?>
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



<?php include("footer.php") ?>