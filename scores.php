<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/scores.css">
    <title>Scores du joueur</title>
</head>
<body>

<?php
    $titre='Scores';
    require "Header.inc.php";
    require './asset/includes/database.inc.php';
?>

    <div class="texte">
        <div class="element">
 
            <table border="3" cellpadding="25" >
                <tr>
                    <td>Nom du  jeu</td>
                    <td> pseudo du joueur</td>
                    <td>score dujoueur </td>
                    <td> Niveau de difficulté</td>
                    <td> date/heure</td>        
                </tr>
            
                <?php

                   $scores = $dbh->prepare ('SELECT jeu.nom_du_jeu, pseudo, scrore, difficulty, `date/heure_partie` FROM Scrores
                    INNER JOIN utilisateur ON Scrores.id_utilisateur = utilisateur.id
                    INNER JOIN jeu ON Scrores.id_jeu = jeu.id
                    ORDER BY id_jeu , difficulty DESC , scrore ');

                    $scores->execute();
                    $scores = $scores-> fetchAll();

                    foreach($scores as $score) { ?>

                        <tr>

                        <td> <?php echo $score['nom_du_jeu'] ?> </td>
                        <td> <?php echo $score['pseudo'] ?></td>
                        <td> <?php echo $score['scrore'] ?></td>
                        <td> <?php echo $score['difficulty']?></td>
                        <td> <?php echo $score['date/heure_partie'] ?> </td>
                            
                        </tr>

                 <?php   }

                ?>  
              
            </table>
        </div>    
            
    </div>

    <?php
    require "Footer.inc.php"
    ?>

</body>
</html>