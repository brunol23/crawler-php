<?php

use Forseti\Bot\SpaceJam\PageObject\PaginaPageObject;
use Forseti\Bot\SpaceJam\Parser\FiltroParser;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

require __DIR__.'/../vendor/autoload.php';

//Pagina SpaceJam
$paginaPageObject = new PaginaPageObject();
var_dump($paginaPageObject->getHtml());
$html = $paginaPageObject->getHtml();

$filterParser = new FiltroParser($paginaPageObject->getHtml());
$filterParser = $paginaPageObject->getParser2();
echo 'Url da página SiteMapa ' . $filterParser->getUrlSiteMapa() . PHP_EOL ;


$objeto = $paginaPageObject->getParser()->getIterator()->current();
var_dump($objeto->descricao);
var_dump($objeto->link);