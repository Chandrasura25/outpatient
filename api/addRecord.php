<?php
require "classes/patients.php";
session_start();
if (isset($_POST['submit'])) {
    print_r($_POST);
    $card_id = $_POST['card_id'];
    $patient_name = $_POST['patient_name'];
    $address = $_POST['address'];
    $age=$_POST['age'];
    $phone_no=$_POST['phoneNo'];
    $marital_status = $_POST['marital_status'];
    $nationality=$_POST['nationality'];
    $date=$_POST['date'];
    $nurse_id=$_POST['nurse_id'];
    $recorder_id=$_POST['rec_id'];
    $record = new Patients();
    $insert = $record->addPatientRec($card_id,$patient_name,$address, $age, $phone_no, $marital_status, $nationality, $date,$nurse_id,$recorder_id);
    if ($insert) {
        echo "Record added successfully";
        header('Location: staffDashboard.php');
    } else {
        $_SESSION['details_error']="Details is not inserted";
        header('Location: nurseSignup.php');
}   
}
?>