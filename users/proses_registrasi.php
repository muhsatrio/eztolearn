<?php

include "../lib/koneksi.php";

$nama = $_POST['nama_lengkap'];
$tgl_lahir = $_POST['tlahir'];
$email = $_POST['email'];
$user = $_POST['user'];
$pass = $_POST['password'];
$pass2 = $_POST['confirm_password'];
$aggree = $_POST['setuju'];

$query = mysqli_query($con,"select * from user where username='$user'");


// echo "$nama $tgl_lahir $email $user $pass $pass2 $aggree";

if ($aggree=="iya" && $pass==$pass2 && mysqli_num_rows($query)==0) {
	mysqli_query($con,"insert into user(email, nama, password, tgl_lahir,username) VALUES('$email','$nama','$pass','$tgl_lahir','$user')");
	// session_start();
	// $_SESSION["user"] = $user;
	// $_SESSION["pass"] = $pass;
	echo "
<script type='text/javascript'>
alert('Akun berhasil dibuat! Silahkan sign in untuk melanjutkan');
window.location.href = 'login.php';
</script>
";
	// header('location:materi.php');
}
else if (mysqli_num_rows($query)>0) {
	echo "
<script type='text/javascript'>
alert('Username yang anda masukkan sudah dipakai. Silahkan sign in atau gunakan username yang lain.');
window.location.href = 'login.php';
</script>
";
}
else {
	echo "
<script type='text/javascript'>
alert('Proses pendaftaran gagal! Silahkan ulangi lagi');
window.location.href = 'login.php';
</script>
";
	// echo "<script>alert('Pendaftaran gagal!');</script>";
	// header('location:login.php');
}

// $ambil = mysqli_query($con,"select * from admin");

// while ($r=mysqli_fetch_row($ambil)) {
// 	if ($r[0]==$usr && $r[1]==$pwd)
// 		$count++;
// }

// if ($count>0) {
// 	session_start();
// 	// session_register("namauser");
// 	// session_register("passuser");
// 	$_SESSION["user"] = $usr;
// 	$_SESSION["pass"] = $pwd;
// 	header("location:materi.php");
// }
// 	// location('materi.php');
// else
// 	header("location:login.php");

?>