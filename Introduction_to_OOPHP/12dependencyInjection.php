<?php
/*
class TwitterManager
{
    protected $handle;

    public function __construct($handle)
    {
        $this->handle = $handle;
    }

    public function getHandle()
    {
        return $this->handle;
    }


    public function setHandle($handle): void
    {
        $this->handle = $handle;
    }

}

$twitterManager = new TwitterManager("Emanuel Leutgeb");

echo $twitterManager->getHandle();
*/


class TwitterClient
{
    public function getTweets($handle)
    {
        return [
            "this is a tweet",
            "Another tweet"
        ];
    }
}

class Paginator
{
}

class TwitterManagerNew
{
    protected $client;
    protected $paginator;

    public function __construct(TwitterClient $client, Paginator $paginator)
    {
        $this->client = $client;
        $this->paginator = $paginator;
    }


    public function getTweetsByUser($handle)
    {
        return $this->paginator->paginate($this->client->getTweets($handle), 10);
    }

}

$twitterClient = new TwitterClient;
$twitterManager = new TwitterManagerNew($twitterClient,);


var_dump($twitterManager->getTweetsByUser("Emanuel"));
