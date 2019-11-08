<?php
/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/

//--CARA PROSEDURAL
//-------------------
$con = mysqli_connect("localhost","root","","register");
// Check connection
if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
*/

//--CARA OBJECT-ORIENTED
require_once('config.php');

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

?>