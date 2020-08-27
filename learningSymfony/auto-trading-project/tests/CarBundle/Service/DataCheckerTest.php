<?php
namespace CarBundle\Service;

use Doctrine\ORM\EntityManager;


class DataCheckerTest extends \PHPUnit_Framework_TestCase {
    /**
     * @var EntityManager|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $entityManager;

    public function setUp() {
        $this->entityManager = $this->getMockBuilder('Doctrine\ORM\EntityManager')->disableOriginalConstructor()->getMock();        
    }
    public function testCheckCarWithRequiredPhotosWillReturnFalse() {
        $subject = new DataChecker($this->entityManager, true);
        $expectedResult = false;

        $car = $this->getMock('CarBundle\Entity\Car');
        $result = $subject->checkCar($car);
        $this->assertEquals($expectedResult, $result);
    }
}