<?php

class oopCrud
{
    private $servername='localhost';
    private $username='root';
    private $dbname = "appointo";
    private $password='Welcome@123';
    private $conn;
    
    public function __construct(){
        
        $this->conn = new PDO("mysql:servername=".$this->servername.";dbname =".$this->dbname ,$this->username,$this->password);
    }
    
    public function showData($table){
        
        $sql="SELECT * FROM $account_master";
        $q = $this->conn->query($sql) or die("failed!");
        
        while($r = $q->fetch(PDO::FETCH_ASSOC)){
            $data[]=$r;
        }
        return $data;
    }
    
    public function getById($id,$table){
        
        $sql="SELECT * FROM $account_master WHERE id = :id";
        $q = $this->conn->prepare($sql);
        $q->execute(array(':id'=>$id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
    
    
    public function insertData($name,$email,$mobile,$address,$pwd,$type){
        
        $sql = "INSERT INTO $table SET name=:name,email=:email,phoneno=:phoneno,address=:address,type-:type";
        $q = $this->conn->prepare($sql);
        $q->execute(array(':name'=>$name,':email'=>$email,
            ':mobile'=>$mobile,':address'=>$address,':type'=>$type));
        return true;
    }
    
    public function deleteData($id,$table){
        
        $sql="DELETE FROM $account_master WHERE id=:id";
        $q = $this->conn->prepare($sql);
        $q->execute(array(':id'=>$id));
        return true;
    }
}

?>
