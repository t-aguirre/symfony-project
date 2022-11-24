<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    #[Route('/log', name: 'login_index')]
    public function index(): Response
    {
        return $this->render('pages/login/index.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }
}
