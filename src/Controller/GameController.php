<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;
final class GameController extends AbstractController
{
    #[Route('/', name: 'app_game')]
    public function index(Request $request, EntityManagerInterface $em): Response
    {
        $stepId = $request->query->getInt('step', 1);

        $step = $em->getRepository(\App\Entity\StoryStep::class)->find($stepId);

        return $this->render('game/index.html.twig', [
            'image' => $step->getImage(),
            'text' => $step->getText(),
            'choices' => $step->getChoices(),
        ]);
    }
}