<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="lesson_01.css">
    <title>Welcome to my Website</title>
</head>
<body>
<h1>
    <?php
    echo $number = 8;
    var_dump($number);
    echo " as number." . "<br>";
    echo $number = "8";
    var_dump($number);
    echo " as string." . "<br>";
    echo $number = 8.0;
    var_dump($number);
    echo " as float." . "<br>";
    ?>
</h1>
</body>
</html>
