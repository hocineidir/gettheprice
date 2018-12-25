<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Product;

class FrontOfficeHomeController extends AbstractController
{
    /**
     * @Route("/front/office/home", name="front_office_home")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $products=$em->getRepository(Product::class)->findAll();
        
        return $this->render('front_office_home/index.html.twig', [
            'controller_name' => 'FrontOfficeHomeController',
            'products' => $products
        ]);
    }
}
