<?php include("header.php") ?>

<?php 
  $cmd_user="SELECT nama_ekspedisi, count(d.id_ekspedisi) as `Jumlah Pengguna`
  FROM ekspedisi e , delivery_details d
  WHERE e.id_ekspedisi = d.id_ekspedisi
  GROUP BY d.id_ekspedisi
  ORDER BY `Jumlah Pengguna` desc";
  $user_result  = mysqli_query($con,$cmd_user) or die(mysqli_error($con));
  $user=mysqli_fetch_all($user_result);
  $user_count = mysqli_num_rows($user_result);
  ?>
  <h2> Frequently Used Ekspedisi</h2>
  <br>

 <table class="standard">
                    <tr>
                        <th>Nama Ekspedisi</th>
                        <th>Jumlah Pengguna</th>
                    </tr>
                    <?php 
                        $count = intval($user_count);
                        $i=1;
                        if ($user_count>0){while($i <= $user_count){ ?>
                    <tr>
                        <td> <?php echo $user[$i-1][0];?></td>
                        <td> <?php echo $user[$i-1][1];?></td>
                    </tr>
                    <?php $i++; }
                         } ?>
                </table>
<?php include("footer.php") ?>

