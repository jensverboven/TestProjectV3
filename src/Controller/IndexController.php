<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        $repository = $this->getDoctrine()->getRepository('App:Flight');
        $flights = $repository->findAll();
        $repository = $this->getDoctrine()->getRepository('App:Hotel');
        $hotels = $repository->findAll();

        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController','flights'=>$flights,
            'hotels'=>$hotels
        ]);
    }
}
