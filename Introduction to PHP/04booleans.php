<?php

$fileIsUploaded = true;  //true = 1
$fileIsUploaded = false; //false = 0


if ($fileIsUploaded) {
    echo "Your File is uploaded.";
}

$isInt = is_int(1);

if ($isInt){
    echo "That is an Integer.";
}

var_dump(is_int("Emanuel"));