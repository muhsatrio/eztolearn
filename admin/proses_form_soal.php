<?php

include "../lib/koneksi.php";

// $judul = $_POST['judul'];

$materi = $_POST['materi'];

$soal = $_POST['content'];

$a = $_POST['opsia'];

$b = $_POST['opsib'];

$c = $_POST['opsic'];

$d = $_POST['opsid'];

$e = $_POST['opsie'];

$jawab = $_POST['jawabanSoal'];

mysqli_query($con,"insert into soal(id_materi,soal,a,b,c,d,e,jawaban) VALUES('$materi','$soal','$a','$b','$c','$d','$e','$jawab')");

header('location: soal.php');
// echo "$judul\n";

// echo "$artikel\n";

?>