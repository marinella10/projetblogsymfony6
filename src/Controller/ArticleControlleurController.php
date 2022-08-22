<?php

/** nom du fichier */
namespace App\Controller;

/** appel du paquet et des composent pour creer le controleur */

use App\Repository\ArticleRepository;
use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



/** creation de la classe controlleur qui hérite de la classe parent AbstractControlleur */
class ArticleControlleurController extends AbstractController
{

    /** creation de la route  */
    #[Route('/articles', name: 'app_article_controlleur')]

    // injection le repositery dans la focntion pour afficherb toutes les categories
    public function index(ArticleRepository $articleRepository): Response
    {
        // find all qui fait la boucle dans l index.twig
        $vararticles = $articleRepository->findAll();

        return $this->render('article_controlleur/index.html.twig', [
            "touslesarticles" => $vararticles,
        ]);
    }
}


