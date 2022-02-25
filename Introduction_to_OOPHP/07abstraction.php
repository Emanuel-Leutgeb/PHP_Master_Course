<?php

abstract class Service
{
    abstract  public function getRedirectUri();
}

class FacebookService extends Service
{
    public function getRedirectUri()
    {
        return "uri";
    }
}

class TwitterService extends Service
{
    public function getRedirectUri()
    {
        return "uri";
    }
}

class GoogleService extends Service
{
    public function getRedirectUri()
    {
        return "uri";
    }
}

//$service = new Service;

$facebook = new FacebookService;
$facebook->getRedirectUri();

$google = new GoogleService;
$google->getRedirectUri();
