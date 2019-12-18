<?php
 $asal = "255";
 $tujuan = $_POST['tujuan'];
 $kurir = $_POST['kurir'];
 $berat = 1000;
 
 if($kurir !== "cod"){
 $curl = curl_init();
 curl_setopt_array($curl, array(
 CURLOPT_URL => "http://api.rajaongkir.com/starter/cost",
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_ENCODING => "",
 CURLOPT_MAXREDIRS => 10,
 CURLOPT_TIMEOUT => 30,
 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
 CURLOPT_CUSTOMREQUEST => "POST",
 CURLOPT_POSTFIELDS => "origin=".$asal."&destination=".$tujuan."&weight=".$berat."&courier=".$kurir."",
 CURLOPT_HTTPHEADER => array(
 "content-type: application/x-www-form-urlencoded",
 "key: 1ecf51e9ad012a490f0521ed5bd9151d"
 ),
 ));
 $response = curl_exec($curl);
 $err = curl_error($curl);
 curl_close($curl);
 if ($err) {
 echo "cURL Error #:" . $err;
 } else {
 $data = json_decode($response, true);

 $asal = $data['rajaongkir']['origin_details']['city_name'];
 $tujuan = $data['rajaongkir']['destination_details']['city_name'];
 $k=0;
 $jenis = $data['rajaongkir']['results'][$k]['name'];
 $harga = $data['rajaongkir']['results'][$k]['costs']; 
 }
 ?>
<?php echo $asal;?>&nbsp;ke&nbsp;
<?php echo $tujuan;?> @<?php echo $berat;?>&nbsp;gram Kurir :
<?php echo strtoupper($kurir); ?>
<?php
 for ($k=0; $k < count($data['rajaongkir']['results']); $k++) {
 ?>
<div title="<?php echo strtoupper($jenis);?>" style="padding:10px">
    <table class="table table-striped">
        <tr>
            <th></th>
            <th>Jenis Layanan</th>
            <th>ETD</th>
            <th>Tarif</th>
        </tr>
        <?php
 for ($l=0; $l < count($harga); $l++) {
 ?>
        <tr>
            <td><input type="radio" name="input_ongkir" value="<?php echo $harga[$l]['cost'][0]['value'];?>" onchange="set_ongkir('input_ongkir')"></td>
            <td>
                <div style="font:bold 16px Arial">
                    <?php echo $harga[$l]['service'];?></div>
                <div style="font:normal 11px Arial">
                    <?php echo $harga[$l]['description'];?></div>
            </td>
            <td align="center">&nbsp;<?php echo $harga[$l]['cost'][0]['etd'];?>
                days</td>
            <td align="right">
                <?php echo number_format($harga[$l]['cost'][0]['value'],2,",",".")." per kilogram";?></td>
        </tr>
        <?php
 }
 ?>
    </table>
</div>
<?php
 }
}
 ?>