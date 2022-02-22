<?php

//both are correct
$name = null;
//or
$name = NULL;

var_dump($name);

$name = "Emanuel";

echo $name;

//delete variable
unset($name);
//better to type
$name = null;

echo $name;