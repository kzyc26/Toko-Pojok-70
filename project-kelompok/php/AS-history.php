<?php 
  session_start();
  require_once('db.php');
$g = $_GET;
if(isset($g['status'])){
    if($g['status'] == "ongoing"){
        $historycmd_extra="AND (dd.id_deliverystatus = 1 or dd.id_deliverystatus = 2) ";
        $title="Ongoing";
        $review=0;
    
    }
    elseif ($g['status'] == "completed"){
        $historycmd_extra="AND dd.id_deliverystatus = 3 ";
        $title="Completed";
        $review=1;
    }
    elseif ($g['status'] == "all"){
        $historycmd_extra="";
        $title="All";
        $review=0;
    }
    elseif ($g['status'] == "need"){
        $historycmd_extra="AND dd.id_deliverystatus = 0";
        $title="Need to be Delivered";
        $review=0;
    }
}
    $cmd_orderhistory="SELECT t.transaction_id as `Transaction ID`,
    receiver,notelp,dd.alamat,dd.kab_kota,dd.kecamatan,dd.kelurahan,
    dd.provinsi,dd.kode_pos,total_transaction, d.delivery_status,
    ongkir,nama_ekspedisi,payment_method 
   from transaction t, customer c, delivery_details dd,delivery d, ekspedisi e,
   payment_method p
   where t.username= c.username and dd.transaction_id = t.transaction_id 
   and d.id_deliverystatus = dd.id_deliverystatus and dd.id_ekspedisi = e.id_ekspedisi 
   and t.id_payment_method= p.id_payment_method and t.username = '".$_SESSION['username']."' 
   $historycmd_extra;";
   $orderhistory_result= mysqli_query($con,$cmd_orderhistory) or die(mysqli_error($con));
   $orderhistory=mysqli_fetch_all($orderhistory_result);
   $orderhistory_count=mysqli_num_rows($orderhistory_result);
?>
 <div class="subcatorderhistory" id="historyinfo">
                <h2><?php echo $title;?> Order History</h2>

                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <?php for($i=0; $i<=$orderhistory_count-1; $i++){
                        ?> <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading-<?php echo $i;?>">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapse-<?php echo $i;?>" aria-expanded="true"
                                    aria-controls="collapse-<?php echo $i;?>">
                                    Transaction ID : <?php echo $orderhistory[$i][0];?>
                                </a>
                            </h4>
                        </div>
                        <?php 
                            $cmd_orderdetail = "SELECT  pd.id_product,category_name, product_name, jumlah_product,harga_jual_satuan,total_harga
                            from transaction_detail td, transaction t, product p, product_detail pd, customer c,category ct
                            where ct.id_category = p.id_category and pd.id_product_detail = td.id_product_detail and p.id_product = pd.id_product and t.username = c.username and t.transaction_id = td.transaction_id and t.username = '".$_SESSION['username']."'
                            and t.transaction_id='".$orderhistory[$i][0]."'";
                            $orderdetail_result= mysqli_query($con,$cmd_orderdetail) or die(mysqli_error($con));
                            $orderdetail=mysqli_fetch_all($orderdetail_result);
                            $orderdetail_count=mysqli_num_rows($orderdetail_result);
                            if ($orderdetail_count>=1){
                                $subtotal=0;
                             for($a=1; $a<=$orderdetail_count-1; $a++){
                                 $price = intval($orderdetail[$a][5]);
                                 
                                 $subtotal = $subtotal + $price;
                         
                             }
                         }?>
                        <div id="collapse-<?php echo $i;?>" class="panel-collapse collapse in" role="tabpanel"
                            aria-labelledby="heading-<?php echo $i;?>">
                            <div class="panel-body">
                                <table class="alamat">
                                    <tr>
                                        <th>Alamat Pengiriman</th>
                                        <th style="text-align:right;"> Status: <?php echo $orderhistory[$i][10];?> </th>
                                    </tr>
                                    <tr>
                                    <tr>
                                        <th> <?php echo $orderhistory[$i][1];?>
                                            <br></th>
                                        
                                    </tr>
                                    <td>
                                        <?php echo $orderhistory[$i][2];?>
                                        <br>
                                        <?php echo $orderhistory[$i][3];?>,
                                        <br>
                                        <?php echo $orderhistory[$i][4];?>, <?php echo $orderhistory[$i][5];?>,
                                        <?php echo $orderhistory[$i][6];?>,
                                        <br>
                                        <?php echo $orderhistory[$i][7];?>,ID,<?php echo $orderhistory[$i][8];?>
                                        <br>

                                        <br>
                                    </td>
                                    </tr>
                                </table>
                                <br>
                                <table class="orderdetail">
                                <?php for($x=0; $x<=$orderdetail_count-1; $x++){?>
                                
                                    <tr>
                                        <td><img src="../assets/images/products/<?php echo $orderdetail[$x][0];?>.jpg"
                                                style="width:100px; height:100px;"></td>
                                        <td style="float:left;">
                                            <?php echo $orderdetail[$x][1];?><?php echo $orderdetail[$x][2];?><br> x
                                            <?php echo $orderdetail[$x][3];?></td>
                                        <td style="float:right;"> Rp.
                                            <?php 
								            $price = $orderdetail[$x][4];
								            echo number_format($price,2,",","."); 
                                     } ?></td>

                                    </tr>
                                </table>
                                <br><br>
                                <table class="totals">

                                    <tr>
                                        <td class="title"> Subtotal Untuk Produk </td>
                                        <td class="totalcontent"> Rp. <?php  
                                            echo number_format($subtotal,2,",","."); 
                                            ?> </td>
                                    </tr>
                                    <tr>
                                        <td class="title"> Pengiriman - <?php echo $orderhistory[$i][12];?> </td>
                                        <td class="totalcontent"> Rp. <?php  
                                            $ongkir = intval($orderhistory[$i][11]);
                                            echo number_format($ongkir,2,",","."); 
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="title"> TOTAL PESANAN </td>
                                        <td class="totalcontent totalprice"> Rp. <?php  
                                            $total = intval($orderhistory[$i][9]);
                                            echo number_format($total,2,",","."); 
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="title"> Metode Pembayaran </td>
                                        <td class="totalcontent"> <?php  echo $orderhistory[$i][13]; ?>
                                        </td>
                                    </tr>
                                </table>
                                <br>
                               
                            <?php
                            if($orderhistory[$i][10] == "On Delivery"){
                                ?><form method="post" id="accept" action="accountsetting.php">
                                <button type="submit" name="accept" class="col-xs2 btn btn-primary btn-load btn-lg" value="<?php echo $orderhistory[$i][0]?>" onclick="diterima(recieve);"> Pesanan Diterima </button>
                                </form>  
                                <?php   
                            }
                            if($review == 1){
                                $cmd_check_review="SELECT * from review where id_transaction = '".$orderhistory[$i][0]."'";
                                $check_review_result= mysqli_query($con,$cmd_check_review) or die(mysqli_error($con));
                                $check_review=mysqli_fetch_all($check_review_result);
                                $check_review_count=mysqli_num_rows($check_review_result);
                                if($check_review_count==0){ ?>
                                    <form method="post" id="product" action="product-review.php">
                                    <button type="submit" name="review" class="col-xs2 btn btn-primary btn-load btn-lg" value="<?php echo $orderhistory[$i][0]?> "> Add Review </button>
                                     
                                    </form> 
                                <?php }
                               
                            }?>

                            </div>
                        </div>
                    </div>

                    <?php }?>

                </div>
            </div>
