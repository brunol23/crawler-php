<?php


namespace Forseti\Bot\SpaceJam\PageObject;


use Forseti\Bot\SpaceJam\Parser\FiltroParser;

class PaginaPageObject extends AbstractPageObject
{
    public function getResposta()
    {
        $resposta = $this->client->request('GET', 'https://www.spacejam.com');
        return $resposta;
    }

    public function getHtml()
    {
        $paginaPageObject = $this->getResposta()->getBody()->getContents();
        return $paginaPageObject;
    }

    public function getRespostaSiteMapa()
    {
        return $this->client->request('GET','https://www.spacejam.com/cmp/sitemap.html');
    }

    public function getHtmlSiteMapa()
    {
        $paginaPageObject = $this->getRespostaSiteMapa()->getBody()->getContents();
        return $paginaPageObject;
    }

    public function getParser()
    {
        return new FiltroParser($this->getHtmlSiteMapa());
    }

    public function getParser2()
    {
        return new FiltroParser($this->getHtml());
    }
}