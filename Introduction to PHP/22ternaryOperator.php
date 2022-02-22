<?php

//http://localhost:8888/Introduction%20to%20PHP/22ternaryOperator.php?slug=I Love PHP
echo $_GET["page"];


$page = 1;

if (isset($_GET["page"])) {
    $page = $_GET["page"];
}

echo $page;

$page = isset($_GET["page"]) ? $_GET["page"] : 1;

echo $page;

//up for php 7 and upwards
$page = $_GET["page"] ?? 1;

echo $page;


$balance = 0;
$availableBalance = $balance ?: "zero";

echo "Your balance is " . $availableBalance;
