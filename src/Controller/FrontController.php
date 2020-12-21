<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


/**
 * @Route("/front", name="front_show")
 */
class FrontController extends AbstractController
{
    /**
     * @Route("/show", name="front")
     */
    public function index(ArticleRepository $repo): Response
    {
        $article = $repo->findby([
            "isEtat" => "publier"
        ]);

        return $this->render('front/index.html.twig', [
            'articles' => $article
        ]);
    }
}
