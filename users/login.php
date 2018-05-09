<?php

session_start();
if ($_SESSION["user"]=="" && $_SESSION["pass"]=="") {
	?>
	<!DOCTYPE html>
<html>
<head>
	<title>Login - EzToLearn</title>
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
		<center>
		<div class="row header">
		<p class="header1">EzToLearn</p>
		<p class="header2">Probabilitas dan Statistika</p>
		</div>
		<div class="col-sm-3">
		</div>
		<div class="kotakLogin col-sm-6">
			<form method="post" action="proses_login.php">
			<div class="row spasiKiri spasiBawah">
				<div class="col-sm-3">
				Username:
				</div>
				<div class="col-sm-7">
				<input type="text" class="form-control" name="user">
				</div>
			</div>
			<div class="row spasiKiri spasiBawah">
				<div class="col-sm-3">
				Password:
				</div>
				<div class="col-sm-7">
				<input type="password" class="form-control" name="pwd">
				</div>
			</div>
			<div class="row spasiKiri spasiBawah">
				<div class="col-sm-1">
				</div>
				<div class="col-sm-6">
				<button type="submit" class="btn btn-default">Log In</button>
				</div>
			</div>
			<div class="row">
				<center>
				<p>belum punya akun? <a href="registrasi.php">Sign Up</a></p>
				<p><a href="#">Lupa Password?</a></p>
				</center>
			</div>
			</form>
		</div>
		<div class="col-sm-3"></div>
		</center>
</body>
</html>
<?php
}
else {
	header('location:materi.php');
}
?>