<?php
/*
//http://localhost:8888/Introduction%20to%20PHP/21postAndGet.php?slug=learn-php&page=1
var_dump($_GET);

echo $_GET["slug"];

$page = $_GET["page"];
$searchTerm = $_GET["search"];
$pages = 10;

echo '<h3>Searching for: ' . $searchTerm . '</h3>';
echo '<p>You are on Page ' . $page . '</p>';

//http://localhost:8888/Introduction%20to%20PHP/21postAndGet.php?search=learn php&page=1

for ($i = 1; $i <= $pages; $i++){
    echo '<a href="?search=' . $searchTerm . '&page=' . $i . '">' . $i . '</a>';
}
*/
/*
if (isset($_GET['search'])) {
    $searchTerm2 = $_GET['search'];
    echo '<h3>Searching for: ' . $searchTerm2 . '</h3>';
}

//http://localhost:8888/Introduction%20to%20PHP/21postAndGet.php?search=learn-php
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POST and GET</title>
</head>
<body>
<form action="21signIn.php" method="post">
    <label for="username">Username</label>
    <input type="text" name="username" id="username">

    <label for="password">Password</label>
    <input type="password" name="password" id="password">

    <button type="submit">Sign in</button>
</form>
</body>
</html>
