<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ActualiteDetailController extends AbstractController
{
    /**
     * @Route("/actualite/detail", name="actualite_detail")
     */
    public function index(): Response
    {
        return $this->render('actualite_detail/index.html.twig', [
            'controller_name' => 'ActualiteDetailController',
        ]);
    }
}
