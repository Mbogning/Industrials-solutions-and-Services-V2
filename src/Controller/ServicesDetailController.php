<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServicesDetailController extends AbstractController
{
    /**
     * @Route("/services/detail", name="services_detail")
     */
    public function index(): Response
    {
        return $this->render('services_detail/index.html.twig', [
            'controller_name' => 'ServicesDetailController',
        ]);
    }
}
