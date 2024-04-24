<?php

// ATTENTION AVEC LE GET - J'AI UTILISER 'PAGE', CHANGE LE SI IL LE FAUT (POUR ?section= ou ?page=)

if(isset($_GET["page"])) {
    switch($_GET["page"]) {
        case "home" :
            $title = "Accueil";
            include("../view/homeView.php");
            break;
                
                // autre case ici si necessaire

        default :
            $title = "Page Introuvable";
            include("../view/error404View.php");         
    }
    }else {
        $title = "Home Page via bad link";
        include("../view/homeView.php");
    }