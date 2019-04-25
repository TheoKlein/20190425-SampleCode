<?php
// serialize_unserialize/unserialize_intro.php
class nisra{
    public $category = "security";
    public $members = 0;
}

$x = new nisra;
$x->members = 10;

$tmp = serialize($x);
$new_x = unserialize($tmp);
echo $new_x->members;
?>