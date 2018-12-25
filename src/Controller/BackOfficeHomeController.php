<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BackOfficeHomeController extends AbstractController
{
    /**
     * @Route("/back/office/home", name="back_office_home")
     */
    public function index()
    {
        return $this->render('back_office_home/index.html.twig', [
            'controller_name' => 'BackOfficeHomeController',
        ]);
    }
}
