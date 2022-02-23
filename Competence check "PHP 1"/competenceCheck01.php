<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="competenceCheck01.css">
    <title>Data storage</title>
</head>
<body>
<h1>
<?php

//Multidimensional arrays
$myArray = [
    [
        "Fritz",
        "Phantom",
        70
    ],
    [
        "Lilo",
        "Knickerbocker",
        37
    ],
    [
        "Thomas",
        "Breziner",
        58
    ],
    [
        "Tom",
        "Turbo",
        27
    ]
];

echo '<pre>', var_dump($myArray), '</pre>';

for ($i = 0; $i < count($myArray); $i++) {
    echo '<pre>', print_r($myArray[$i]), '</pre>';
}

//Associated arrays
$myColors = [
    "Fritz" => "Lila",
    "Lilo" => "Pink",
    "Thomas" => "Gelb",
    "Tom" => "Rot"
];

echo '<pre>', print_r($myColors), '</pre>';

foreach ($myColors as $myColor) {
    echo $myColor, '<br>';
}

//Sort arrays
$tomLikes = ["Schmieröl", "DeBreziner", "Essiggurkerl"];
sort($tomLikes);

echo '<pre>', print_r($tomLikes), '</pre>';
$tricks = [6, 89, 23, 1, 7, 8, 19];

rsort($tricks);
echo '<pre>', print_r($tricks), '</pre>';

ksort($myColors);
echo '<pre>', print_r($myColors), '</pre>';

arsort($myColors);
echo '<pre>', print_r($myColors), '</pre>';

//Strings
$myText = "Die Knickerbockerbande, das sind wir!";
$typeText = gettype($myText);
$lengthText = strlen($myText);

echo "The Text is a '{$typeText}' and has a length of '{$lengthText}'.", '<br>';

$myText = "Tom Turbo mag Schmieröl";
$searchedWord = "Schmieröl";
$whereWord = strpos($myText, $searchedWord);

echo "The word {$searchedWord} is on position {$whereWord}.", '<br>';

$myText = "Turbo Durchblick";

echo strrev($myText);

//File Handling
function fileWriter($directory, $myList)
{
    $handle = fopen("$directory", "w+");
    if ($handle && count($myList) > 0) {
        for ($i = 0; $i < count($myList); $i++){
            fwrite($handle, $myList[$i] . "\n");
        }
        fclose($handle);
    } else {
        echo "File could not be loaded in file reader!";
    }
}

$directory = "tricks.txt";
$myList = ["Turbo Kleber", "Turbo Bratpfannentrick", "Knoblauch Stinkbombe"];

fileWriter($directory, $myList);

?>
</h1>
</body>
</html>
