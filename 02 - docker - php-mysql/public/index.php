<!DOCTYPE html>
<head>
    <title>Muziek library</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

    <nav class="navbar">
        <h1 class="navbar-title">Muziek </h1>
    </nav>
    <div class="content">
        <!-- Zoekformulier -->
        <form id="search-form">
            <label for="genre"></label>
            <select id="genre">
                <option value="">Alle genres</option>
                <option value="Pop">Rap</option>
                <option value="Rock">Cloud Rap</option>
                <!-- Voeg hier meer genres toe -->
            </select>
            <input type="text" id="search-input" placeholder=" Titel of Artiest...">
            <button type="submit">Zoeken</button>
        </form>

        <!-- Resultaten worden hier weergegeven -->

        <div id="results">
            <?php
            // Inclusief het singles.php-document om gegevens op te halen
            include '../source/data.php';
            foreach ($library as $single) {
                include '../source/views/card.php';
            }
            ?>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>