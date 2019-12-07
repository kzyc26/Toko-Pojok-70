<?php
session_start();
$a = "semoga berkah";
$_SESSION['test'] = $a;
header("location: h2.php");
?>