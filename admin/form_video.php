<?php

session_start();
if ($_SESSION["useradmin"]=="" && $_SESSION["passadmin"]=="") {
	header('location:login.php');
}
else {

?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Video - Admin</title>
	<script type="text/javascript" src="../js/bootstrap.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/npm.js"></script>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="../js/operation.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<div class="row spasiAtas spasiKiri">
		<a class="btn btn-primary btn-md" href="video.php" role="button">Back</a>
	</div>
	<div class="row spasiAtas">
			<form method="post" action="proses_form_video.php">
			<div class="row spasiKiri spasiBawah">
				<div class="col-sm-3">
				Judul Video:
				</div>
				<div class="col-sm-7">
				<input type="text" class="form-control" name="judul">
				</div>
			</div>
			<div class="row spasiKiri spasiBawah">
				<div class="col-sm-3">
				Link Youtube:
				</div>
				<div class="col-sm-7">
				<input type="text" class="form-control" name="link" value="https://www.youtube.com/embed/">
				</div>
			</div>
			<div class="row spasiKiri spasiBawah">
				<div class="col-sm-1">
				</div>
				<div class="col-sm-6">
				<button type="submit" class="btn btn-default">Submit</button>
				</div>
			</div>
			</form>
		</div>
</body>
</html>

<?php
}
?>