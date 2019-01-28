<?php

namespace App\Controller;


use Libellule\Controller\Controller;

class DefaultController extends Controller
{

    /**
     * Page d'Accueil
     */
    public function home()
    {
        return $this->render('bienvenue.html.twig');
    }

}
