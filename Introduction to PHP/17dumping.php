<?php

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

//with comma against dot
echo '<pre>' , var_dump($users) , '</pre>';


echo '<pre>' , print_r($users) , '</pre>';

