<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjetsDetailController extends AbstractController
{
    /**
     * @Route("/projets/detail", name="projets_detail")
     */
    public function index(): Response
    {
        return $this->render('projets_detail/index.html.twig', [
            'controller_name' => 'ProjetsDetailController',
        ]);
    }
}
