<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MerchantOfficeHomeController extends AbstractController
{
    /**
     * @Route("/merchant/office/home", name="merchant_office_home")
     */
    public function index()
    {
        return $this->render('merchant_office_home/index.html.twig', [
            'controller_name' => 'MerchantOfficeHomeController',
        ]);
    }
}
