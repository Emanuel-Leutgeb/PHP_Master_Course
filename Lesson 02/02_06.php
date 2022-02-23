<?php
function potentMe($number)
{
    $numbers = [];
    for ($i = 0; $i <= 10; $i++) {
        $numbers[$i] = $number ** $i;
    }
    return $numbers;
}

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
    echo '<pre>', var_dump(potentMe($number)), '</pre>';
    ?>
</h1>
</body>
</html>