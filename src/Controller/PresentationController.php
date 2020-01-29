<?php

namespace App\Controller;

use App\Repository\PresentationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/presentation", name="presentation")
 */
class PresentationController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(PresentationRepository $presentationRepository): Response
    {
        $text = $presentationRepository->findAll();

        return $this->render('presentation/index.html.twig', [
            'texts' => $text,
        ]);
    }
}
