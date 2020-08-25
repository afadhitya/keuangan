<?php
session_start();
$_SESSION["authenticated"] = false;
$path = "/keuangan/login";
header("Location: " . $path);
?>