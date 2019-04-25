<?php
// Student.php
class Student {
    private $id;
    private $name;

    function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }

    public function get_id(){
        return $this->id;
    }

    public function get_info(){
        return "學號：".$this->id."\t姓名：".$this->name;
    }
}
?>