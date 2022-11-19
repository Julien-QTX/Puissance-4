<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleJeu.css">
    <link rel="stylesheet" href="styleHeaderFooter.css">
    <title>Difficile</title>
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
                    <th><a href="JeuFacile.php">Facile</a></th>
                    <th><a href="JeuInter.php">Intermédiaire</a></th>
                    <th><a href="JeuDifficile.php">Recommencer</a></th>
                    <th><a href="JeuExpert.php">Expert</a></th>
                </tr>
            </table>
        </div>

        <div id="timer" class="compteur">100</div>
        <script>
            // Compteur de Temps
            const departMinutes = 5
            let temps = departMinutes * 60

            const timerElement = document.getElementById("timer")

            setInterval(() => {
            let minutes = parseInt(temps / 60, 10)
            let secondes = parseInt(temps % 60, 10)

            minutes = minutes < 10 ? "0" + minutes : minutes
            secondes = secondes < 10 ? "0" + secondes : secondes

            timerElement.innerText = `${minutes}:${secondes}`
            temps = temps <= 0 ? 0 : temps - 1
            }, 1000)
        </script>

    </article>

    <section>
        <table class="Jeu">
             <tr>
                <td><img class="cartes" src="./images/Champignon Rouge.png" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Bleu.jpg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
            </tr>
            <!-- 2 -->
            <tr>
                <td><img class="cartes" src="./images/Champignon Rouge.png" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Bleu.jpg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
            </tr>
            <!-- 3 -->
            <tr>
                <td><img class="cartes" src="./images/Champignon Rouge.png" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Bleu.jpg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
            </tr>
            <!-- 4 -->
            <tr>
                <td><img class="cartes" src="./images/Champignon Rouge.png" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Bleu.jpg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
            </tr>
            <!-- 5 -->
            <tr>
                <td><img class="cartes" src="./images/Champignon Rouge.png" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Bleu.jpg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
            </tr>
            <!-- 6 -->
            <tr>
                <td><img class="cartes" src="./images/Champignon Rouge.png" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Bleu.jpg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
            </tr>
            <!-- 7 -->
            <tr>
                <td><img class="cartes" src="./images/Champignon Rouge.png" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Bleu.jpg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
            </tr>
            <!-- 8 -->
            <tr>
                <td><img class="cartes" src="./images/Champignon Rouge.png" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Bleu.jpg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
            </tr>
            <!-- 9 -->
            <tr>
                <td><img class="cartes" src="./images/Champignon Rouge.png" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Bleu.jpg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
            </tr>
            <!-- 10 -->
            <tr>
                <td><img class="cartes" src="./images/Champignon Rouge.png" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Bleu.jpg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
            </tr>
            <!-- 11 -->
            <tr>
                <td><img class="cartes" src="./images/Champignon Rouge.png" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Bleu.jpg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
            </tr>
            <!-- 12 -->
            <tr>
                <td><img class="cartes" src="./images/Champignon Rouge.png" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Bleu.jpg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
            </tr>
        </table>

    </section>
</div>
<?php
require 'Footer.inc.php'
?>
</body>
</html>