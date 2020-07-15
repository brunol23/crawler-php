<?php


namespace Forseti\Bot\SpaceJam\Parser;


use Symfony\Component\DomCrawler\Crawler;

abstract class AbstractParser
{
    protected $crawler;

    public function __construct($paginaPageObject)
    {
        $this->crawler = new Crawler;
        $this->crawler->addHtmlContent($paginaPageObject);
    }
}
