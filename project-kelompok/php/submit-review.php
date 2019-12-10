<?php
session_start();
require_once('db.php');
if(isset($_POST['subreview'])){
    for($i=0; $i<=$_SESSION["reviewcount"]-1; $i++){
        $comment="comment-".$i;
        $rating="rating-".$i;
        if(!isset($_POST[$comment])){
            $_POST[$comment] = "No Comment";
        }
            
        $cmd_subreview="INSERT into review values('".$_SESSION['transactionid']."','".$_SESSION['productdetail'][$i]."','".$_POST[$rating]."','".$_POST[$comment]."')";      
        $subreview_result= mysqli_query($con,$cmd_subreview) or die(mysqli_error($con));
        
    }
    header("location: accountsetting.php");
}
?>







<Br>
<br>

<?php require_once('footer.php'); ?>

<link href="../css/product review.css" rel="stylesheet">
<link href="../css/font-awesome.css" rel="stylesheet">
</body>

</html>