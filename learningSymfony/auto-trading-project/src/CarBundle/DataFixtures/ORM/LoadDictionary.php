<?php
namespace CarBundle\DataFixtures\ORM;

use CarBundle\Entity\Make;
use CarBundle\Entity\Model;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadDictionary  extends AbstractFixture implements OrderedFixtureInterface {

    public function getOrder() {
        return 1;
    }
    public function load(ObjectManager $manager) {
        $make = new Make();
        $make->setName('Hundai');

        $make1 = new Make();
        $make1->setName('Toyota');

        $make2 = new Make();
        $make2->setName('Honda');
        
        $manager->persist($make);
        $manager->persist($make2);
        $manager->persist($make1);
        $manager->flush();

        $model1 = new Model();
        $model1->setName('X1');

        $model2 = new Model();
        $model2->setName('Corsa');

        $model3 = new Model();
        $model3->setName('Passat');

        $manager->persist($model1);
        $manager->persist($model2);
        $manager->persist($model3);
        $manager->flush();
        $this->addReference("X1", $model1);
        $this->addReference("Corsa", $model2);
        $this->addReference("Passat", $model3);

        $this->addReference("Hundai", $make);
        $this->addReference("Toyota", $make1);
        $this->addReference("Honda", $make2);



    }
}