<?php

require "./directoryReader.php";

$images = directReader("images");

if (!$images) {
    die("Could not load files!");
}

var_dump($images);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Image Gallery</title>
</head>
<body>
</body>
<?php foreach ($images as $image): ?>
    <img src="<?php echo $image; ?>">
<?php endforeach; ?>
</html>
