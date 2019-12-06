<?php include("header.php") ?>

<?php 
  $cmd_category = "SELECT id_category,category_name from category";
  $category_result  = mysqli_query($con,$cmd_category) or die(mysqli_error($con));
  $category=mysqli_fetch_all($category_result);
  $category_count = mysqli_num_rows($category_result);
  ?>
<div class="itemcategory" id="itemcategory">
    <p> Select Category: </p>
    <select name="category" id="listcategory" onchange="categorychange()">
        <option value=""></option>
        <?php for($i=0; $i<=$category_count-1; $i++){?>
        <option value="<?php echo $category[$i][0];?>"><?php echo $category[$i][1];?></option>
        <?php }?>
    </select>
    <table id="listitem">

    </table>
</div>


<?php include("footer.php") ?>