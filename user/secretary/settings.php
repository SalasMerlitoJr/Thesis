<?php
include '../../includes/functions.php'; //include functions
include '../../includes/connect.php'; //include connection
$ufunc = new UserFunctions;
$chss = new Login;
$chss->SessionCheck();
//Check user role is true
if (!isset($_SESSION['email']) || $_SESSION['type'] != 'secretary') {
  header("Location:../../includes/logout.php");
}
?>
