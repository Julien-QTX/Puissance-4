<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/Jeu.css">
    <link rel="stylesheet" href="stylefacile.css" />
     <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet"/>
    <title>Facile</title>
</head>
<body>

<?php
require "Header.inc.php";
?>

<div class="container">
    
    <article class="arti">
        
        <div class="lvl">
            <p>Niveau de difficulté</p>

            <table>
                <tr class="NiveauJeu">
                    <th><a href="JeuFacile.php">Recommencer</a></th>
                    <th><a href="JeuInter.php">Intermédiaire</a></th>
                    <th><a href="JeuDifficile.php">Difficile</a></th>
                    <th><a href="JeuExpert.php">Expert</a></th>
                    
                </tr>
            </table>
        </div>

        <div id="timer" class="compteur">100</div>
        <script>
            // Compteur de Temps
            const departMinutes = 0
            let temps = departMinutes * 60

            const timerElement = document.getElementById("timer")

            setInterval(() => {
            let minutes = parseInt(temps / 60, 10)
            let secondes = parseInt(temps % 60, 10)

            minutes = minutes < 10 ? "0" + minutes : minutes
            secondes = secondes < 10 ? "0" + secondes : secondes

            timerElement.innerText = `${minutes}:${secondes}`
            temps = temps <= 0 ? 0 : temps + 1
            }, 1000)
        </script>


    </article>

    <div class="wrapper">
        <div class="stats-container">
            <div id="moves-count"></div>
            <div id="time"></div>
        </div>
        <div class="game-container"></div>
        <button id="stop" class="hide">Stop Game</button>
    </div>
    <div class="controls-container">
      <p id="result"></p>
      <button id="start">Start Game</button>
    </div>
    <!-- Script -->
    <script src="script.js"></script>



</div>
<?php
require 'Footer.inc.php'
?>
</body>
</html>