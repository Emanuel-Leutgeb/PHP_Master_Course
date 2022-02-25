<?php

trait Authenticateable
{
    //to share methods to other classes
    public function getPassword()
    {
    echo "hallo";
    }

    public function setPassword($password)
    {

    }
}

class UserTraits
{
    use Authenticateable;

}

class AdminTraits
{
    use Authenticateable;
}

$user = new UserTraits();
$user->setPassword("1234567890");

$admin = new AdminTraits();
$admin->getPassword();



trait Hello
{
    public function sayHello()
    {
        return "Hello";
    }
}

trait World
{
    public function sayWorld()
    {
        return "World";
    }
}

trait HelloWorld
{
    public function sayHelloWorld()
    {
        return "Hello World";
    }
}
class Greeting
{
    use HelloWorld,
        Hello,
        World;

    public function output(){

        return $this->sayHello() . " + " . $this->sayWorld() . " = " . $this->sayHelloWorld();
    }
}

$greeting = new Greeting();
echo $greeting->output();


