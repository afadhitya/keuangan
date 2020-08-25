<?php
session_start();
if (!$_SESSION["authenticated"]) {
  $path = "/keuangan/login";
  header("Location: " . $path);
} 
?>