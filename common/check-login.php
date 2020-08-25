<?php
session_start();
function isAuthenticated() {
  if ($_SESSION["authenticated"]) {
    return true;
  }
  return false;
} 
?>