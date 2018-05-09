<?php

include "../lib/koneksi.php";

$id = $_GET['id'];

$ambil = mysqli_query($con,"select * from soal where id_materi = '$id'");

$jumlah = $_POST['jumlah'];

$benar = 0;

$i=1;

while ($r = mysqli_fetch_array($ambil)) {
	$temp = $_POST["jawab$i"];
	if ($temp == $r[8])
		$benar++;
	// echo "$temp \n";
	// echo "$r[8]";
	$i++;
	// if ($temp!="" && $temp==)
}

$hasil = ($benar/$jumlah)*100;

echo "
<script type='text/javascript'>
alert('Score anda untuk latihan soal ini: $hasil');
window.location.href = 'soal.php';
</script>
";

// header('location:soal.php');

// echo $hasil;

// session_start();

// $_SESSION["nilai"] = $hasil;

// echo $jumlah;

?>