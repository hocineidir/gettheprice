<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Product;
use App\Entity\Category;

class FrontOfficeHomeController extends AbstractController
{
    /**
     * @Route("/front/office/home", name="front_office_home")
     */
    public function index()
    {
        
        $entityManager = $this->getDoctrine()->getManager();
        
        $category = new Category();
        $category->setTitle('Congélateurs');
        
        $product = new Product();
        $product->setMerchant('Merchant');
        $product->setPrice(100);
        $product->setTitle('Title');
        $product->setDescription('Description');
        //$product->setRebate(0.5);
        //$product->setDeliverycost(0);
        $product->setCategory($category);
        $product->setUrlimage('https://www.cafes-bibal.fr/wp-content/uploads/2018/06/machine-cafe-jura-e6.png');
        $product->setUrlproduct('https://www.cafes-bibal.fr/produit/machine-cafe-jura-e6/');
        
        $entityManager->persist($category);
        $entityManager->persist($product);
        $entityManager->flush();
        
        return $this->render('front_office_home/index.html.twig', [
            'controller_name' => 'FrontOfficeHomeController',
            'product' => $product,
        ]);
    }
}
