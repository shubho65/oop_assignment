<?php
include 'MyName.php';

$name=new MyName();
$name->setNickName("roni");
echo $name->printName();
echo "<br/>";
$fname=new FullName();
$fname->setFullName("shubho kumar");
echo $fname->printName();
?>