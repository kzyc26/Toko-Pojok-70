<?php
$halaman="Review";
require_once('navbar.php');
require_once('db.php');
if(isset($_POST['review'])){
  $transactionid= $_POST['review'];
}
$cmd_review = "select td.transaction_id, td.id_product_detail,pd.id_product,concat(category_name,' ',product_name), ukuran, warna from transaction_detail td, transaction t, product p , product_detail pd, category c where td.transaction_id = t.transaction_id and td.id_product_detail = pd.id_product_detail and p.id_product = pd.id_product and c.id_category = p.id_category and td.transaction_id = '".$transactionid."'";
$review_result= mysqli_query($con,$cmd_review) or die(mysqli_error($con));
$review=mysqli_fetch_all($review_result);
$review_count=mysqli_num_rows($review_result);
?>

<div class="content">
  <h1>PRODUCT REVIEW</h1>
  <div class="reviews">
    <table>
      <?php for($i=0; $i<=$review_count-1; $i++){?>
      <tr>
        <td><img src="../assets/images/products/<?php echo $review[$i][2]?>.jpg"></td>
        <td style="padding:20px; margin-top:10%;">
          <br>
          <h4><?php echo $review[$i][3]?> - <?php echo $review[$i][4]?></h4>
          <fieldset class="rating">
            <input type="radio" id="star5<?php echo $i?>" name="rating<?php echo $i?>" value="5" /><label class="full"
              for="star5<?php echo $i?>" title="Awesome - 5 stars"></label>
            <input type="radio" id="star4half<?php echo $i?>" name="rating<?php echo $i?>" value="4.5" /><label
              class="half" for="star4half<?php echo $i?>" title="Pretty good - 4.5 stars"></label>
            <input type="radio" id="star4<?php echo $i?>" name="rating<?php echo $i?>" value="4" /><label class="full"
              for="star4<?php echo $i?>" title="Pretty good - 4 stars"></label>
            <input type="radio" id="star3half<?php echo $i?>" name="rating<?php echo $i?>" value="3 .5" /><label
              class="half" for="star3half<?php echo $i?>" title="Meh - 3.5 stars"></label>
            <input type="radio" id="star3<?php echo $i?>" name="rating<?php echo $i?>" value="3" /><label class="full"
              for="star3<?php echo $i?>" title="Meh - 3 stars"></label>
            <input type="radio" id="star2half<?php echo $i?>" name="rating<?php echo $i?>" value="2 .5" /><label
              class="half" for="star2half<?php echo $i?>" title="Kinda bad - 2.5 stars"></label>
            <input type="radio" id="star2<?php echo $i?>" name="rating<?php echo $i?>" value="2" /><label class="full"
              for="star2<?php echo $i?>" title="Kinda bad - 2 stars"></label>
            <input type="radio" id="star1half<?php echo $i?>" name="rating<?php echo $i?>" value="1 .5" /><label
              class="half" for="star1half<?php echo $i?>" title="Meh - 1.5 stars"></label>
            <input type="radio" id="star1<?php echo $i?>" name="rating<?php echo $i?>" value="1" /><label class="full"
              for="star1<?php echo $i?>" title="Sucks big time - 1 star"></label>
            <input type="radio" id="starhalf<?php echo $i?>" name="rating<?php echo $i?>" value="half" /><label
              class="half" for="starhalf<?php echo $i?>" title="Sucks big time - 0.5 stars"></label>
          </fieldset>
          <br>
          <textarea rows="10" cols="50" name="comment"></textarea>
        </td>

      </tr>

      <?php }?>

    </table>

    <a href="#" class="float">
      <img src="https://img.icons8.com/nolan/100/000000/star.png">
      <h6>Submit Review</h6>
    </a>

  </div>

  <?php require_once('footer.php'); ?>

  <link href="../css/product review.css" rel="stylesheet">
  <link href="../css/font-awesome.css" rel="stylesheet">
  </body>

  </html>