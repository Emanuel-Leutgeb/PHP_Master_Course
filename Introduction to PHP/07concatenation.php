<?php

$weather = "sunny";

echo "The current weather is ";
echo $weather;

echo "The current weather is " . $weather;

$degrees = 30;

$status = "The current weather is " . $weather . " and it's " . $degrees . " degrees";

var_dump($status);

//This only work with double quotation marks
echo $status = "The current weather is $weather and it's $degrees degrees";

echo $status = "The current weather is $weather and it's $degrees° degrees";

echo $status = "The current weather is {$weather} and it's {$degrees}° degrees";

$name = "Emanuel";

echo "My name is " . $name;