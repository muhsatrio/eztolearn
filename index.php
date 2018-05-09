<?php

session_start();
$_SESSION["user"] = "";
$_SESSION["pass"] = "";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Home - EzToLearn</title>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/npm.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/operation.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="bodyUser">
		<center>
		<div class="row header judul">
		<p class="header1">EzToLearn</p>
		<p class="header2">Probabilitas dan Statistika</p>
		</div>
		<div class="col-sm-3">
		</div>
		<div class="kotakUtama col-sm-6 spasiAtas" style="padding: 50px">
			<div class="row">
				<div class="col-sm-4">
				<p style="font-size: 60px"><span class="glyphicon glyphicon-th-list"></span></p>
				<p><b>Fitur EzToLearn</b></p>
				</div>
				<div class="col-sm-4">
				<p style="font-size: 60px"><span class="glyphicon glyphicon-info-sign"></span></p>
				<p><b>Tentang EzToLearn</b></p>
				</div>
				<div class="col-sm-4">
				<p style="font-size: 60px"><span class="glyphicon glyphicon-question-sign"></span></p>
				<p><b>FAQ EzToLearn</b></p>
				</div>
			</div>
			<div class="row">
			<center>
				<p>------------------------</p>
				<p style="font-size: 20px">Let's have fun and learn together!</p>
			</center>
			</div>
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-2">
				<p><a class="btn btn-success btn-lg" href="users/registrasi.php" role="button">Registrasi</a></p>
				</div>
				<div class="col-sm-1"></div>
				<div class="col-sm-2">
				<p><a class="btn btn-success btn-lg" href="users/login.php" role="button">Login</a></p>
				</div>
				<div class="col-sm-3">
				</div>
			</div>
		</div>
		<div class="col-sm-3"></div>
		</center>
</body>
</html>

