<?php

session_start();
if ($_SESSION["user"]=="" && $_SESSION["pass"]=="") {
	header('location:login.php');
}
else {

?>

<!DOCTYPE html>
<html>
<head>
	<title>Materi - EzToLearn</title>
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
		<div class="row spasiAtas">
			<div class="col-sm-1">
			</div>
			<div class="col-sm-9">
			<p class="header1">EzToLearn</p>
			<p class="header2">Probabilitas dan Statistika</p>
			</div>
			<div class="col-sm-1 logoHome">
				<span class="spasiKecilKanan glyphicon glyphicon-home linkLogo"></span>
			</div>
			<div class="col-sm-1">
			<center>
			<div class="logoUser">
			<span class="glyphicon glyphicon-user linkLogo"></span>
			</div>
			<div class="menu infoAkun garis">
			Akun
			</div>
			<div class="menu editProfiles garis spasiBawah">Edit Akun
			</div>
			<div class="menu logout garis">Logout
			</div>
			</center>
			</div>
		</div>
		
		<div class="col-sm-1">
		</div>
		<div class="col-sm-2 spasiAtas nopadding">
			<div class="menu menuMateri garis spasi">
				Kumpulan Materi
			</div>
			<div class="menu menuSoal garis spasi">
				Kumpulan Soal
			</div>
			<div class="menu menuVideo garis spasi">
				Belajar Lewat Video
			</div>
			<div class="menu menuTanya garis spasi">
				Tanya/Jawab
			</div>
		</div>
		<div class="kotakMateri col-sm-7 garis spasiBawah">
			<div class="row spasiBawah">
				<div class="col-sm-8">
					<h3>KUMPULAN MATERI</h3>
				</div>
				<div class="col-sm-4 spasiAtas">
				<form method=post action="#">
					<div class="input-group">
      					<input type="text" class="form-control" placeholder="Search" name="search">
      					<div class="input-group-btn">
        					<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
     					 </div>
    				</div>
    			</form>
				</div>
			</div>
			<div class="ruangMateri row">
				<?php
					$i=1;
					include "../lib/koneksi.php";
					$ambil = mysqli_query($con,"select * from materi");
					while ($r = mysqli_fetch_row($ambil)) {
					// for ($i=1;$i<=5;$i++) {
						?>
						<div class="buttonMateri<?php echo $i ?> garis spasi">
						<p><?php echo $r[1] ?></p>
						</div>
						<div class="areaMateri<?php echo $i ?> garis spasi">
						<p><?php echo $r[2] ?></p>
						</div>
						<?php
						$i++;
					}
				?>
			</div>
			<div class="col-sm-1">
			</div>
		</div>
		<div class="col-sm-1"></div>
</body>
</html>

<?php
}
?>