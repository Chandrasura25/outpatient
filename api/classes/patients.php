<?php
 require_once "config.php";
 class Patients extends Config{
    public function __construct (){
        Parent::__construct();
    }

    // public function getAllPatients(){
    //     $query = "SELECT * FROM patients";
    //     $binder = null;
    //    return $this->read($query,$binder);
    // }
    public function getAllPatients(){
        $query = "SELECT * FROM patients INNER JOIN `nurses` ON nurses.nurse_id = patients.recorder_id";
        $binder = null;
       return $this->read($query,$binder);
    }
    public function addPatientRec($card_id, $patient_name, $address, $age, $phone_no, $marital_status, $nationality, $date,$nurse_id,$recorder_id,$blood_group){
        $query = "INSERT INTO patients (card_id,patient_name,address, age, phone_no, marital_status, nationality, date,nurse_id,recorder_id,blood_group) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
        $binder = array('sssssssssss',$card_id,$patient_name,$address, $age, $phone_no, $marital_status, $nationality, $date,$nurse_id,$recorder_id,$blood_group);
       return $this->create($query,$binder);
    }
    public function getInfo($user_id){
      $query = "SELECT * FROM users WHERE user_id = ?";
      $binder = array('s',$user_id);
       return $this->read($query,$binder);
    }
 }

?>