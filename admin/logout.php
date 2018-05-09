<?php

session_start();
$_SESSION["useradmin"] = "";
$_SESSION["passadmin"] = "";

header('location: ../index.php');

?>