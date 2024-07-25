<?php

namespace Guicmoraes\Buscador;

use GuzzleHttp\ClientInterface;
use Symfony\Component\DomCrawler\Crawler;

class Buscador
{
    private ClientInterface $httpClient;
    private Crawler $crawler;


    public function __construct(ClientInterface $httpClient, Crawler $crawler)
    {
        $this->httpClient = $httpClient;
        $this->crawler = $crawler;
    }

    public function buscar(string $url): array
    {

        $resposta = $this->httpClient->request('GET', $url);

        //Capta o corpo da página HML
        $html = $resposta->getBody();
        //Instância da classe que permite filtrar elementos do html
        $this->crawler->addHtmlContent($html);
        //Filtro que capta somente elementos span de classe card-curso_nome
        $elementosCursos = $this->crawler->filter('span.card-curso__nome');
        $cursos = [];
        //Laço que adiciona o nome dos cursos ao array
        foreach ($elementosCursos as $elemento) {
            $cursos[] = $elemento->textContent;
        }

        return $cursos;
    }
}
