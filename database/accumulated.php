<?php include("header.php") ?>

<?php 
  $cmd_accumulated="SELECT Id_product, avg(Star_rating) as `Rating` 
  from review r, product_detail p
  where r.id_product_detail = p.id_product_detail
  group by p.id_product";
  $accumulated_result  = mysqli_query($con,$cmd_accumulated) or die(mysqli_error($con));
  $accumulated=mysqli_fetch_all($accumulated_result);
  $accumulated_count = mysqli_num_rows($accumulated_result);?>
 <h2> Customer Review Accumulated per Product </h2>
 <br>

<table class="standard">
    <tr>
    <th>Gambar</th>
        <th>ID Product</th>
        <th>Star Rating</th>
    </tr>
    <?php 
                    $i=1;
                
                    if($accumulated_count>0){
                        while($i<=$accumulated_count){?>
    <tr>
<td><img style="width:100px; height:100px;"src="assets/images/Products/<?php echo $accumulated[$i-1][0];?>.jpg"</td>
        <td><?php echo $accumulated[$i-1][0];?></td>
        <td><?php echo $accumulated[$i-1][1];?></td>
    </tr>
    <?php   $i++;}
                     
                    }
                    ?>
</table>



<?php include("footer.php") ?>