<?php 
require_once("dao.php");
require_once("student.php");

if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $class=$_POST['class'];
    $mobile=$_POST['mobile'];


    $obj=new student();
    $obj->setid($id);
    $obj->setname($name);
    $obj->setclass($class);
    $obj->setmobile($mobile);


    $db=new DB();
}





?>