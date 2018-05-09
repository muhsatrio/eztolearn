<?php

include "../lib/koneksi.php";

mysqli_query($con,"delete from video where id_video='$_GET[id]'");
header('location: video.php');

?>