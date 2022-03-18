<?php

namespace App\Controller;

use App\Repository\CreationRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreationController extends AbstractController
{
    #[Route('/creation', name: 'app_creation')]
    public function index(CreationRepository $creationRepository): Response
    {
        $creationRepository->findAll();
        return $this->render('creation/index.html.twig', [
           'allCreation' => $creationRepository->findAll()
        ]);
    }
}
