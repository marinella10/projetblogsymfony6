<?php

/** nom du fichier */
namespace App\Controller;

/** appel appel du paquet et des composent pour creer le controleur */

use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



/** creation de la classe controlleur qui hérite de la classe parent AbstractControlleur */
class CategorieControlleurController extends AbstractController
{
    /** afficher le resultat du controlleur en accordant une URL via une route. Cela a été fait ci-dessus avec l'attribut de route #[Route('/lucky/number/{max}')]. */
    #[Route('/categories', name: 'app_categorie_controlleur')]

    // injection le repositery dans la focntion pour afficherb toutes les categories
    public function index(CategorieRepository $categorieRepository): Response
    {
        // find all qui fait la boucle dans l index.twig
        $categories = $categorieRepository->findAll();

        return $this->render('categorie_controlleur/index.html.twig', [
            "categories" => $categories,
        ]);
    }
}
