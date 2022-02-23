<?php
$seller = [
    [
        "product" => "apple",
        "price" => 0.99,
        "specialOffer" => true
    ],
    [
        "product" => "pears",
        "price" => 1.10,
        "specialOffer" => false
    ],
    [
        "product" => "tomatoes",
        "price" => 0.30,
        "specialOffer" => true
    ],
    [
        "product" => "zucchini",
        "price" => 1.20,
        "specialOffer" => false
    ]
];

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
    <?php
    foreach ($seller as $product) :
        echo '<br>', "{$product["product"]} {$product["price"]}", '<br>';
        if ($product["specialOffer"] === true) {
            echo "Alert this is a special offer!", '<br>';
        }
    endforeach;
    ?>
</h1>
</body>
</html>
