<?php

$name = $_POST["name"] ?? null;

if (empty(trim($name))){
    header("Location: http://localhost:8888/Introduction%20to%20PHP/23submitting.php");
}
echo "Hi there, {$_POST["name"]}!";