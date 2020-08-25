<?php
include "../common/check-login.php";

session_start();
if (!isAuthenticated()) {
  if (($_POST['username'] == "afadhitya") && ($_POST['password']  == "password")) {
    $_SESSION["authenticated"] = true;
    header("Location: ../");
  } else {
    $_SESSION["authenticated"] = false;
    header("Location: ../login/?error=1");
  }
} else {
  $_SESSION["authenticated"] = false;
  header("Location: ../login");
}
?>