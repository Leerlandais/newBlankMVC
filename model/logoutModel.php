<?php

//  AUTRE QUE LE HEADER LOCATION À CHANGER ICI - LE RESTE FONCTIONNE COMME IL LE FAUT 
// POUR ACTIVER LE DECONNEXION, IL FAUT SIMPLEMENT AVOIR UN LIEN 'déconnexion' dans le Nav...
// PAR EXEMPLE :-
// <a class="nav-link" href="?logout">Déconnexion</a>
// ET PUIS CECI DANS LE ROUTERCONTROL (aussi lire ligne 29 (rédirection))
/*
                if (isset($_GET['logout'])) {
                            include ("../model/logout.model.php");
                        } 
*/

// Détruit toutes les variables de session
$_SESSION = [];


if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finalement, on détruit la session.
session_destroy();

// redirection vers l'accueil (attention: utilise les bons liens (?p, ?page, ?section))
  
header("Location: ?page=home");
exit();
?>