<?php
// serialize_unserialize/intro.php
class nisra{
    public $category = "security";
}

$x = new nisra;
echo (serialize($x));
?>