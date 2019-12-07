<?php
session_start();
require_once('db.php');
if(isset($_POST['subreview'])){
    for($i=0; $i<=$_SESSION["reviewcount"]-1; $i++){
        $comment="'comment-".$i;
        $rating="rating-".$i;
        
        ?><script> alert('<?php echo $_SESSION["$comment"]?>');</script> <?php
        // $cmd_subreview="insert into review values ";
        // $subreview_result= mysqli_query($con,$cmd_subreview) or die(mysqli_error($con));
    }
}
?>









<?php require_once('footer.php'); ?>

<link href="../css/product review.css" rel="stylesheet">
<link href="../css/font-awesome.css" rel="stylesheet">
</body>

</html>