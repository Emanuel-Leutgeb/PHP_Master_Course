<?php

$names = ["Emanuel", "Miriam", "Sandra", 7, 5.5];

var_dump($names);

echo $names[0];

echo $names[5];

$names[] = "Mario";

var_dump($names);

$names[] = "Michael";

var_dump($names);

//Associated array

$people = [
    "Emanuel" => 25,
    "Miriam" => 21
];

var_dump($people);

echo $people["Emanuel"];

echo $people["Miriam"];

//Multidimensional array
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

var_dump($users);

echo $users[0]["username"];
echo $users[1]["email"];
echo $users[1]["likes"][1];

echo "<pre>", var_dump($users), "</pre>";

foreach ($users as $user) {
   // var_dump($user);
    echo $user["username"] . "<br>";
}

$users[2] = "Hello";

echo "<pre>", var_dump($users), "</pre>";

$users[1]["likes"][0] = "UI / UX";

echo "<pre>", var_dump($users), "</pre>";

$users[1]["about"] = "UI / UX";
