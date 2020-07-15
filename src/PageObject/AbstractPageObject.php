<?php


namespace Forseti\Bot\SpaceJam\PageObject;


use GuzzleHttp\Client;

abstract class AbstractPageObject
{
    protected $client;

    public function __construct()
    {
     $this->client = new Client(['verify' => false]);
    }


}