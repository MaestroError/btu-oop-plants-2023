<?php

require "imports.php";

use Plants\Tree;

$oak = new Tree("Oak", 46, 3);
echo $oak->grow() . " \n";
$oak->BloomNow();

$banana = new Plants\Trees\Banana(1, 2);

for ($i=0; $i < 10; $i++) { 
    $banana->grow();
    if ($banana->growRate == 3) {
        $banana->BloomNow();
    }
    $banana->bore();
}