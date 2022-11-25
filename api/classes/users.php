<?php
 require_once "config.php";
 class Users extends Config{
    public function __construct (){
        Parent::__construct();
    }

    public function getAllDept(){
        $query = "SELECT * FROM department";
        $binder = null;
       return $this->read($query,$binder);
    }
    
    public function signUpUser($full_name, $email, $phone_no, $dob, $gender, $hashpassword,$username,$newName){
        $query = "INSERT INTO users (full_name,email,phone_no,dob,gender,password,username,profilePic) VALUES (?,?,?,?,?,?,?,?)";
        $binder = array('ssssssss',$full_name, $email, $phone_no, $dob, $gender, $hashpassword,$username,$newName);
       return $this->create($query,$binder);
    }

    public function signInUser($email,$password){
        $query = "SELECT * FROM users WHERE email = ?";
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
    public function getInfo($user_id){
      $query = "SELECT * FROM users WHERE user_id = ?";
      $binder = array('s',$user_id);
       return $this->read($query,$binder);
    }
 }

?>