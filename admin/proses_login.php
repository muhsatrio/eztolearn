<?php

include "../lib/koneksi.php";

$usr = $_POST['user'];
$pwd = $_POST['pwd'];
$count = 0;

$ambil = mysqli_query($con,"select * from admin");

while ($r=mysqli_fetch_row($ambil)) {
	if ($r[0]==$usr && $r[1]==$pwd)
		$count++;
}

if ($count>0) {
	// echo "yes\n";
	session_start();
	$_SESSION["useradmin"] = $usr;
	$_SESSION["passadmin"] = $pwd;
	header("location:index.php");
}

else
	header("location: login.php");
	// header("location:login.php");

?>