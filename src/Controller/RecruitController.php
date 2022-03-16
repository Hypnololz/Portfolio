<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RecruitController extends AbstractController
{
    #[Route('/recruit', name: 'app_recruit')]
    public function index(): Response
    {
        return $this->render('recruit/index.html.twig', [
            'controller_name' => 'RecruitController',
        ]);
    }
}
