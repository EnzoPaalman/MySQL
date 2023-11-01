<?php
// haal al mijn instellingen op
require_once('../source/config.php');

// haal de database verbinding op
require_once( SOURCE_PATH . 'database.php');
?>

<!DOCTYPE html>
<head>
    <title>Muziek library</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

    <nav class="nav">
        <img src="img/E_SDG_logo_UN_emblem_square_trans_WEB-1024x879.webp" alt="NvvN">
        <ul class="list">
            <li class="listitem">Sdg's</li>
            <li class="listitem">Game</li>
            <li class="listitem">Contact</li>
        </ul>
    </nav>
    <div class="content">
        <!-- Resultaten worden hier weergegeven -->

        <div id="results">
            <div class="slider-container">
                <div class="slider">
                    <div class="slider-inner">
                    <?php

                    // handle incomming request
                    // controleer de url, is er misschien een categorie geselecteerd?
                    $url = explode('/', trim($_SERVER['REQUEST_URI']));
                    // remove empty values 
                    $url = array_values(array_filter($url));
                    // and set a default
                    if (empty($url[0])) {
                       $url[] = 'home';
                    }

                    switch ($url[0]) {
                    case 'sdg':
                    define('SDG_SLUG', htmlspecialchars($url[1]));
                    include(VIEWS_PATH . 'single.php');
                    break;
                    case 'home':
                    default:
                    include(VIEWS_PATH . 'home.php');
                    }
                    ?> 
                    </div>
                </div>
            <div class="slider-buttons">
                <button id="prev" class="slider-button">←</button>
                <button id="next" class="slider-button">→</button>
            </div>
        </div>
        </div>
    </div>

    <script src="JS/main.js"></script>

    <div>
        <p class="game-text">
        Speel de SDG game!
        </p>
        <figure class="cta-button">
            
        </figure>
    </div>
</body>

</html>