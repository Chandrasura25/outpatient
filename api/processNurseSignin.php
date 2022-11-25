<?php
require "classes/nurses.php";
session_start();
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password=$_POST['password'];
    $nurse = new Nurses();
    $insert = $nurse->signInNurse($email, $password);
    if ($insert) {
        $_SESSION['nurse_success'] = true;
        $_SESSION['nurse_details'] = $insert['result'];
        header('Location: staffDashboard.php');
    } else {
        $_SESSION['details_error']="Details is not inserted";
        print_r($_SESSION['doctor_err']);
        header('Location: nurseSignin.php');
} 
} else {
    header('Location: nurseSignin.php');
    $_SESSION['details_error']="The Submit is not working";
}
?>