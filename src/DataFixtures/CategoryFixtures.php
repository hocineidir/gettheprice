<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Category;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        //Create children categories first
        
        $category = new Category();
        $category->setTitle('Congélateurs');
        $manager->persist($category);
        
        $this->addReference('congélateurs', $category);
        
        $category = new Category();
        $category->setTitle('Lave-vaisselle');
        $manager->persist($category);
        
        $this->addReference('lave-vaisselle', $category);
        
        $category = new Category();
        $category->setTitle('Machine à café');
        $manager->persist($category);
        
        $this->addReference('machine-à-café', $category);
 
        
        // Create parent category , test with addParent?
        $child1=$this->getReference('machine-à-café');
        $child2=$this->getReference('lave-vaisselle');
        $child3=$this->getReference('congélateurs');
        
        $category = new Category();
        $category->setTitle('Electroménager');
        $category->addChild($child1);
        $category->addChild($child2);
        $category->addChild($child3);
        $manager->persist($category);
        
        $this->addReference('electroménager', $category);
        
        

        $manager->flush();
    }
}
