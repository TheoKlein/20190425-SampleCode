<?php
// main.php
require_once("Student.php");

class FJU_Student extends Student{
    function __construct($id, $name){
        parent::__construct($id, $name);
    }
    public function get_info(){
        return "School: FJU\t".$this->name;
    }
}

$theo = new FJU_Student("404262XXX", "Theo");
echo $theo->get_info();
?>