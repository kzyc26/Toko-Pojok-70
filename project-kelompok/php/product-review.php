
<?php
$page="Review";
require_once('navbar.php');
require_once('db.php');
?>

<div class="content">
  <h1>PRODUCT REVIEW</h1>
  <div class="reviews">
      <table>
<tr>
  <td><img src="../assets/images/Slide 1.jpg"></td>
    <td style="padding:20px; margin-top:10%;"> 
    <br>
    <h4>Product Name - Variant</h4>
    <fieldset class="rating" >
      <input type="radio" id="star5-1" name="rating-1" value="5" /><label class = "full" for="star5-1" title="Awesome - 5 stars"></label>
      <input type="radio" id="star4half-1" name="rating-1" value="4 and a half" /><label class="half" for="star4half-1" title="Pretty good - 4.5 stars"></label>
      <input type="radio" id="star4-1" name="rating-1" value="4" /><label class = "full" for="star4-1" title="Pretty good - 4 stars"></label>
      <input type="radio" id="star3half-1" name="rating-1" value="3 and a half" /><label class="half" for="star3half-1" title="Meh - 3.5 stars"></label>
      <input type="radio" id="star3-1" name="rating-1" value="3" /><label class = "full" for="star3-1" title="Meh - 3 stars"></label>
      <input type="radio" id="star2half-1" name="rating-1" value="2 and a half" /><label class="half" for="star2half-1" title="Kinda bad - 2.5 stars"></label>
      <input type="radio" id="star2-1" name="rating-1" value="2" /><label class = "full" for="star2-1" title="Kinda bad - 2 stars"></label>
      <input type="radio" id="star1half-1" name="rating-1" value="1 and a half" /><label class="half" for="star1half-1" title="Meh - 1.5 stars"></label>
      <input type="radio" id="star1-1" name="rating-1" value="1" /><label class = "full" for="star1-1" title="Sucks big time - 1 star"></label>
      <input type="radio" id="starhalf-1" name="rating-1" value="half" /><label class="half" for="starhalf-1" title="Sucks big time - 0.5 stars"></label>
    </fieldset>
  <br>
    <textarea rows="10" cols="50" name="comment"></textarea>
   </td>  
   
</tr>
<tr>
    <td ><img src="../assets/images/Slide 2.jpg"></td>
    <td style="padding:20px; margin-top:10%;">
        <h4>Product Name - Variant</h4>
      <fieldset class="rating" >
        <input type="radio" id="star5-2" name="rating-2" value="5" /><label class = "full" for="star5-2" title="Awesome - 5 stars"></label>
        <input type="radio" id="star4half-2" name="rating-2" value="4 and a half" /><label class="half" for="star4half-2" title="Pretty good - 4.5 stars"></label>
        <input type="radio" id="star4-2" name="rating-2" value="4" /><label class = "full" for="star4-2" title="Pretty good - 4 stars"></label>
        <input type="radio" id="star3half-2" name="rating-2" value="3 and a half" /><label class="half" for="star3half-2" title="Meh - 3.5 stars"></label>
        <input type="radio" id="star3-2" name="rating-2" value="3" /><label class = "full" for="star3-2" title="Meh - 3 stars"></label>
        <input type="radio" id="star2half-2" name="rating-2" value="2 and a half" /><label class="half" for="star2half-2" title="Kinda bad - 2.5 stars"></label>
        <input type="radio" id="star2-2" name="rating-2" value="2" /><label class = "full" for="star2-2" title="Kinda bad - 2 stars"></label>
        <input type="radio" id="star1half-2" name="rating-2" value="1 and a half" /><label class="half" for="star1half-2" title="Meh - 1.5 stars"></label>
        <input type="radio" id="star1-2" name="rating-2" value="1" /><label class = "full" for="star1-2" title="Sucks big time - 1 star"></label>
        <input type="radio" id="starhalf-2" name="rating-2" value="half" /><label class="half" for="starhalf-2" title="Sucks big time - 0.5 stars"></label>
      </fieldset>
    <br>
      <textarea rows="10" cols="50" name="comment"></textarea> </td>  
     
  </tr>
  <tr>
      <td ><img src="../assets/images/Slide 3.jpg"></td>
      <td style="padding:20px; margin-top:10%;">
          <h4>Product Name - Variant</h4>
        <fieldset class="rating" >
          <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
          <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
          <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
          <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
          <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
          <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
          <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
          <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
          <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
          <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
        </fieldset>
      <br>
      <textarea rows="10" cols="50" name="comment"></textarea> </td>  
       
    </tr>
 
    </table>
  </div>
  
  <a href="#" class="float">
      <img src="https://img.icons8.com/nolan/100/000000/star.png">
      <h6>Submit Review</h6>
      </a>
     
</div>
    
<?php require_once('footer.php'); ?>

<link href="../css/product review.css" rel="stylesheet">
<link href="../css/font-awesome.css" rel ="stylesheet">
</body>
</html>