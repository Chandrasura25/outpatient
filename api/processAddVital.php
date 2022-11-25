<?php
require "classes/vital.php";
session_start();
if(isset($_POST['submit'])){
    $weight=$_POST['weight'];
    $height=$_POST['height'];
    $temp=$_POST['Temp'];
    $date=$_POST['date'];
    $recorder_id=$_POST['rec_id'];
    $patient_id=$_POST['pat_id'];
    $doctor_id=$_POST['doc_id'];
    $blood_pressure=$_POST['blood_pressure'];
    $pulse_rate=$_POST['pulse_rate'];
    $record = new Vitals();
    $insert = $record->addVitals($weight,$height,$temp, $date, $recorder_id, $patient_id, $doctor_id, $blood_pressure,$pulse_rate);
    if ($insert) {
        echo "Vitals added successfully";
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