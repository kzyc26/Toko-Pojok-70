<?php
session_start();
$username = "";
$pass = "";
$db = mysqli_connect("localhost", "root", "", "toko_pojok_70") or die("connection to database failed");
$errors = array();
//register
$email = mysqli_real_escape_string($db, $_POST['email']);
$username = mysqli_real_escape_string($db, $_POST['username']);
$pass = mysqli_real_escape_string($db, $_POST['password']);
$repass = mysqli_real_escape_string($db, $_POST['retype-password']);
$fullname = mysqli_real_escape_string($db, $_POST['nama-lengkap']);
$gender = mysqli_real_escape_string($db, $_POST['gender']);
$phone = mysqli_real_escape_string($db, $_POST['no-telp']);
$dob = mysqli_real_escape_string($db, $_POST['tanggal-lahir']);
$prov = mysqli_real_escape_string($db, $_POST['provinsi']);
$kabkota = mysqli_real_escape_string($db, $_POST['kabkota']);
$kecamatan = mysqli_real_escape_string($db, $_POST['kecamatan']);
$kelurahan = mysqli_real_escape_string($db, $_POST['kelurahan']);
$kodepos = mysqli_real_escape_string($db, $_POST['kodepos']);
$alamat = mysqli_real_escape_string($db, $_POST['alamat']);
//error array
if(empty($username)) {array_push($errors, "Username is required.")};
if(empty($pass)) {array_push($errors, "Password is required.")};
if(empty($repass)) {array_push($errors, "Please retype your password.")};
if(empty($email)) {array_push($errors, "Email is required.")};
if($pass != $repass){array_push($errors, "Password doesn't match.")};

//check usernames
$query = "SELECT * FROM customer WHERE username = '$username' or email = '$email' LIMIT 1";
$results = mysqli_query($db, $query);
$user = mysqli_fetch_assoc($results);

if($user){
    if($user['username'] === $username) {
        array_push($errors, "Sorry, username is already taken.");
    }
    if($user['email'] === $email) {
        array_push($errors, "This email is registered.");
    }
}

//user registration
if(count($errors) == 0){
    $pass = md5($pass);
    $query = "INSERT INTO customer values ('$alamat', '$email', '$fullname', '$gender', '$kabkota', '$kecamatan', '$kelurahan', '$kodepos', '$pass', '$prov', '$phone', '$username')";
    mysqli_query($db, $query);
$_SESSION['username'] = $username;
$_SESSION['success'] = "You are now logged in";
header('location: accountsetting.php');


}

?>