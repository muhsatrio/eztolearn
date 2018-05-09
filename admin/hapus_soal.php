<?php

include "../lib/koneksi.php";

mysqli_query($con,"delete from soal where id_soal='$_GET[id]'");
header('location: soal.php');

?>