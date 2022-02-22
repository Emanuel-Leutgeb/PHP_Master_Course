<?php

for ($i = 1; $i <= 10; $i++) {
    echo $i;
}

$totalItems = 210;
$itemsPerPage = 25;

$pageCount = ceil($totalItems / $itemsPerPage);

if ($pageCount > 0) {
    for ($i = 1; $i <= $pageCount; $i++) {
        echo '<a href="?page=">' . $i . ' </a>';
    }
}

$names = ["Emanuel", "Miriam", "Sandra"];

for ($i = 0; $i < count($names); $i++) {
    echo $names[$i];
}