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
        include("tictactoe.php");
        return new Response();
    }
}



