<?php

$views = 0;

$views = $views + 1;

$views++;
$views--;

$views += 10;
$views -= 4;

echo $views;

$totalLessons = 30;
$completedLessons = 7;

$percentageComplete = number_format(($completedLessons / $totalLessons) * 100, 2);

echo "You've completed {$percentageComplete}%";

$balance = 500;
$cost = 25;

echo $balance -= $cost;

$a = 10.5;
$b = 8.2;

echo $a % $b;

$rows = 10;

for ($row = 1; $row <= $rows; $row++) {
    echo $row;
    if ($row % 2 === 0) {
        echo "Even";
    } else {
        echo "Odd";
    }
}

$a = 10;

echo $a ** 2;