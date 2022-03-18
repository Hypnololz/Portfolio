<?php

namespace App\Controller;

use App\Repository\CreationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_main')]
    public function index(CreationRepository $creationRepository): Response
    {
        return $this->render('main/index.html.twig', [
            'allCreation' => $creationRepository->findAll()
        ]);
    }
}
