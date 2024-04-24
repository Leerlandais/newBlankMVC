<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP CDN[STYLE] ICI -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- ET PUIS STYLE PERSO -->
    <link rel="stylesheet" href="styles/style.css">
    <title><?=$title?></title>
</head>
<body>
    
    <?php
        // INCLURE SI NECESSAIRE (BON ENDROIT POUR LE NAVBAR PAR EXEMPLE)
        include("inc/header.php");
    ?>
    
    <div class="container">

    <h1>Désolé. Page Introuvable</h1>
        <a href="?page=home">Retour à l'Accueil</a>


    </div>

    <?php
        // INCLURE SI NECESSAIRE
        include("inc/footer.php");
    ?>
    
    <!-- BOOTSTRAP CDN[SCRIPTS] ICI -->    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- ET PUIS STYLE PERSO -->
    <script src="scripts/script.js"></script>
</body>
</html>








