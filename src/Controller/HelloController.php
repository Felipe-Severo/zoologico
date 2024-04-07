<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    #[Route('/')]
    public function index(): Response
    {
        return new Response("Hello, world!");
    }

    #[Route('/dinossauro')]
    public function dinoRex(): Response
    {
        return new Response("Olá, dinossauro!");
    }

    #[Route('/rotaTeste')]
    public function teste(): Response
    {
        return new Response("Testando Novamente!");
    }

}