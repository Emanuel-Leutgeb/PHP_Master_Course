<?php

class User
{
    public static $username;
}

$user1 = new User;
$user1::$username = "Emanuel";

$user2 = new User;
$user2::$username = "Miriam";

echo $user1::$username;
echo $user2::$username;


class SignUpForm
{
    public static $rules = [
        "username" => "required",
        "email" => "required|email",
        "password" => "required",
    ];
}

//User
$valitator->validate($request, SignUpForm::$rules);

//Admin
$valitator->validate($request, SignUpForm::$rules);

//inLaravel
$user = new User;
$user->username = "Emanuel";
$user->email = "emanuel@email.com";
$user->save(); //save into the db


//called fassade
User::create([
    "username" => "Emanuel",
    "email" => "emanuel@email.com",
]);

//don't use too much static!