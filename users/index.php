<?php

session_start();
if ($_SESSION["user"]=="" && $_SESSION["pass"]=="") {
	header('location:login.php');
}
else {
	header('location:materi.php');
}

?>