<?php
// serialize_unserialize/magic_methods.php
class Student{
    public function __construct($id, $name, $gender){
        $this->id = $id;
        $this->name = $name;
        $this->gender = $gender;
        $this->info = sprintf("ID: %s\nName: %s\nGender: %s\n\n", $this->id, $this->name, $this->gender);
    }

    public function __destruct(){
        echo "Here is __destruct() function.\n";
    }

    public function __sleep(){
        return ['id', 'name', 'gender'];
    }

    public function __wakeup(){
        echo "Here is __wakeup() function.\n\n";
    }

    public function __toString(){
        return "You try to print out an object, here's the result.\n".$this->info;
    }
}

$theo = new Student('404262XXX', "Theo", "Male");
$string = serialize($theo);
echo $string."\n\n";
echo $theo;