<?php

$dayOfWeek = 1;

if ($dayOfWeek === 1) {
    echo "It's Monday.";
} elseif ($dayOfWeek === 2) {
    echo "It's Tuesday.";
} elseif ($dayOfWeek === 3) {
    echo "It's Wednesday.";
} elseif ($dayOfWeek === 4) {
    echo "It's Thursday.";
} elseif ($dayOfWeek === 5) {
    echo "It's Friday.";
} elseif ($dayOfWeek === 6) {
    echo "It's Saturday.";
} elseif ($dayOfWeek === 7) {
    echo "It's Sunday.";
} else {
    echo "No valid day.";
}

$daysOfWeek = [
    1 => "Monday",
    2 => "Tuesday",
    3 => "Wednesday",
    4 => "Thursday",
    5 => "Friday",
    6 => "Saturday",
    7 => "Sunday"
];

var_dump(array_keys($daysOfWeek));

if (in_array($dayOfWeek, array_keys($daysOfWeek))) {
    echo $daysOfWeek[$dayOfWeek];
} else {
    echo "No valid day";
}

$name = "Alexander Schlager Birthday";

if ($name) {
    echo "Your name is " . $name;

    if (strlen($name) > 10) {
        echo ". You have a long name.";
    }
}

if (!$name){
    return;
}

echo "Your name is " . $name . ".";

if (strlen($name) > 10) {
    echo ". You have a long name.";
}

if (1) {
    echo "I will always run.";
}

if (-1) {
    echo "I will always run.";
}

if (0) {
    echo "I will never run.";
}