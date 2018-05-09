<?php

session_start();

$_SESSION["useradmin"] = "";
$_SESSION["passadmin"] = "";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login - Admin</title>
	<script type="text/javascript" src="../js/bootstrap.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/npm.js"></script>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/operation.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<div class="col-sm-4 spasiAtas">
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
			</form>
		</div>
</body>
</html>