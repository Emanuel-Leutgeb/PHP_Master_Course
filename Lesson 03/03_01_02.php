<?php
include_once "./03_01_03.php";

$number = $_POST["number"] ?? null;
if (!intval(trim($number))) {
    header("Location: http://localhost:8888/Lesson%2003/03_01_01.php");
} else {
    $numbers = fileReader("numbers.txt");

    if ($numbers === null) {
        die("File is null!");
    }

    $newNumbers = [];
    for ($i = 0; $i < count($numbers); $i++) {
        $tempNumber = $numbers[$i] * $number;
        $newNumbers[$i] = $tempNumber;
    }

    $handle = fileWriter($newNumbers);
    if ($handle) {
//        header("Location: http://localhost:8888/Lesson%2003/03_01_01.php");
    }

}


