<?php
require_once "./02_07_02.php";
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
    $number = 2;
    echo "The Potent of < {$number} >", '<br>';
    $numbers = potentMe($number);
    printMe($numbers);
    ?>
</h1>
</body>
</html>