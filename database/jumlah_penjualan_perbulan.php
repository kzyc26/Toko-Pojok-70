<?php include("header.php") ?>

<h2>Jumlah Penjualan Per Bulan</h2>
  <br>

<div class="month" id="monthrev">
    <p> Select Month: </p>
    <select name="month" id="monthlist" onchange="monthchange()">
        <option value=""></option>
        <?php for($i=1; $i<=12; $i++){
            $month_name = date("F", mktime(0, 0, 0, $i, 10));?>
        <option value="<?php echo $i?>"><?php echo $month_name;?></option>
        <?php }?>
    </select>

    <p> Select Year: </p>
    <select name="year" id="yearlist" onchange="monthchange()">
        <option value=""></option>
        <?php for($i=1; $i<=20; $i++){
            $year = 2018 +$i;?>
        <option value="<?php echo $year?>"><?php echo $year;?></option>
        <?php }?>
    </select>
    <div id="monthlyrev" >

    </div>
</div>

<?php include("footer.php") ?>