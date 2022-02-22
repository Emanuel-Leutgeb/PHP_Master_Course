<?php


$names = ["Emanuel", "Miriam", "Sandra"];

foreach ($names as $name) {
    echo $name, "<br>";
}

$users = [
    [
        "username" => "Emanuel",
        "email" => "emanuel@email.com",
        "likes" => ["programming", "PHP"]
    ],
    [
        "username" => "Miriam",
        "email" => "miriam@email.com",
        "likes" => ["programming", "Angular", "TypeScript"]
    ],
    [
        "username" => "Herbert",
        "email" => "herbert@email.com",
        "likes" => ["talking", "nothing"]
    ]
];

$toFind = "Herbert";
$result = null;

foreach ($users as $user) {
    if ($user["username"] === $toFind) {
        $result = $user;
        break;
    }
}
var_dump($result);

$toSkip = "Miriam";

foreach ($users as $user) {
    if ($user["username"] === $toSkip) {
        continue;
    }

    echo $user["username"];
}

$toFind = "programming";
$found = null;
foreach ($users as $user) {
    foreach ($user["likes"] as $like) {
        if ($like === $toFind) {
            $found = $user;
            break 2;
        }
    }
}

var_dump($found);
