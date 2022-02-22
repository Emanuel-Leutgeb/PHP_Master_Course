<?php

switch (1) {
    case 1:
        echo "The number is one.";
        break;
    case 2:
        echo "The number is two.";
        break;
    default:
        echo "The number is unexpected.";
        break;
}

$weather = "windy";
$color = null;

switch (true) {
    case  $weather == "sunny":
        $color = "blue";
        break;
    case  $weather == "windy":
        $color = "grey";
        break;
}

echo $color;