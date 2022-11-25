<?php
require "classes/consult.php";
session_start();
if (isset($_POST['submit'])) {
    $pat_id = $_POST['card_id'];
    $consult_date=$_POST['date'];
    $doc_id=$_POST['doc_id'];
    $referred=$_POST['referred'];
    $dept_id=$_POST['dept_id'];
    $app_desc = $_POST['app_desc'];
    $record = new Consults();
    $insert = $record->addConsults($pat_id, $consult_date, $doc_id, $referred, $dept_id,$app_desc);
    if ($insert) {
        echo "Consultation added successfully";
        header('Location: staffDashboard.php');
    } else {
        $_SESSION['details_error']="Details is not inserted";
        header('Location: nurseSignup.php');
}   
}
?>