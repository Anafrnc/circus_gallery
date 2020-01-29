<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/presentation", name="presentation")
 */
class PresentationController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render('presentation/index.html.twig', [
            'controller_name' => 'PresentationController',
        ]);
    }
}
