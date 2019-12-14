<?php include("header.php") ?>

<?php 
$cmd_bestseller="SELECT d.id_product,sum(jumlah_product) as`best seller`
from product p, product_detail d, transaction_detail td,transaction t
where td.id_product_detail=d.id_product_detail and d.id_product=p.id_product and t.transaction_id = td.transaction_id and t.payment_status =0
group by d.id_product
order by `best seller`
limit 5";
$bestseller_result  = mysqli_query($con,$cmd_bestseller) or die(mysqli_error($con));
$bestseller=mysqli_fetch_all($bestseller_result);
$bestseller_count = mysqli_num_rows($bestseller_result);
?>

<table class="standard">
                    <tr>
                        <th>Product ID</th>
                        <th> Image </th>
                        <th>Jumlah Terjual</th>
                    </tr>
                    <?php 
                        $i=1;
                        if ($bestseller_count>0){
                            while($i <= $bestseller_count){ ?>
                    <tr>
                        <td> <?php echo $bestseller[$i-1][0];?></td>
                       <td><img style="width:100px; height:100px;" src="../assets/images/products/<?php echo $bestseller[$i-1][0];?>.jpg"> </td>
                        <td> <?php echo $bestseller[$i-1][1];?></td>
                    </tr>
                    <?php 
                    $i++; }
                         }
                        ?>
                </table>
<?php include("footer.php") ?>
