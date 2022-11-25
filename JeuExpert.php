<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/JeuExpert.css">
    <title>Expert</title>
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
                    <th><a href="JeuDifficile.php">Difficile</a></th>
                    <th><a href="JeuExpert.php">Recommencer</a></th>
                </tr>
            </table>
        </div>
        <div>
            <p>Différent thème</p>
            <table>
                <tr class="theme">
                    <th><a href="asset/ExpertTheme1.js"></a> thème 1</th>
                    <th><a href="asset/ExpertTheme2.js"></a> thème 2</th>
                    <th><a href="asset/ExpertTheme3.js"></a> thème 3</th>

                   
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
                    <div class="case" id="case64"></div>
                    <div class="case" id="case65"></div>
                    <div class="case" id="case66"></div>
                    <div class="case" id="case67"></div>
                    <div class="case" id="case68"></div>
                    <div class="case" id="case69"></div>
                    <div class="case" id="case70"></div>
                    <div class="case" id="case71"></div>
                    <div class="case" id="case72"></div>
                    <div class="case" id="case73"></div>
                    <div class="case" id="case74"></div>
                    <div class="case" id="case75"></div>
                    <div class="case" id="case76"></div>
                    <div class="case" id="case77"></div>
                    <div class="case" id="case78"></div>
                    <div class="case" id="case79"></div>

                    <div class="case" id="case80"></div>
                    <div class="case" id="case81"></div>
                    <div class="case" id="case82"></div>
                    <div class="case" id="case83"></div>
                    <div class="case" id="case84"></div>
                    <div class="case" id="case85"></div>
                    <div class="case" id="case86"></div>
                    <div class="case" id="case87"></div>
                    <div class="case" id="case88"></div>
                    <div class="case" id="case89"></div>
                    <div class="case" id="case90"></div>
                    <div class="case" id="case91"></div>
                    <div class="case" id="case92"></div>
                    <div class="case" id="case93"></div>
                    <div class="case" id="case94"></div>
                    <div class="case" id="case95"></div>
                    <div class="case" id="case96"></div>
                    <div class="case" id="case97"></div>
                    <div class="case" id="case98"></div>
                    <div class="case" id="case99"></div>

                    <div class="case" id="case100"></div>
                    <div class="case" id="case101"></div>
                    <div class="case" id="case102"></div>
                    <div class="case" id="case103"></div>
                    <div class="case" id="case104"></div>
                    <div class="case" id="case105"></div>
                    <div class="case" id="case106"></div>
                    <div class="case" id="case107"></div>
                    <div class="case" id="case108"></div>
                    <div class="case" id="case109"></div>
                    <div class="case" id="case110"></div>
                    <div class="case" id="case111"></div>
                    <div class="case" id="case112"></div>
                    <div class="case" id="case113"></div>
                    <div class="case" id="case114"></div>
                    <div class="case" id="case115"></div>
                    <div class="case" id="case116"></div>
                    <div class="case" id="case117"></div>
                    <div class="case" id="case118"></div>
                    <div class="case" id="case119"></div>

                    <div class="case" id="case120"></div>
                    <div class="case" id="case121"></div>
                    <div class="case" id="case122"></div>
                    <div class="case" id="case123"></div>
                    <div class="case" id="case124"></div>
                    <div class="case" id="case125"></div>
                    <div class="case" id="case126"></div>
                    <div class="case" id="case127"></div>
                    <div class="case" id="case128"></div>
                    <div class="case" id="case129"></div>
                    <div class="case" id="case130"></div>
                    <div class="case" id="case131"></div>
                    <div class="case" id="case132"></div>
                    <div class="case" id="case133"></div>
                    <div class="case" id="case134"></div>
                    <div class="case" id="case135"></div>
                    <div class="case" id="case136"></div>
                    <div class="case" id="case137"></div>
                    <div class="case" id="case138"></div>
                    <div class="case" id="case139"></div>

                    <div class="case" id="case140"></div>
                    <div class="case" id="case141"></div>
                    <div class="case" id="case142"></div>
                    <div class="case" id="case143"></div>
                    <div class="case" id="case144"></div>
                    <div class="case" id="case145"></div>
                    <div class="case" id="case146"></div>
                    <div class="case" id="case147"></div>
                    <div class="case" id="case148"></div>
                    <div class="case" id="case149"></div>
                    <div class="case" id="case150"></div>
                    <div class="case" id="case151"></div>
                    <div class="case" id="case152"></div>
                    <div class="case" id="case153"></div>
                    <div class="case" id="case154"></div>
                    <div class="case" id="case155"></div>
                    <div class="case" id="case156"></div>
                    <div class="case" id="case157"></div>
                    <div class="case" id="case158"></div>
                    <div class="case" id="case159"></div>

                    <div class="case" id="case160"></div>
                    <div class="case" id="case161"></div>
                    <div class="case" id="case162"></div>
                    <div class="case" id="case163"></div>
                    <div class="case" id="case164"></div>
                    <div class="case" id="case165"></div>
                    <div class="case" id="case166"></div>
                    <div class="case" id="case167"></div>
                    <div class="case" id="case168"></div>
                    <div class="case" id="case169"></div>
                    <div class="case" id="case170"></div>
                    <div class="case" id="case171"></div>
                    <div class="case" id="case172"></div>
                    <div class="case" id="case173"></div>
                    <div class="case" id="case174"></div>
                    <div class="case" id="case175"></div>
                    <div class="case" id="case176"></div>
                    <div class="case" id="case177"></div>
                    <div class="case" id="case178"></div>
                    <div class="case" id="case179"></div>

                    <div class="case" id="case180"></div>
                    <div class="case" id="case181"></div>
                    <div class="case" id="case182"></div>
                    <div class="case" id="case183"></div>
                    <div class="case" id="case184"></div>
                    <div class="case" id="case185"></div>
                    <div class="case" id="case186"></div>
                    <div class="case" id="case187"></div>
                    <div class="case" id="case188"></div>
                    <div class="case" id="case189"></div>
                    <div class="case" id="case190"></div>
                    <div class="case" id="case191"></div>
                    <div class="case" id="case192"></div>
                    <div class="case" id="case193"></div>
                    <div class="case" id="case194"></div>
                    <div class="case" id="case195"></div>
                    <div class="case" id="case196"></div>
                    <div class="case" id="case197"></div>
                    <div class="case" id="case198"></div>
                    <div class="case" id="case199"></div>

                    <div class="case" id="case200"></div>
                    <div class="case" id="case201"></div>
                    <div class="case" id="case202"></div>
                    <div class="case" id="case203"></div>
                    <div class="case" id="case204"></div>
                    <div class="case" id="case205"></div>
                    <div class="case" id="case206"></div>
                    <div class="case" id="case207"></div>
                    <div class="case" id="case208"></div>
                    <div class="case" id="case209"></div>
                    <div class="case" id="case210"></div>
                    <div class="case" id="case211"></div>
                    <div class="case" id="case212"></div>
                    <div class="case" id="case213"></div>
                    <div class="case" id="case214"></div>
                    <div class="case" id="case215"></div>
                    <div class="case" id="case216"></div>
                    <div class="case" id="case217"></div>
                    <div class="case" id="case218"></div>
                    <div class="case" id="case219"></div>

                    <div class="case" id="case220"></div>
                    <div class="case" id="case221"></div>
                    <div class="case" id="case222"></div>
                    <div class="case" id="case223"></div>
                    <div class="case" id="case224"></div>
                    <div class="case" id="case225"></div>
                    <div class="case" id="case226"></div>
                    <div class="case" id="case227"></div>
                    <div class="case" id="case228"></div>
                    <div class="case" id="case229"></div>
                    <div class="case" id="case230"></div>
                    <div class="case" id="case231"></div>
                    <div class="case" id="case232"></div>
                    <div class="case" id="case233"></div>
                    <div class="case" id="case234"></div>
                    <div class="case" id="case235"></div>
                    <div class="case" id="case236"></div>
                    <div class="case" id="case237"></div>
                    <div class="case" id="case238"></div>
                    <div class="case" id="case239"></div>
                    
                    <div class="case" id="case240"></div>
                    <div class="case" id="case241"></div>
                    <div class="case" id="case242"></div>
                    <div class="case" id="case243"></div>
                    <div class="case" id="case244"></div>
                    <div class="case" id="case245"></div>
                    <div class="case" id="case246"></div>
                    <div class="case" id="case247"></div>
                    <div class="case" id="case248"></div>
                    <div class="case" id="case249"></div>
                    <div class="case" id="case250"></div>
                    <div class="case" id="case251"></div>
                    <div class="case" id="case252"></div>
                    <div class="case" id="case253"></div>
                    <div class="case" id="case254"></div>
                    <div class="case" id="case255"></div>
                    <div class="case" id="case256"></div>
                    <div class="case" id="case257"></div>
                    <div class="case" id="case258"></div>
                    <div class="case" id="case259"></div>

                    <div class="case" id="case260"></div>
                    <div class="case" id="case261"></div>
                    <div class="case" id="case262"></div>
                    <div class="case" id="case263"></div>
                    <div class="case" id="case264"></div>
                    <div class="case" id="case265"></div>
                    <div class="case" id="case266"></div>
                    <div class="case" id="case267"></div>
                    <div class="case" id="case268"></div>
                    <div class="case" id="case269"></div>
                    <div class="case" id="case270"></div>
                    <div class="case" id="case271"></div>
                    <div class="case" id="case272"></div>
                    <div class="case" id="case273"></div>
                    <div class="case" id="case274"></div>
                    <div class="case" id="case275"></div>
                    <div class="case" id="case276"></div>
                    <div class="case" id="case277"></div>
                    <div class="case" id="case278"></div>
                    <div class="case" id="case279"></div>

                    <div class="case" id="case280"></div>
                    <div class="case" id="case281"></div>
                    <div class="case" id="case282"></div>
                    <div class="case" id="case283"></div>
                    <div class="case" id="case284"></div>
                    <div class="case" id="case285"></div>
                    <div class="case" id="case286"></div>
                    <div class="case" id="case287"></div>
                    <div class="case" id="case288"></div>
                    <div class="case" id="case289"></div>
                    <div class="case" id="case290"></div>
                    <div class="case" id="case291"></div>
                    <div class="case" id="case292"></div>
                    <div class="case" id="case293"></div>
                    <div class="case" id="case294"></div>
                    <div class="case" id="case295"></div>
                    <div class="case" id="case296"></div>
                    <div class="case" id="case297"></div>
                    <div class="case" id="case298"></div>
                    <div class="case" id="case299"></div>

                    <div class="case" id="case300"></div>
                    <div class="case" id="case301"></div>
                    <div class="case" id="case302"></div>
                    <div class="case" id="case303"></div>
                    <div class="case" id="case304"></div>
                    <div class="case" id="case305"></div>
                    <div class="case" id="case306"></div>
                    <div class="case" id="case307"></div>
                    <div class="case" id="case308"></div>
                    <div class="case" id="case309"></div>
                    <div class="case" id="case310"></div>
                    <div class="case" id="case311"></div>
                    <div class="case" id="case312"></div>
                    <div class="case" id="case313"></div>
                    <div class="case" id="case314"></div>
                    <div class="case" id="case315"></div>
                    <div class="case" id="case316"></div>
                    <div class="case" id="case317"></div>
                    <div class="case" id="case318"></div>
                    <div class="case" id="case319"></div>

                    <div class="case" id="case320"></div>
                    <div class="case" id="case321"></div>
                    <div class="case" id="case322"></div>
                    <div class="case" id="case323"></div>
                    <div class="case" id="case324"></div>
                    <div class="case" id="case325"></div>
                    <div class="case" id="case326"></div>
                    <div class="case" id="case327"></div>
                    <div class="case" id="case328"></div>
                    <div class="case" id="case329"></div>
                    <div class="case" id="case330"></div>
                    <div class="case" id="case331"></div>
                    <div class="case" id="case332"></div>
                    <div class="case" id="case333"></div>
                    <div class="case" id="case334"></div>
                    <div class="case" id="case335"></div>
                    <div class="case" id="case336"></div>
                    <div class="case" id="case337"></div>
                    <div class="case" id="case338"></div>
                    <div class="case" id="case339"></div>

                    <div class="case" id="case340"></div>
                    <div class="case" id="case341"></div>
                    <div class="case" id="case342"></div>
                    <div class="case" id="case343"></div>
                    <div class="case" id="case344"></div>
                    <div class="case" id="case345"></div>
                    <div class="case" id="case346"></div>
                    <div class="case" id="case347"></div>
                    <div class="case" id="case348"></div>
                    <div class="case" id="case349"></div>
                    <div class="case" id="case350"></div>
                    <div class="case" id="case351"></div>
                    <div class="case" id="case352"></div>
                    <div class="case" id="case353"></div>
                    <div class="case" id="case354"></div>
                    <div class="case" id="case355"></div>
                    <div class="case" id="case356"></div>
                    <div class="case" id="case357"></div>
                    <div class="case" id="case358"></div>
                    <div class="case" id="case359"></div>

                    <div class="case" id="case360"></div>
                    <div class="case" id="case361"></div>
                    <div class="case" id="case362"></div>
                    <div class="case" id="case363"></div>
                    <div class="case" id="case364"></div>
                    <div class="case" id="case365"></div>
                    <div class="case" id="case366"></div>
                    <div class="case" id="case367"></div>
                    <div class="case" id="case368"></div>
                    <div class="case" id="case369"></div>
                    <div class="case" id="case370"></div>
                    <div class="case" id="case371"></div>
                    <div class="case" id="case372"></div>
                    <div class="case" id="case373"></div>
                    <div class="case" id="case374"></div>
                    <div class="case" id="case375"></div>
                    <div class="case" id="case376"></div>
                    <div class="case" id="case377"></div>
                    <div class="case" id="case378"></div>
                    <div class="case" id="case379"></div>

                    <div class="case" id="case380"></div>
                    <div class="case" id="case381"></div>
                    <div class="case" id="case382"></div>
                    <div class="case" id="case383"></div>
                    <div class="case" id="case384"></div>
                    <div class="case" id="case385"></div>
                    <div class="case" id="case386"></div>
                    <div class="case" id="case387"></div>
                    <div class="case" id="case388"></div>
                    <div class="case" id="case389"></div>
                    <div class="case" id="case390"></div>
                    <div class="case" id="case391"></div>
                    <div class="case" id="case392"></div>
                    <div class="case" id="case393"></div>
                    <div class="case" id="case394"></div>
                    <div class="case" id="case395"></div>
                    <div class="case" id="case396"></div>
                    <div class="case" id="case397"></div>
                    <div class="case" id="case398"></div>
                    <div class="case" id="case399"></div>

				</div>
			</div>				
		</div>
	</div>

</div>
<script src="./tchat.js"></script>
<?php
require 'Footer.inc.php'
?>
</body>
<script type="text/javascript" language="javascript">


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
		for(var i=0;i<400;i++){
			document.getElementById('img ' + i).src = "asset/images/mini/miniz.png";
		}
		depart = true;
	},10000);
	
	function generation()
	{
		var nb_alea; var nb_img="";
		var test = true; var chaine = "";
		
		for (var i=0;i<400;i++)
		{
			while (test==true)
			{
				nb_alea = Math.floor(Math.random()*400) + 1; //Pour génération dans les 16 cases
				if(chaine.indexOf("-" + nb_alea + "-")>-1)
					nb_alea = Math.floor(Math.random()*400) + 1;
				else
				{
					nb_img = Math.floor((nb_alea+1)/2); //8 paires pour 16 places ==> 2 générations différentes par image
					document.getElementById('case' + i).innerHTML = "<img style='cursor:pointer;width:100%' id='img " + i + "' src='asset/images/mini/mini " + nb_img + ".png' onClick='verifier(\"img " + i + "\", \"mini " + nb_img + "\")' alt='' />";
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