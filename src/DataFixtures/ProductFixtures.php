<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Product;

class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        
        $category=$this->getReference('machine-à-café');
        
        
        for ($i = 0; $i < 10; $i++) {
        $product = new Product();
        $product->setMerchant('Merchant' . $i);
        $product->setPrice(mt_rand(10,100));
        $product->setTitle('Title' . $i);
        $product->setDescription('Description' . $i);
        //$product->setRebate(0.5);
        //$product->setDeliverycost(0);
        $product->setCategory($category);
        $product->setUrlimage('https://www.cafes-bibal.fr/wp-content/uploads/2018/06/machine-cafe-jura-e6.png');
        $product->setUrlproduct('https://www.cafes-bibal.fr/produit/machine-cafe-jura-e6/');
        $manager->persist($product);
        $manager->persist($category);
       }
        $manager->flush();
    }
}
