<?php

include "../lib/koneksi.php";

$usr = $_POST['user'];
$pwd = $_POST['pwd'];
$count = 0;

$ambil = mysqli_query($con,"select * from user");

while ($r=mysqli_fetch_row($ambil)) {
	if ($r[0]==$usr && $r[1]==$pwd)
		$count++;
}

if ($count>0) {
	session_start();
	$_SESSION["user"] = $usr;
	$_SESSION["pass"] = $pwd;
	header("location:materi.php");
}

else {
	echo "
<script type='text/javascript'>
alert('Username atau Password yang anda masukkan salah');
window.location.href = 'login.php';
</script>
";
	// header("location:login.php");
	// echo '
	// <script type="text/javascript">
	// alert("salah");
	// </script>
	// ';
}

?>