<?php

namespace App\Controller;

use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class OverviewController extends AbstractController
{
    /**
     * @Route("/overview", name="overview")
     */
    public function index(Security $security, PostRepository $postRepository): Response
    {
        return $this->render('overview/index.html.twig', [
            'posts' => $postRepository->findAll(),
            'user' => $security->getUser(),
        ]);
    }
}
