<?php

class User
{
    public $username = "Emanuel";

    public function fullName()
    {
        return "Emanuel Leutgeb";
    }

    public function avatar($size = 60)
    {
        return $size;
    }
}

$user = new User();

echo $user->username;

echo $user->avatar(80);

var_dump($user);