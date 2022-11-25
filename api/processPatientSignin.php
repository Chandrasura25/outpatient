<?php
require "classes/users.php";
session_start();
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password=$_POST['password'];
    $user = new Users();
    $insert = $user->signInUser($email, $password);
    if ($insert) {
        $_SESSION['user_success'] = true;
        $_SESSION['user_details'] = $insert['result'];
        header('Location: patientDashboard.php');
    } else {
        $_SESSION['details_error']="Details is not inserted";
        header('Location: patientSignin.php');
} 
} else {
    header('Location: patientSignin.php');
    $_SESSION['details_error']="The Submit is not working";
}
?>