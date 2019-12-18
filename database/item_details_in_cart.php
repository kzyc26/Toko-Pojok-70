<?php include("header.php") ?>

<?php 
  $cmd_cart="SELECT transaction_id from transaction where transaction_status = 0 and payment_status=0 ";
  $cart_result  = mysqli_query($con,$cmd_cart) or die(mysqli_error($con));
  $cart=mysqli_fetch_all($cart_result);
  $cart_count = mysqli_num_rows($cart_result);
  ?>



<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <?php for($i=0; $i<=$cart_count-1; $i++){
                        ?> <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading-<?php echo $i;?>">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapse-<?php echo $i;?>" aria-expanded="true"
                                    aria-controls="collapse-<?php echo $i;?>">
                                    Transaction ID : <?php echo $cart[$i][0];?>
                                </a>
                            </h4>
                        </div>
                        <?php 
                        $cmd_cart_detail = "SELECT pd.id_product, concat(category_name, ' ', product_name) as `Product Name`, price, ukuran, warna, jumlah_product,total_harga
                        from transaction_detail td, product p , product_detail pd, category c
                        where td.id_product_detail = pd.id_product_detail and pd.id_product = p.id_product and c.id_category = p.id_category and transaction_id ='".$cart[$i][0]."'";
                        $cart_detail_result  = mysqli_query($con,$cmd_cart_detail) or die(mysqli_error($con));
                        $cart_detail=mysqli_fetch_all($cart_detail_result);
                        $cart_detail_count = mysqli_num_rows($cart_detail_result);
                        if ($cart_detail_count>=1){
                          $subtotal=0;
                       for($a=0; $a<=$cart_detail_count-1; $a++){
                           $price = intval($cart_detail[$a][6]);
                           
                           $subtotal = $subtotal + $price;
                   
                       }
                   }
                         ?>
                        <div id="collapse-<?php echo $i;?>" class="panel-collapse collapse in" role="tabpanel"
                            aria-labelledby="heading-<?php echo $i;?>">
                            <div class="panel-body">
                            <table class="orderdetail">
                                <?php for($x=0; $x<=$cart_detail_count-1; $x++){?>
                                
                                    <tr>
                                        <td><img src="assets/images/Products/<?php echo $cart_detail[$x][0];?>.jpg"
                                                style="width:100px; height:100px;"></td>
                                        <td style="float:left;">
                                            <?php echo $cart_detail[$x][1];?> 
                                            <br>
                                            <?php echo $cart_detail[$x][3];?> | <?php echo $cart_detail[$x][4];?> 
                                            <br>
                                            X <?php echo $cart_detail[$x][5];?> 
                                      </td>
                                        <td style="float:right;"> Rp.
                                            <?php 
								            $price = $cart_detail[$x][6];
								            echo number_format($price,2,",","."); 
                                     } ?></td>

                                    </tr>
                                </table>
                                <br><br>  
                                
                                <table class="cart_total">
                                    <tr>
                                        <td class="cart_title"> TOTAL </td>
                                        <td class="cart_totalcontent"> Rp. <?php  
                                            
                                            echo number_format($subtotal,2,",",".")   ?> </td>
                                    </tr>
                                 
                                </table>
                                <br>
                            </div>
                        </div>
                    </div>
                    <?php }?>

                </div>
                <?php include("footer.php") ?>