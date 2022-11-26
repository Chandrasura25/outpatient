<?php
 require_once "config.php";
 class Vitals extends Config{
    public function __construct (){
        Parent::__construct();
    }

    public function getAllVitals(){
        $query = "SELECT * FROM vitals INNER JOIN `nurses` ON nurses.nurse_id = vitals.recorder_id INNER JOIN `patients` ON patients.pat_id = vitals.patient_id";
        $binder = null;
       return $this->read($query,$binder);
    }
    // public function getAllPatients(){
    //     $query = "SELECT * FROM patients INNER JOIN `nurses` ON nurses.nurse_id = patients.recorder_id";
    //     $binder = null;
    //    return $this->read($query,$binder);
    // }
    public function addVitals($weight,$height,$temp, $date, $recorder_id, $patient_id, $doctor_id, $blood_pressure,$pulse_rate){
        $query = "INSERT INTO vitals (weight,height,temp, date, recorder_id, patient_id, doctor_id, blood_pressure,pulse_rate) VALUES (?,?,?,?,?,?,?,?,?)";
        $binder = array('sssssssss',$weight,$height,$temp, $date, $recorder_id, $patient_id, $doctor_id, $blood_pressure,$pulse_rate);
       return $this->create($query,$binder);
    }
 }

?>