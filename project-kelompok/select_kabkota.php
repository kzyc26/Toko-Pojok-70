<?php
$provinsi_id = $_GET['prov_id'];
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.rajaongkir.com/starter/city?province=$provinsi_id",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "key: 1ecf51e9ad012a490f0521ed5bd9151d"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
    $c=0;
    $arr_prov = json_decode($response, true);
    ?>
<select name="kabkota" id="select_kabkota" class="form-control pendek">
    <?php
  for ($c; $c < count($arr_prov['rajaongkir']['results']); $c++){
    ?>
    <option value="<?php echo $arr_prov['rajaongkir']['results'][$c]['city_id'];?>"><?php echo $arr_prov['rajaongkir']['results'][$c]['city_name'];?></option>
    <?php
  }
}
?>
</select>