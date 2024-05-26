<?php 

class DB{

private $host="localhost";
private $username="username";
private $password="password";
private $database="oopsphp";

private $conn;

public function __construct(){
    
    $this->conn=new mysqli(
        $this->host,
        $this->username,
        $this->password,
        $this->database
    );

    if($this->conn->connect_error){
        die("connection failed". $this->conn->connect_error);
    }
}

public function student($obj){
    $id=$obj->getid();
    $name=$obj->getname();
    $class=$obj->getclass();
    $mobile=$obj->getmobile();


    $stmt=$this->conn->prepare("INSERT INTO student (id,name,class,mobile)VALUES(?,?,?,?)");
    $stmt->bind_param("dsss",$id,$name,$class,$mobile);

    $stmt->execute();

    printf("%d row inserted .\n",$stmt->affected_rows);

    $stmt->close();
}
}
?>