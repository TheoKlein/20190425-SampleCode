<?php
// serialize_unserialize/variable_type.php
class Test{
    public $key = "hello world";
    private $test1 = 123;
    protected $test2 = "Abc";
}

$tmp = new Test;
print(serialize($tmp));
?>

