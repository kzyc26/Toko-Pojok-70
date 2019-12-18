<?php include("header.php") ?>

<?php 
if (!isset($_SESSION['hasil_search'])){
  $cmd_user="SELECT fullname, username, password FROM customer";
  $user_result  = mysqli_query($con,$cmd_user) or die(mysqli_error($con));
  $user=mysqli_fetch_all($user_result);
  $user_count = mysqli_num_rows($user_result);
} else {
  $user = $_SESSION['hasil_search'];
  $user_count= $_SESSION['baris'];
  unset($_SESSION['hasil_search']);
  unset($_SESSION['baris']);
} 
  ?>
<br/>
<h2>Login Details Pengguna</h2>
<form class="select" action="search_user.php" method="POST">
  <div class="form-group">
    <input type="text" name="keyword" class="form-control" placeholder="Masukkan Username/Nama" autofocus autocomplete="off">
  </div>
  <button type="submit" name="search" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
</form>
<table class="standard" id="login_display">
    <tr>
    <th>Fullname</th>    
    <th>Username</th>
        <th>Password</th>
    </tr>
    <?php 
        $count = intval($user_count);
        $i=1;
        if ($user_count>0){while($i <= $user_count)
        { ?>
    <tr>
        <td> <?php echo $user[$i-1][0];?></td>
        <td> <?php echo $user[$i-1][1];?></td>
        <td> <?php echo $user[$i-1][2];?></td>
    </tr>
    <?php $i++; }
        } ?>

</table>



<?php include("footer.php") ?>