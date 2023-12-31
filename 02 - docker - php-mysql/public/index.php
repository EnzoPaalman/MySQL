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

                    include(VIEWS_PATH . 'home.php');

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

    <div class="game-button">
        <p class="game-text">
        Speel de SDG game!
        </p>
        <figure class="cta-button">
            <button>Speel nu!</button>
        </figure>
    </div>


</body>

</html>