<?php

session_start();
if ($_SESSION["useradmin"]=="" && $_SESSION["passadmin"]=="") {
	header('location:login.php');
}
else {

include "../lib/koneksi.php";

$ambil = mysqli_query($con,"select * from materi");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Materi - Admin</title>
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
		<a class="btn btn-primary btn-md" href="index.php" role="button">Back</a>
		<a class="btn btn-primary btn-md" href="form_materi.php" role="button">Tambah Materi Baru</a>
	</div>
	<div class="col-sm-4 spasiAtas">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>No.</th>
					<th>Judul Materi</th>
					<th>Isi Materi</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
			<?php
			$no=1;
			while ($r=mysqli_fetch_row($ambil)) {
				?>
				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $r[1]; ?></td>
					<td><?php echo $r[2]; ?></td>
					<td><a href="hapus_materi.php?id=<?php echo $r[0] ?>">Hapus</a></td>
				</tr>
			<?php
			$no++;
			}
			?>			
			</tbody>
		</table>		
	</div>
</body>
</html>

<?php
}
?>