<?php include("header.php") ?>


<div class="month" id="monthrev">
    <p> Select Month: </p>
    <select name="month" id="monthlist" onchange="monthchange()">
        <option value=""></option>
        <?php for($i=1; $i<=12; $i++){
            $month_name = date("F", mktime(0, 0, 0, $i, 10));?>
        <option value="<?php echo $i?>"><?php echo $month_name;?></option>
        <?php }?>
    </select>
    <div id="monthlyrev" >

    </div>
</div>

<?php include("footer.php") ?>