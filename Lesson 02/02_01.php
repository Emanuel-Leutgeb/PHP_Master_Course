<?php
$products = [
    [
        "id" => 01,
        "name" => "Milk",
        "amount" => 10,
        "price" => 2.99
    ],
    [
        "id" => 02,
        "name" => "Bread",
        "amount" => 0,
        "price" => 5.50
    ],
    [
        "id" => 03,
        "name" => "Apple",
        "amount" => 0,
        "price" => 0.99
    ],
    [
        "id" => 04,
        "name" => "Butter",
        "amount" => 4,
        "price" => 0.50
    ],
    [
        "id" => 5,
        "name" => "Meat",
        "amount" => 0,
        "price" => 10.30
    ],
    [
        "id" => 06,
        "name" => "Coffee",
        "amount" => 3,
        "price" => 9.99
    ]
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="lesson_02.css">
    <title>Welcome to my Website</title>
</head>
<body>
<h1>
    <?php foreach ($products as $product) :
        if ($product["amount"] === 0) {
            echo "Product {$product["name"]} is empty!" , '<br>';
        }
    endforeach;
    ?>
</h1>
</body>
</html>