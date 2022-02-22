<?php

$names = ["Emanuel", "Miriam", "Sandra"];

foreach ($names as $name) {
    echo $name, "<br>";
}

$names = ["Emanuel", "Miriam", "Sandra"];

foreach ($names as $index => $name) {
    echo $index, ": ", $name, "<br>";
}

$topics = [
    [
        "id" => 1,
        "title" => "The best way to learn PHP.",
        "posts" => [
            ["body" => "Practice a lot PHP!"],
            ["body" => "Work on a Project PHP."]
        ]
    ],
    [
        "id" => 2,
        "title" => "The best way to learn JS.",
        "posts" => [
            ["body" => "Practice a lot JS!"],
            ["body" => "Work on a Project JS."]
        ]
    ]
];

foreach ($topics as $topic) {
    echo '<h1>' . $topic["title"] . '</h1>';
    foreach ($topic["posts"] as $post) {
        echo '<p>' . $post["body"] . '</p>';
    }
}