<?php

session_start();
if ($_SESSION["user"]=="" && $_SESSION["pass"]=="") {
	?>

<!DOCTYPE html>
<html>
<head>
	<title>Registrasi - EzToLearn</title>
	<script type="text/javascript" src="../js/bootstrap.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/npm.js"></script>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/operation.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body class="bodyUser">
	<div class="konten">
		<div class="row header">
		<center>
		<p class="header1">EzToLearn</p>
		<p class="header2">Probabilitas dan Statistika</p>
		</center>
		</div>
		<div class="col-sm-1">
		</div>
		<div class="kotakRegis col-sm-10">
			<h3>Form Pendaftaran</h3>
			<form method="post" action="proses_registrasi.php">
			<table class="table tabel">
				<tbody>
				<tr class="tabel">
					<td>Nama Lengkap </td>
					<td><input type="text" class="form-control" name="nama_lengkap" required></td>
				</tr>
				<tr class="tabel">
					<td>Tanggal Lahir </td>
					<td><input type="date" name="tlahir" required></td>
				</tr>
				<tr class="tabel">
					<td>Email </td>
					<td><input type="text" class="form-control" name="email" required></td>
				</tr>
				<tr class="tabel">
					<td>Username </td>
					<td><input type="text" class="form-control" name="user" required></td>
				</tr>
				<tr class="tabel">
					<td>Password </td>
					<td><input type="password" class="form-control" name="password" required></td>
				</tr>
				<tr class="tabel">
					<td>Konfirmasi Password </td>
					<td><input type="password" class="form-control" name="confirm_password" required></td>
				</tr>
				<tr class="tabel">
					<td></td>
					<td>Saya menyetujui semua kebijakan pada website ini: <label class="radio-inline"><input type="radio" name="setuju" value="iya">iya</label><label class="radio-inline"><input type="radio" name="setuju" value="tidak">tidak</label></td>
				</tr>
				</tbody>
			</table>
			<button type="submit" class="btn btn-default" style="float: right;">Daftar</button>
			</form>
		</div>
		<div class="col-sm-1"></div>
	</div>
</body>
</html>

<?php
}
else {
	header('location:materi.php');
}
?>

