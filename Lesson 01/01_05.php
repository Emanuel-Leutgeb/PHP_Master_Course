<?php
$customers = [
    [
        "id" => "01",
        "firstname" => "Emanuel",
        "lastname" => "Leutgeb"
    ],
    [
        "id" => "02",
        "firstname" => "Miriam",
        "lastname" => "Forstinger"
    ],
    [
        "id" => "03",
        "firstname" => "Johann",
        "lastname" => "Reisenauer"
    ]
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="lesson_01.css">
    <title>Welcome to my Website</title>
</head>
<body>
<h1>
    <?php foreach ($customers as $customer) : ?>
    <p>
      <?php echo "{$customer["id"]} {$customer["firstname"]} {$customer["lastname"]}" . '<br>'?>
    </p>
    <?php endforeach; ?>
</h1>
</body>
</html>