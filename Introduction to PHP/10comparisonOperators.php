<?php

$uploaded = 1;
$uploaded = -5;
$uploaded = "true";
$uploaded = true; // with ===

if ($uploaded === true) {
   echo "Uploaded";
}

$tablesAvailable = true;
$tablesAvailable = "1false";

if ($tablesAvailable) {
    echo "Book a Table";
}

$name = "1Emanuel";
echo $name;
echo (int) $name;

var_dump($name);
var_dump((int) $name);

if ($tablesAvailable !== false) {
    echo "No Table available";
}

if (!$tablesAvailable) {
    echo "No Table available";
}

if ($tablesAvailable <> true) {
    echo "No Table available";
}

$roomsRequested = 3;
$roomsAvailable = 3;

if ($roomsRequested > $roomsAvailable) {
    echo "Not enough rooms.";
}

if ($roomsAvailable < $roomsRequested) {
    echo "Not enough rooms.";
}

if ($roomsRequested >= $roomsAvailable) {
    echo "Not enough rooms.";
}

$maxRoomsAllowed = 5;
$roomsRequested = 5;
$roomsAvailable = 20;

if (($roomsRequested >= $roomsAvailable) || ($roomsRequested >= $maxRoomsAllowed)) {
    echo "Please choose less rooms.";
} else {
    echo "Your booking is complete";
}