<?php

session_start();
if ($_SESSION["useradmin"]=="" && $_SESSION["passadmin"]=="") {
	header('location:login.php');
}
else {

include "../lib/koneksi.php";

$ambil = mysqli_query($con,"select * from soal");

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
		<a class="btn btn-primary btn-md" href="form_soal.php" role="button">Tambah Soal Baru</a>
	</div>
	<div class="col-sm-4 spasiAtas">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>No.</th>
					<th>Id Materi</th>
					<th>Nama Materi</th>
					<th>Soal</th>
					<th>a</th>
					<th>b</th>
					<th>c</th>
					<th>d</th>
					<th>e</th>
					<th>Jawaban</th>
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
					<?php
					$carimateri = mysqli_query($con,"select judul from materi where id_materi='$r[1]'");
					$rr = mysqli_fetch_array($carimateri);
					?>
					<td><?php echo $rr[0]; ?></td>
					<td><?php echo $r[2]; ?></td>
					<td><?php echo $r[3]; ?></td>
					<td><?php echo $r[4]; ?></td>
					<td><?php echo $r[5]; ?></td>
					<td><?php echo $r[6]; ?></td>
					<td><?php echo $r[7]; ?></td>
					<td><?php echo $r[8]; ?></td>
					<td><a href="hapus_soal.php?id=<?php echo $r[0] ?>">Hapus</a></td>
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