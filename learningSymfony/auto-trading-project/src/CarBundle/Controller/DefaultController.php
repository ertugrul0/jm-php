<?php

namespace CarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;

class DefaultController extends Controller
{
    /**
     * @Route("/our-cars", name="offer")
     */
    public function indexAction(Request $request)
    {
        $carRepository = $this->getDoctrine()->getRepository('CarBundle:Car');
        //$cars = $carRepository->findAll();
        $cars = $carRepository->findCarsWithDetails();
        /*$cars = [
            ['mike' => 'BMW', 'name' => 'X1'],
            ['mike' => 'Mercedes', 'name' => 'CLA'],
            ['mike' => 'Audi', 'name' => 'A4'],
        ];*/

        // create a form here using formBuilder
        $form = $this->createFormBuilder()
            ->setMethod('GET')
            ->add('search', TextType::class, [
                'constraints' => [
                    new NotBlank(),
                    new Length(['min' => 2]),
                ]
            ])
            /* ->add('submit', SubmitType::class) */
            ->getForm();

        // associate the request with the form
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            die('Form is submitted.');
        }


        return $this->render('CarBundle:Default:index.html.twig', 
            [
                'cars' => $cars,
                'form' => $form->createView(),
            ]
        );
    }

    /**
     * @param $id
     * @Route("/car/{id}", name="show_car")
     */
    public function showAction($id) {
        $carRepository = $this->getDoctrine()->getRepository('CarBundle:Car');
        //$car = $carRepository->find($id);
        $car = $carRepository->findCarWithDetailsById($id);
        return $this->render('CarBundle:Default:show.html.twig', ['car' => $car]);


    }
}
