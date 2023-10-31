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
                    // Inclusief het singles.php-document om gegevens op te halen
                    include '../source/data.php';
                    foreach ($library as $single) {
                        include '../source/views/card.php';
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
</body>

</html>