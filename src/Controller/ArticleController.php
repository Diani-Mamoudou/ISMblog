<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{
    /**
     * @Route("/article/show", name="article_show", methods={"GET"})
     */
    public function show(ArticleRepository $repo): Response
    {
        $articles=$repo->findAll();
        return $this->render('article/index.html.twig', [
            'articles' => $articles,
        ]);
    }
}
