<?php
function potentMe($number)
{
    $numbers = [];
    for ($i = 0; $i <= 10; $i++) {
        $numbers[$i] = $number ** $i;
    }
    return $numbers;
}

function printMe($numbers)
{
    echo '<pre>', var_dump($numbers), '</pre>';
}
