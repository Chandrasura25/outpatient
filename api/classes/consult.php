<?php
 require_once "config.php";
 class Consults extends Config{
    public function __construct (){
        Parent::__construct();
    }
    public function addConsults($pat_id, $consult_date, $doc_id, $referred, $dept_id,$app_desc){
        $query = "INSERT INTO consultation (pat_id, consult_date, doc_id, referred, dept_id,app_desc) VALUES (?,?,?,?,?,?)";
        $binder = array('ssssss',$pat_id, $consult_date, $doc_id, $referred, $dept_id,$app_desc);
       return $this->create($query,$binder);
    }
 }

?>