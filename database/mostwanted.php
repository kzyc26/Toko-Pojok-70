<?php include("header.php") ?>

<?php 
  $cmd_mostwanted = "SELECT Id_product ,count(Id_product) as `Jumlah Peminat`
  from wishlist	
  group by Id_product
  order BY `Jumlah Peminat`
  Limit 3";
    $mostwanted_result  = mysqli_query($con,$cmd_mostwanted) or die(mysqli_error($con));
    $mostwanted=mysqli_fetch_all($mostwanted_result);
    $mostwanted_count = mysqli_num_rows($mostwanted_result);
  ?>
<h2>Most Wanted Products</h2>
  <br>

<table class="standard">
                    <tr>
                    <th> Gambar </th>
                        <th>ID Produk</th>
                        <th>Jumlah Peminat</th>
                    </tr>
                    <?php 
                        $count = intval($mostwanted_count);
                        $i=1;
                        if ($mostwanted_count>0){while($i <= $mostwanted_count){ ?>
                    <tr>
                        <td> <img style="widht:100px; height: 100px;" src="assets/images/Products/<?php echo $mostwanted[$i-1][0];?>.jpg"> </td>
                        <td> <?php echo $mostwanted[$i-1][0];?></td>
                        <td> <?php echo $mostwanted[$i-1][1];?></td>
                    </tr>
                    <?php $i++; }
                         } ?>
                </table>

<?php include("footer.php") ?>