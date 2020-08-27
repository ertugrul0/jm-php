<?php
namespace CarBundle\DataFixtures\ORM;

use CarBundle\Entity\Make;
use CarBundle\Entity\Model;
use CarBundle\Entity\Car;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadCars extends AbstractFixture implements OrderedFixtureInterface{
    public function load(ObjectManager $manager) {
        $car1 = new Car();
        $car1->setModel($this->getReference("X1"));
        $car1->setMake($this->getReference("Hundai"));
        $car1->setPrice(12345);
        $car1->setYear(2020);
        $car1->setNavigation(true);
        $car1->setPromote(false);




        $car2 = new Car();
        $car2->setModel($this->getReference("Corsa"));
        $car2->setMake($this->getReference("Toyota"));
        $car2->setPrice(999);
        $car2->setYear(1997);
        $car2->setNavigation(true);
        $car2->setPromote(true);


        $manager->persist($car1);
        $manager->persist($car2);

        $manager->flush();
        

    }
    public function getOrder() {
        return 2;
    }
}