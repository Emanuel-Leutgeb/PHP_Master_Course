<?php

function fileReader($directory)
{
    $handle = fopen("$directory", "r");
    if ($handle) {
        $numbers = [];
        $i = 0;
        while (!feof($handle)) {
            $numbers[$i] = fgets($handle);
            $i++;
        }
        fclose($handle);
    } else {
        echo "File could not be loaded in file reader!";
    }

    return $numbers;
}

function fileWriter($newNumbers)
{
    $handle = fopen("newNumbers.txt", "w+");
    if ($handle) {
        for ($i = 0; $i < count($newNumbers); $i++) {
            echo "Number write {$newNumbers[$i]}";
            fwrite($handle, ($newNumbers[$i]) . "\n");
        }
        fclose($handle);
        return true;
    } else {
        echo "File could not be loaded in file writer!";
        return false;
    }
}
