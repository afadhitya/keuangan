<?php
session_start();
$_SESSION["authenticated"] = true;
$path = "/keuangan/";
header("Location: " . $path);
?>