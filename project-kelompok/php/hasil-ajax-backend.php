<?php
    require_once('db.php');
    $g = $_GET;
    $query = null;
    if(isset($g['query'])){
        $query = $g['query'];
        $sql = mysqli_query($con, $query);        
        $results=mysqli_fetch_all($sql);
        $rows = mysqli_num_rows($sql);
        $header = $g['array_judul'];
        var_dump($header);
        echo count($header);
        die();
    }
?>

<h2>Result</h2>
<table>
<?php 

?>
<p><?php echo $id_barang ?></p>