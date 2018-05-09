<?php

include "../lib/koneksi.php";

$judul = $_POST['judul'];

$artikel = $_POST['link'];

mysqli_query($con,"insert into video(nama,link) VALUES('$judul','$artikel')");

header('location: video.php');
// echo "$judul\n";

// echo "$artikel\n";

?>