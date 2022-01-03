<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SchoolActualityController extends AbstractController
{
    /**
     * @Route("/", name="school_actuality")
     */
    public function index(): Response
    {
        return $this->render('school_actuality/index.html.twig', [
            'controller_name' => 'SchoolActualityController',
        ]);
    }
}
