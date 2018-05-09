<?php

session_start();
if ($_SESSION["useradmin"]=="" && $_SESSION["passadmin"]=="") {
	header('location:login.php');
}
else {
	include "../lib/koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Soal - Admin</title>
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
		<a class="btn btn-primary btn-md" href="soal.php" role="button">Back</a>
	</div>
	<div class="row spasiAtas">
			<form method="post" action="proses_form_soal.php">
			<div class="row spasiKiri spasiBawah">
				<div class="col-sm-3">
				Materi:
				</div>
				<div class="col-sm-7">
				<select name="materi">
				<?php
				$ambil = mysqli_query($con,"select * from materi");
				while ($r = mysqli_fetch_array($ambil)) {
				?>
					<option value="<?php echo $r[0] ?>"><?php echo $r[1] ?></option>
				<?php
				}
				?>
				</select>
				</div>
			</div>
			<div class="row spasiKiri spasiBawah">
				<div class="col-sm-3">
				Soal:
				</div>
				<div class="col-sm-7">
				<textarea cols="80" rows="10" id="content" name="content"> 
      			</textarea>
      			<script type="text/javascript">
      				CKEDITOR.replace('content')
      			</script>
				</div>
			</div>
			<div class="row spasiKiri spasiBawah">
				<div class="col-sm-3">
				a.
				</div>
				<div class="col-sm-7">
				<input type="text" class="form-control" name="opsia">
				</div>
			</div>
			<div class="row spasiKiri spasiBawah">
				<div class="col-sm-3">
				b.
				</div>
				<div class="col-sm-7">
				<input type="text" class="form-control" name="opsib">
				</div>
			</div>
			<div class="row spasiKiri spasiBawah">
				<div class="col-sm-3">
				c.
				</div>
				<div class="col-sm-7">
				<input type="text" class="form-control" name="opsic">
				</div>
			</div>
			<div class="row spasiKiri spasiBawah">
				<div class="col-sm-3">
				d.
				</div>
				<div class="col-sm-7">
				<input type="text" class="form-control" name="opsid">
				</div>
			</div>
			<div class="row spasiKiri spasiBawah">
				<div class="col-sm-3">
				e.
				</div>
				<div class="col-sm-7">
				<input type="text" class="form-control" name="opsie">
				</div>
			</div>
			<div class="row spasiKiri spasiBawah">
				<div class="col-sm-3">
				Jawaban:
				</div>
				<div class="col-sm-7">
				<select name="jawabanSoal">
					<option value="a">a</option>
					<option value="b">b</option>
					<option value="c">c</option>
					<option value="d">d</option>
					<option value="e">e</option>
				</select>
				<!-- <input type="text" class="form-control" name="judul"> -->
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