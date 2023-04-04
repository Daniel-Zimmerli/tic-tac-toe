<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\component\routing\Annotation\Route;

class tictactoeController extends AbstractController
{
    #[Route('/')]
    public function index(): Response
    {
        return new Response('This will be a tic-tac-toe game');
    }
}



