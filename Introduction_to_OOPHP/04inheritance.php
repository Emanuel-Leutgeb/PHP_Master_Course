<?php

class Model
{

}

class User extends Model
{
    public $createdAt = "2020-02-24 13:30";

    public function getCreatedAt()
    {
        return new DateTime($this->createdAt);
    }
}

class Comment extends Model
{
    public $createdAt = "2020-02-24 13:30";

    public function getCreatedAt()
    {
        return new DateTime($this->createdAt);
    }
}

$user = new User();
//echo $user->createdAt;

//DRY = DONT REPEAT YOURSELF

class ModelNew
{
    protected $dates = [];

    private $test = "My private Test";

    public function __get($property)
    {
//        var_dump($this->dates);
//        die("Works");

        if (in_array($property, $this->dates)) {
            return new DateTime($this->{$property});
        }

        return $this->{$property};
    }
}

class UserNew extends ModelNew
{

    protected $dates = ["createdAt"];
    protected $createdAt = "2020-02-24 13:30";
}

class CommentNew extends ModelNew
{
    protected $dates = ["createdAt"];
    protected $createdAt = "2020-02-24 13:30";
}

$user = new UserNew();
var_dump($user->createdAt->format("H:i"));

$comment = new CommentNew();
var_dump($comment->createdAt->format("H:i"));

var_dump($comment->test);
var_dump($comment->dates);