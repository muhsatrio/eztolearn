<?php

include "../lib/koneksi.php";

mysqli_query($con,"delete from materi where id_materi='$_GET[id]'");
header('location: materi.php');

?>