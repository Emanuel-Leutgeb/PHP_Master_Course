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
    echo "for Loop", '<br>';
    for ($i = 1; $i <= 10; $i++) {
        echo $i, '<br>';
    }

    echo "while Loop", '<br>';
    $i = 1;
    while ($i <= 10) {
        echo $i, '<br>';
        $i++;
    }

    echo "do-while Loop", '<br>';
    $i = 1;
    do {
        echo $i, '<br>';
        $i++;
    } while ($i <= 10)
    ?>
</h1>
</body>
</html>