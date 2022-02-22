<?php

function name()
{
    return "Emanuel Leutgeb";
}

echo name();

function fullName($firstName, $lastName)
{
    return "{$firstName} {$lastName}";
    //return $firstName . " " . $lastName;
}

$fullName = fullName("Emanuel", "Leutgeb");

echo $fullName;

$firstName = "Miriam";
$lastName = "Forstinger";

echo fullName($firstName, $lastName);

echo fullNameWithSeperator("SandraTop", "Forstinger");

function fullNameWithSeperator($firstName, $lastName, $separator = " ")
{
    return "{$firstName}{$separator}{$lastName}";
}

echo fullNameWithSeperator("SandraBottom", "Forstinger");

$fullName = function ($firstName, $lastName, $separator = " ") {
    return "{$firstName}{$separator}{$lastName}";
};
//with $ sign
echo $fullName("Mario", "Forstinger");

function fullName2($firstName, $lastName = null)
{
    return "{$firstName} {$lastName}";
}

echo fullName2("Emanuel", "Leutgeb");

function fullNameWithSeperator2($firstName, $lastName = null, $separator = " ")
{
    if (trim($firstName) === "") {
        return;
    }

    if ($lastName === null) {
        return $firstName;
    }
    return "{$firstName}{$separator}{$lastName}";
}

echo fullNameWithSeperator2("Emanuel");
var_dump(fullNameWithSeperator2("    "));


//func_get_args
function add($num1, $num2, $num3)
{
    return $num1 + $num2 + $num3;
}

echo add(2, 2, 2);

$numbers = [2, 4, 6];

function addArray(array $numbers)
{
    $total = 0;

    foreach ($numbers as $number) {
        $total += $number;
    }

    return $total;
}

//echo addArray(1);
echo addArray($numbers);

function addArgs()
{
    var_dump(func_get_args());

    $total = 0;
    foreach (func_get_args() as $number) {
        if (!is_numeric($number)) {
            continue;
        }

        $total += $number;
    }
    return $total;
}

echo addArgs(5, 6, 7, 8, "2Agilox");

function addEasy() {
    return array_sum(func_get_args());
}

echo addEasy(2, 4, 6);