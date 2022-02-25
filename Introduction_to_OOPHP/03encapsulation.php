<?php

class User
{
    protected $email;
    protected $username;

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

class Validator
{
    private $errors = [];

    public function validate($data, $rules)
    {
        $this->errors = "The email is required";
    }

    public function fails()
    {
        return !empty($this->errors);
    }

    public function getErrors()
    {
        return $this->errors;
    }
}

$validator = new Validator;
$validator->validate([""], ["required"]);

if ($validator->fails()) {
    die("Fails");
}