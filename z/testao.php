<?php

require __DIR__.'/../vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client(['verify' => false]);
$resposta = $client->request('GET', 'https://www.spacejam.com/cmp/sitemap.html');

$html = $resposta->getBody()->getContents();

var_dump($html);
