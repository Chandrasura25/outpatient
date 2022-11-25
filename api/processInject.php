<?php
require "classes/inject.php";
session_start();
if (isset($_POST['submit'])) {
    print_r($_POST);
    $description = $_POST['description'];
    $comment = $_POST['comment'];
    $recorder_id = $_POST['rec_id'];
    $patient_id = $_POST['p_id']; 
    $record = new Injects();
    $insert = $record->addInjects($description,$comment,$patient_id, $recorder_id);
    if ($insert) {
        echo "Injections added successfully";
        header('Location: staffDashboard.php');
    } else {
        $_SESSION['details_error']="Details is not inserted";
        header('Location: nurseSignup.php');
}  
}
else{
    header('Location: nurseSignin.php');
}
?>