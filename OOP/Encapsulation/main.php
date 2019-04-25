<?php
// main.php

require_once("Student.php");
$theo = new Student("404262XXX", "Theo");

echo $theo.get_info();
?>