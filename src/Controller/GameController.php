<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class GameController extends AbstractController
{
    #[Route('/', name: 'app_game')]
    public function index(): Response
    {
        return $this->render('game/index.html.twig', [
            'image' => 'default.jpg',
            'text' => 'Bienvenue dans votre aventure.',
            'choices' => [],
        ]);
    }
}

public function test() 
{
    $this