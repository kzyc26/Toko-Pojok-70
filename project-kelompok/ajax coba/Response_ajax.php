<?php
    $g = $_GET;
    $id_barang = null;
    if(isset($g['id'])){
        $id_barang = $g['id'];
    }
?>


<h1>Response</h1>
<p><?php echo $id_barang ?></p>