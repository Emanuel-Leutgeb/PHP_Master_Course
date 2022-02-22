<?php

$quotes = [
    [
        "author" => "Emanuel",
        "text" => "I learn PHP"
    ],
    [
        "author" => "Miriam",
        "text" => "I love TypeScript"
    ],
    [
        "author" => "Sandra",
        "text" => "I work at Home"
    ], [
        "author" => "Marip",
        "text" => "I love being a farmer"
    ],
    [
        "author" => "Renate",
        "text" => "I have Corona"
    ]
];

$quote = $quotes[array_rand($quotes)]; //difficult way = rand(0, count($quotes) - 1)
$quoteText = $quote["text"];
$quoteAuthor = $quote["author"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Random</title>
</head>
<body>
<blockquote>
    <h2>&ldquo;<?php echo $quoteText; ?>&rdquo;</h2>
    <strong>- <?php echo $quoteAuthor; ?></strong>
</blockquote>
</body>
</html>


