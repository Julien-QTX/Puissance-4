<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/JeuFacile.css">
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

    </article>


    <div class="div_conteneur_parent">
						
		<div style="width:800px;display:inline-block;" id="conteneur">
		
		
			<div class="colonne" id="liste">

				Vous avez trois minutes,<br />soit <span style="color:#CC3300;">180 secondes :</span><br /><br />
				<span style="font-size:18px;font-weight:normal;">Votre score :<br />
				<div id="score" style="font-size:30px;"><strong>10</strong>/10</div>
				<br />
				<div id="temps" style="font-size:20px;"></div>
				<input type="button" class="btn" value="Nouvelle partie" onClick="window.location.reload()"/>
				</span>
				<br /><br />
				<div id="grille">
				<div class="case" id="case0"></div>
				<div class="case" id="case1"></div>
				<div class="case" id="case2"></div>
				<div class="case" id="case3"></div>
				
				<div class="case" id="case4"></div>
				<div class="case" id="case5"></div>
				<div class="case" id="case6"></div>
				<div class="case" id="case7"></div>
				
				<div class="case" id="case8"></div>
				<div class="case" id="case9"></div>
				<div class="case" id="case10"></div>
				<div class="case" id="case11"></div>
				
				<div class="case" id="case12"></div>
				<div class="case" id="case13"></div>
				<div class="case" id="case14"></div>
				<div class="case" id="case15"></div>
				</div>
			</div>				
		</div>
	</div>
</div>
<?php
require 'Footer.inc.php'
?>
</body>
</html>