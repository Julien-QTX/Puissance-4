<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/Jeu.css">
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

        
        <form name="chronoForm" class="Chronometre">
            <input type="text"  name="startstop" name="chronotime" id="chronotime" value="00:00"/>
        </form>
    
        

    </article>

    <section>

        <table class="Jeu">

            <tr>
                <td><img class="cartes" src="./images/Champignon Rouge.png" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Bleu.jpg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
            </tr>
            <!-- 2 -->
            <tr>
                <td><img class="cartes" src="./images/Champignon Metal.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Helice.png" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
            </tr>
            <!-- 3 -->
            <tr>
                <td><img class="cartes" src="./images/Champignon Rouge.png" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Helice.png" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Bleu.jpg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
            </tr>
            <!-- 4 -->
            <tr>
                <td><img class="cartes" src="./images/Champignon Fantome.png" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Metal.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Fantome.png" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
            </tr>
            <!-- 5 -->
            <tr>
                <td><img class="cartes" src="./images/Champignon Fantome.png" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Metal.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Fantome.png" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
                <td><img class="cartes" src="./images/Champignon Dorer.jpeg" alt=""></td>
            </tr>

        </table>

    </section>
</div>
<script src="./tchat.js"></script>
<?php
require 'Footer.inc.php'
?>
</body>
</html>