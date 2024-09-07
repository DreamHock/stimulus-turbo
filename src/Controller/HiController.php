<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HiController extends AbstractController
{
    #[Route('/hi', name: 'app_hi')]
    public function index(): Response
    {
        return $this->render('hi/index.html.twig', [
            'controller_name' => 'HiController',
        ]);
    }
}
