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

    </article>

	<section class="chat">
    <div class="messages">
        <div class="message">
            <span class="date">23:22</span>
            <span class="author">Bastien</span>
            <span class="content">Salut !</span>
        </div>
        <div class="message">
            <span class="date">23:24</span>
            <span class="author">Thomas</span>
            <span class="content">Ca va ?</span>
        </div>
        <div class="message">
            <span class="date">23:26</span>
            <span class="author">Bastien</span>
            <span class="content">Oui et toi ?</span>
        </div>
    </div>
    <div class="user-inputs">
        <form action="handler.php?task=write" method="POST">
            <input type="text" name="author" id="author" placeholder="Pseudo ?"> 
            <input type="text" name="content" placeholder="Tape ton message ici...">
            <button type="submit">Envoyer !</button>
        </form>
    </div>
    </section>    
    <script src="js/app.js"></script>

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
<script type="text/javascript" language="javascript">


	var nb_clics = 0;
	var mimi1 = "";
	var mimi2 = "";
	var case1 = "";
	var case2 = "";
	var img_ok = 0;
	var nb_erreurs = 0;
	var le_score = 0;
	var depart = false;
	var temps_debut = new Date().getTime()


	generation();

	var attente = setTimeout(function(){
		for(var i=0;i<64;i++){
			document.getElementById('img ' + i).src = "asset/images/mini/miniz.png";
		}
		depart = true;
	},4000);
	
	function generation()
	{
		var nb_alea; var nb_img="";
		var test = true; var chaine = "";
		
		for (var i=0;i<64;i++)
		{
			while (test==true)
			{
				nb_alea = Math.floor(Math.random()*64) + 1; //Pour génération dans les 16 cases
				if(chaine.indexOf("-" + nb_alea + "-")>-1)
					nb_alea = Math.floor(Math.random()*64) + 1;
				else
				{
					nb_img = Math.floor((nb_alea+1)/2); //8 paires pour 16 places ==> 2 générations différentes par image
					document.getElementById('case' + i).innerHTML = "<img style='cursor:pointer;width:100%' id='img " + i + "' src='./asset/images/mini/mini " + nb_img + ".png' onClick='verifier(\"img " + i + "\", \"mini " + nb_img + "\")' alt='' />";
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
			document.getElementById(limg).src = "asset/images/mini/" + source + ".png";

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
							document.getElementById(case1).src = "asset/images/mini/miniz.png";
							document.getElementById(case2).src = "asset/images/mini/miniz.png";
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