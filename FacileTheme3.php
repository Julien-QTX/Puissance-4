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
$titre='Facile';
require "Header.inc.php";
?>

<div class="container">
    
    <article class="arti">
        
        <div class="lvl">
            <p>Niveau de difficulté</p>

            <table>
                <tr class="NiveauJeu">
                    <th><a href="FacileTheme3.php">Recommencer</a></th>
                    <th><a href="InterTheme3.php">Intermédiaire</a></th>
                    <th><a href="DifficileTheme3.php">Difficile</a></th>
                    <th><a href="ExpertTheme3.php">Expert</a></th>
                    
                </tr>
            </table>
        </div>
		<div>
            <p>Différent thème</p>
            <table>
                <tr class="theme">
                    <th><a href="FacileTheme1.php">Thème 1</a></th>
                    <th><a href="FacileTheme2.php">Thème 2</a></th>
                    <th><a href="FacileTheme3.php">Thème 3</a></th>
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
<script>
var nb_clics = 0;
var mini1 = "";
var mini2 = "";
var case1 = "";
var case2 = "";
var img_ok = 0;
var nb_erreurs = 0;
var le_score = 0;
var depart = false;
var temps_debut = new Date().getTime()


generation();

var attente = setTimeout(function(){
    for(var i=0;i<16;i++){
        document.getElementById('img ' + i).src = "asset/images/middle/middlez.png";
    }
    depart = true;
},4000);

function generation()
{
    var nb_alea; var nb_img="";
    var test = true; var chaine = "";
    
    for (var i=0;i<16;i++)
    {
        while (test==true)
        {
            nb_alea = Math.floor(Math.random()*16) + 1; //Pour génération dans les 16 cases
            if(chaine.indexOf("-" + nb_alea + "-")>-1)
                nb_alea = Math.floor(Math.random()*16) + 1;
            else
            {
                nb_img = Math.floor((nb_alea+1)/2); //8 paires pour 16 places ==> 2 générations différentes par image
                document.getElementById('case' + i).innerHTML = "<img style='cursor:pointer;width:100%' id='img " + i + "' src='asset/images/middle/middle " + nb_img + ".png' onClick='verifier(\"img " + i + "\", \"middle " + nb_img + "\")' alt='' />";
                chaine += "-" + nb_alea + "-";
                test=false;
            }			
        }
        test=true;			
    }
}

function verifier(limg, source){
    if(depart == true){
        nb_clics++;
        document.getElementById(limg).src = "asset/images/middle/" + source + ".png";

        if(nb_clics == 1){
            mini1 = source;
            case1 = limg;
        }else{
            mini2 = source;
            case2 = limg;

            if(case1!=case2){
                depart = false;
                if(mini1 != mini2){
                    var attente = setTimeout(function(){
                        document.getElementById(case1).src = "asset/images/middle/middlez.png";
                        document.getElementById(case2).src = "asset/images/middle/middlez.png";
                        depart=true;
                        nb_clics = 0;
                        nb_erreurs ++;
                        if(nb_erreurs < 11) le_score = 10 - nb_erreurs;
                        document.getElementById("score").innerHTML = "<strong>" + le_score + "</strong>/10";
                    },1000);
                }else{
                    depart=true;
                    nb_clics=0;
                    img_ok += 2;
                    if(img_ok==16){
                        var dif_temps = Math.floor((new Date().getTime() - temps_debut)/1000);
                        document.getElementById("score").innerHTML = "<strong>" + le_score + "</strong>/10";
                        document.getElementById("temps").innerHTML = "Vous avez mis <strong>" + dif_temps + "</strong> secondes";
                    }
                }
            }else{
                if(nb_clics == 2) nb_clics =1;
            }
            if(dif_temps >180){
                document.getElementById("temps").innerHTML = "le temps imparti est dépassé, vous avez perdu";
                depart = false;
            }
        }
    }
}
</script>
</html>