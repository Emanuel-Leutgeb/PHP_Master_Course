<?php

if (1 && true || 0 && false) {
    echo "I will be everytime run.";
}

if (1 && false || 1 && false) {
    echo "I will never run.";
}

$username = "Alex";
$password = "iLoveTractors";

if ($username === "Alex" && $password === "iLoveTractors") {
    echo "You are logged in.";
}

$dayOfWeek = 6;

if ($dayOfWeek == 6 || $dayOfWeek == 7) {
    echo "The weekend is here.";
}

$workingTheWeekend = true;

if (($dayOfWeek == 6 || $dayOfWeek == 7) && !$workingTheWeekend) {
    echo "You have a day of.";
}