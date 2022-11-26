<?php
 require_once "config.php";
 class Nurses extends Config{
    public function __construct (){
        Parent::__construct();
    }

    public function getAllNurses (){
        $query = "SELECT * FROM nurses INNER JOIN `department` ON department.dept_id = nurses.dept_id WHERE department.dept_id = 9";
        $binder = null;
       return $this->read($query,$binder);
    }
    public function getAllDocs (){
      $query = "SELECT * FROM nurses INNER JOIN `department` ON department.dept_id = nurses.dept_id WHERE department.dept_id = 8";
      $binder = null;
     return $this->read($query,$binder);
  }
    public function getAllStaffs (){
      $query = "SELECT * FROM nurses INNER JOIN `department` ON department.dept_id = nurses.dept_id";
      $binder = null;
     return $this->read($query,$binder);
  }
    public function signUpNurse($firstname,$lastname, $dept_id, $email, $phone_no, $hashpassword, $address, $newName){
        $query = "INSERT INTO nurses (firstname,lastname,dept_id,email,phone_no,password,address,profilePic) VALUES (?,?,?,?,?,?,?,?)";
        $binder = array('ssssssss',$firstname,$lastname, $dept_id, $email, $phone_no, $hashpassword, $address, $newName);
       return $this->create($query,$binder);
    }

    public function signInNurse($email,$password){
        $query = "SELECT * FROM nurses WHERE email = ?";
        $binder = array('s',$email);
         $readedEmail = $this->read($query,$binder);
         if($readedEmail){
          $pass=$readedEmail['result'][0]['password'];
            $verify = password_verify($password,$pass);
           $_SESSION['user_details']=$readedEmail['result'];
          if($verify){
             return $this->read($query,$binder);
          }
       }
    }
    public function getInfo($nurse_id){
      $query = "SELECT * FROM nurses INNER JOIN `department` ON department.dept_id = nurses.dept_id WHERE nurse_id = ?";
      $binder = array('s',$nurse_id);
       return $this->read($query,$binder);
    }
 }

?>