<?php

$config = [
    "separator" => " "
];

function fullName($firstName, $lastName, $config)
{
//    global $config;
    return "{$firstName}{$config["separator"]}{$lastName}";
}

//echo $fullName = fullName("Emanuel", "Leutgeb");
//or
echo $fullName = fullName("Emanuel", "Leutgeb", $config);#


$fullName = function ($firstName, $lastName) use ($config) {
    return "{$firstName}{$config["separator"]}{$lastName}";

};

echo $fullName("Emanuel", "Leutgeb");
