<?php

include "../lib/koneksi.php";
session_start();
$user = $_SESSION["user"];
$tanya = $_POST["content"];

if (mysqli_query($con,"insert into tanya(username,pertanyaan) values('$user','$tanya')")) {
echo "
<script type='text/javascript'>
alert('Pertanyaan berhasil terkirim!');
window.location.href = 'tanyaJawab.php';
</script>
";
}
else {
	echo "
<script type='text/javascript'>
alert('Pertanyaan gagal terkirim');
window.location.href = 'tanyaJawab.php';
</script>
";
}
?>