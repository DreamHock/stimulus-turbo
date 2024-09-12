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

        $value = "";
        return $this->render('hi/index.html.twig', [
            'controller_name' => 'HiController',
        ]);
    }

    #[Route('/messages', name: "app_messages")]
    public function messages(): Response
    {
        return $this->render(
            'messages/index.html.twig',
            [
                "messages" =>
                [
                    [
                        "id" => 1,
                        "message" => "message 1"
                    ],
                    [
                        "id" => 2,
                        "message" => "message 2"
                    ],
                    [
                        "id" => 3,
                        "message" => "message 3"
                    ]
                ]
            ]
        );
    }
}
