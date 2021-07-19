<?php

namespace App;

use App\Model\Utilisateur;

class Application
{

    public static function demarrer()
    {
        //http://localhost/pooFranckExo/panier/articles
        //http://localhost/pooFranckExo/index.php?page=panier/articles
        $page = $_GET['page'];

        echo $page;

        $nomClasse = "App\Model\Utilisateur";

        $utilisateur = new $nomClasse();
        $utilisateur->NomEntier();
    }
}
