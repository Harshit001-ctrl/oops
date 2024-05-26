<?php 

class student{

    private $id;

    private $name;
    private $class;
    private $mobile;



    public function setid($id){
        $this->id=$id;
    }

    public function getid(){
        return $this->id;
    }

    public function setname($name){
        $this->name=$name;
    }

    public function getname(){
        return $this->name;
    }

    public function setclass($class){
        $this->class=$class;
    }

    public function getclass(){
        return $this->class;
    }

    public function setmobile($mobile){
        $this->mobile=$mobile;
    }

    public function getmobile(){
       return $this->mobile;
    }

}
$obj=new student();
?>