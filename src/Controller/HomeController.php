<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        $questions = [
            [
                'id' => '1',
                'title' => 'je suis une question',
                'content' => 'lorem ipsum dolor sit amet est un pelvir etam',
                'rating' => 20,
                'author' => [
                    'name' => 'Jean Dupont',
                    'avatar' => 'https://randomuser.me/api/portraits/men/78.jpg'
                ],
                'nbrOfResponse' => 15
            ],
            [
                'id' => '2',
                'title' => 'je suis une question',
                'content' => 'lorem ipsum dolor sit amet est un pelvir etam',
                'rating' => 0,
                'author' => [
                    'name' => 'Julie Lescault',
                    'avatar' => 'https://randomuser.me/api/portraits/women/40.jpg'
                ],
                'nbrOfResponse' => 15
            ],
            [
                'id' => '3',
                'title' => 'je suis une question',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit .',
                'rating' => -5,
                'author' => [
                    'name' => 'Sam Smith',
                    'avatar' => 'https://randomuser.me/api/portraits/men/37.jpg'
                ],
                'nbrOfResponse' => 15
            ],

        ];

        return $this->render('home/index.html.twig', [
            'questions' => $questions
        ]);
    }
}
