<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/JeuInter.css">
    <title>Intermédiaire</title>
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
                    <th><a href="JeuInter.php">Recommencer</a></th>
                    <th><a href="JeuDifficile.php">Difficile</a></th>
                    <th><a href="JeuExpert.php">Expert</a></th>
                    
                </tr>
            </table>
        </div>
		<div>
            <p>Différent thème</p>
            <table>
                <tr class="theme">
                    <th><a href="asset/InterTheme1.js"></a> thème 1</th>
                    <th><a href="asset/InterTheme2.js"></a> thème 2</th>
                    <th><a href="asset/InterTheme3.js"></a> thème 3</th>

                   
                </tr>
            </table>
        </div>

    </article>

    <div class="div_conteneur_parent">
						
		<div style="width:800px;display:inline-block;" id="conteneur">
		
		
			<div class="colonne" id="liste">
                <br />
                Vous avez trois minutes,<br />soit <span style="color:#CC3300;">180 secondes :</span><br /><br />
				<span style="font-size:18px;font-weight:normal;">Votre score :<br />
				<div id="score" style="font-size:30px;"><strong>10</strong>/10</div>
				<div id="temps" style="font-size:20px;"></div><br />
				<input type="button" class="btn" value="Nouvelle partie" onClick="window.location.reload()"/>
				</span>

                <br />
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

                    <div class="case" id="case16"></div>
                    <div class="case" id="case17"></div>
                    <div class="case" id="case18"></div>
                    <div class="case" id="case19"></div>
                    <div class="case" id="case20"></div>
                    <div class="case" id="case21"></div>
                    <div class="case" id="case22"></div>
                    <div class="case" id="case23"></div>

                    <div class="case" id="case24"></div>
                    <div class="case" id="case25"></div>
                    <div class="case" id="case26"></div>
                    <div class="case" id="case27"></div>
                    <div class="case" id="case28"></div>
                    <div class="case" id="case29"></div>
                    <div class="case" id="case30"></div>
                    <div class="case" id="case31"></div>

                    <div class="case" id="case32"></div>
                    <div class="case" id="case33"></div>
                    <div class="case" id="case34"></div>
                    <div class="case" id="case35"></div>
                    <div class="case" id="case36"></div>
                    <div class="case" id="case37"></div>
                    <div class="case" id="case38"></div>
                    <div class="case" id="case39"></div>

                    <div class="case" id="case40"></div>
                    <div class="case" id="case41"></div>
                    <div class="case" id="case42"></div>
                    <div class="case" id="case43"></div>
                    <div class="case" id="case44"></div>
                    <div class="case" id="case45"></div>
                    <div class="case" id="case46"></div>
                    <div class="case" id="case47"></div>

                    <div class="case" id="case48"></div>
                    <div class="case" id="case49"></div>
                    <div class="case" id="case50"></div>
                    <div class="case" id="case51"></div>
                    <div class="case" id="case52"></div>
                    <div class="case" id="case53"></div>
                    <div class="case" id="case54"></div>
                    <div class="case" id="case55"></div>

                    <div class="case" id="case56"></div>
                    <div class="case" id="case57"></div>
                    <div class="case" id="case58"></div>
                    <div class="case" id="case59"></div>
                    <div class="case" id="case60"></div>
                    <div class="case" id="case61"></div>
                    <div class="case" id="case62"></div>
                    <div class="case" id="case63"></div>
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