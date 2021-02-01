<?php

namespace App\Controller\Admin;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
//use Symfony\Component\Routing\Annotation\Route;


/**
* @Route("/admin")
*/ 
class AdminController extends AbstractController
{

    //page d'accueil de l'administration
    /**
     * @Route("", name="dashbord", methods={"GET"})
     */
    public function index(): Response 
    {
        return $this->render('backend/accueil.html.twig');
    }
    
}
