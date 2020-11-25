<?php
include '../helper.php';

$array =[1 => 10, 2 => 100, 3 => 1000, 4 => 10000];
$splArray = SplFixedArray::fromArray($array);
dump($splArray);
var_dump($splArray);



