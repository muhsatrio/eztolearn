<?php

session_start();
$_SESSION["user"] = "";
$_SESSION["pass"] = "";

header('location: ../index.php');

?>