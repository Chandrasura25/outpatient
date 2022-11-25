<?php
  header("Access-Control-Allow-Origin:*");
  header("Access-Control-Allow-Headers:Content-Disposition,Content-Type,Content-Length,Accept-Encoding,Authorization,X-Requested-With");
  class Config{
    protected $localhost ='localhost';
    protected $username ='root';
    protected $dbName ='hospital';
    protected $password ='';
    public $connectdb = "";
    public $res =[];
    public function __construct()
    {
        $this->connectdb = new mysqli($this->localhost, $this->username,$this->password, $this->dbName);
        if($this->connectdb->connect_error){
          die ("Unable to connect".$this->connectdb->connect_error);
        }
    }

    public function create($query,$binder){
      $statement = $this ->connectdb->prepare($query);
       $statement->bind_param(...$binder);
      if($statement->execute()){
        $this->res['success']= true;
      }
      else{
        $this ->res['success'] = false;
    }
     return $this->res;
    }
    
    public function read($query,$binder){
        $statement = $this->connectdb->prepare($query);
        if($binder){
            $statement->bind_param(...$binder);
        }
        $getResult = $statement->execute();
        if($getResult){
           $fetch = $statement -> get_result();
           $this->res['success'] = true;
           $this->res['result'] = mysqli_fetch_all($fetch,MYSQLI_ASSOC);
           
        }
        else{
            $this ->res['success'] = false;
        }
        return $this->res;
    }
    
    public function delete(){
        
    }
    
    public function update(){
        
    }
  }
?>
