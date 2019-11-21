<?php 
  require_once('db.php');
  
 
  $cmd_product_details ="SELECT id_product_detail,ukuran,warna,jumlah, product_desc, jumlah_foto
          FROM product_detail d, product p
          WHERE d.id_product = p.id_product and jumlah > 0 AND d.id_product='R4804'";
    
          $product_details_result= mysqli_query($con,$cmd_product_details) or die(mysqli_error($con));
          $product_details = mysqli_fetch_assoc($product_details_result);
          $product_details_count = mysqli_num_rows($product_details_result);
          $pick = 1;
          $cmd_limit = $cmd_product_details."LIMIT $pick";
          $Limit_details_execute =mysqli_query($con,$cmd_limit) or die(mysqli_error($con));
          $limit_details = mysqli_fetch_assoc($Limit_details_execute);
  ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>JavaScript Slideshow - TinySlideshow</title>
<link rel="stylesheet" href="../css/slider.css" />
</head>
<body>
	<ul id="slideshow">
	<li>
            
            <a href="#"><img src="../assets/images/products/R4804.jpg"></a>
            <p></p>
            <img src="../assets/images/thumbnails/R4804.jpg" class=thumbnail style="width:30%;">
        </li>
    <?php
                $jumlahfoto= intval($limit_details['jumlah_foto']);
                $i=1;
                if($jumlahfoto>0){
                    while($jumlahfoto>=$i){?>
                <li>
                
                <a href="#"><img src="../assets/images/products/R4804-<?php echo $i;?>.jpg"></a>
               
                <img src="../assets/images/thumbnails/R4804-<?php echo $i;?>.jpg" class=thumbnail style="width:30%;">
                </li>
                <?php 
                $i++;
                }
                }

                ?>
    
	</ul>
	<div id="wrapper">
		<div id="fullsize">
			<div id="imgprev" class="imgnav" title="Previous Image"></div>
			<div id="imglink"></div>
			<div id="imgnext" class="imgnav" title="Next Image"></div>
			<div id="image"></div>
			<div id="information">
			</div>
		</div>
		<div id="thumbnails">
			<div id="slideleft" title="Slide Left"></div>
			<div id="slidearea">
				<div id="slider"></div>
			</div>
			<div id="slideright" title="Slide Right"></div>
		</div>
	</div>
<script type="text/javascript" src="../js/slider.js"></script>
<script type="text/javascript">
	$T('slideshow').style.display='none';
	$T('wrapper').style.display='block';
	var slideshow=new TINY.slideshow("slideshow");
	window.onload=function(){
		slideshow.auto=true;
		slideshow.speed=5;
		slideshow.link="linkhover";
		slideshow.thumbs="slider";
		slideshow.left="slideleft";
		slideshow.right="slideright";
		slideshow.scrollSpeed=4;
		slideshow.spacing=0;
		slideshow.active="#fff";
		slideshow.init("slideshow","image","imgprev","imgnext","imglink","slidearea");
	}
</script>
</body>
</html>