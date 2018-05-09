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
	<title>Form Materi - Admin</title>
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
		<a class="btn btn-primary btn-md" href="materi.php" role="button">Materi</a>
		<a class="btn btn-primary btn-md" href="soal.php" role="button">Kuis</a>
		<a class="btn btn-primary btn-md" href="video.php" role="button">Video</a>
		<a class="btn btn-primary btn-md" href="#" role="button">Tanya Jawab</a>
		<a class="btn btn-primary btn-md" href="logout.php" role="button">Logout</a>
	</div>
</body>
</html>

<?php
}
?>