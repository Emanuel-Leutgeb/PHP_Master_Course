<?php

class User
{
    public $email;
    public $username;


    public function getEmail()
    {
        return strtolower($this->email);
    }

    public function setEmail($email): void
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return;
        }

        $this->email = $email;
    }


}

$user = new User();

//old style
//$user->email = "emanuel@email.com";
//var_dump($user->email);

//new style -> Getter / Setter
$user->setEmail("emanuel@leutgeb.com");
var_dump($user);

$myEmail = $user->getEmail();

echo $myEmail;