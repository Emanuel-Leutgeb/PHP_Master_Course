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
    $randomNumber = rand(0, 100);
    echo "Random number {$randomNumber}", '<br>';
    $squareRoot = sqrt($randomNumber);
    echo "Square root of number {$randomNumber} = {$squareRoot}";
    ?>
</h1>
</body>
</html>