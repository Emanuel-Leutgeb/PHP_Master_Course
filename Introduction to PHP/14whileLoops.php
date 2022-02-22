<?php

$i = 0;
while (true) {
    echo "Hello";
    $i++;
    if ($i === 10) {
        break;
    }
}

$currentNumber = 1;
$endAt = 10;
$incrementBy = 1;

while ($currentNumber <= $endAt) {
    echo $currentNumber;
    $currentNumber += $incrementBy;
}

$numberIWant = 3;

while (($diceRoll = rand(1, 6)) !== $numberIWant) {
    echo "You rolled a $diceRoll, we need a $numberIWant";
}

echo "Correct Number";

do {
    echo "doWhileLoop";
} while (false);