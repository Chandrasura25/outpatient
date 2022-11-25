<?php
 require_once "config.php";
 class Injects extends Config{
    public function __construct (){
        Parent::__construct();
    }

    // public function getAllPatients(){
    //     $query = "SELECT * FROM patients";
    //     $binder = null;
    //    return $this->read($query,$binder);
    // }
    // public function getAllPatients(){
    //     $query = "SELECT * FROM patients INNER JOIN `nurses` ON nurses.nurse_id = patients.recorder_id";
    //     $binder = null;
    //    return $this->read($query,$binder);
    // }
    public function addInjects($description,$comment,$patient_id, $recorder_id){
        $query = "INSERT INTO docinjection (description,comment,patient_id, recorder_id) VALUES (?,?,?,?)";
        $binder = array('ssss',$description,$comment,$patient_id, $recorder_id);
       return $this->create($query,$binder);
    }
 }

?>