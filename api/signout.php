<?php
include 'classes/config.php';

if (isset($_POST['signout'])) {
  session_unset();
  header('Location: nurseSignin.php');
}
?>