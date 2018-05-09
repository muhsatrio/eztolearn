<?php

include "../lib/koneksi.php";

$judul = $_POST['judul'];

$artikel = $_POST['content'];

mysqli_query($con,"insert into materi(judul,materi) VALUES('$judul','$artikel')");

header('location: materi.php');
// echo "$judul\n";

// echo "$artikel\n";

?>