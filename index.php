<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/style.css">
    <title>Accueil</title>
</head>
<body>
<?php
require 'HeaderIndex.php'
?>
<div class="container">
    
    <!--images de plusieurs jeux avec description-->
    <div class="imaage">
        <img class="imag" src="./asset/images/Photodejeux1.jpeg" alt="Photojeux1">
    
        <img class="imag" src="./asset/images/Photodejeux2.png" alt="Photojeux2">
        
        <img class="imag" src="./asset/images/Photodejeux3.png" alt="Photojeux2">

    </div>

    

    <div class="textebody">
        <div class = "textee">
            <h1 class="Chiffre">01</h1>   
            <p class="txt"> <strong> Lorem ipsum </strong> <br> <br> amet consectetur adipisicing elit. 
                Totam consequatur mollitia reprehenderit dolorum corrupti id quia, 
                odio illum debitis a reiciendis libero itaque dolorem iusto 
                cupiditate ab, pariatur animi autem. Lorem ipsum dolor sit amet consectetur, 
                adipisicing elit. Beatae aliquam voluptas facere quasi eligendi qui, 
                dolor magnam cupiditate repellat consequuntur deleniti et minus ipsa quaerat
                nemo eos incidunt in! Doloribus.</p>
        </div>

        <div class = "textee">
            <h1 class="Chiffre">02</h1>    
            <p class="txt"> <strong> Lorem ipsum </strong> <br> <br> sit amet consectetur adipisicing elit. 
                Totam consequatur mollitia reprehenderit dolorum corrupti id quia, 
                odio illum debitis a reiciendis libero itaque dolorem iusto 
                cupiditate ab, pariatur animi autem. Lorem ipsum dolor sit amet consectetur, 
                adipisicing elit. Beatae aliquam voluptas facere quasi eligendi qui, 
                dolor magnam cupiditate repellat consequuntur deleniti et minus ipsa quaerat
                nemo eos incidunt in! Doloribus.</p>
        </div>
        
        <div class= "textee"> 
            <h1 class="Chiffre">03</h1>   
            <p class="txt"> <strong> Lorem ipsum </strong> <br> <br> sit amet consectetur adipisicing elit. 
                Totam consequatur mollitia reprehenderit dolorum corrupti id quia, 
                odio illum debitis a reiciendis libero itaque dolorem iusto 
                cupiditate ab, pariatur animi autem. Lorem ipsum dolor sit amet consectetur, 
                adipisicing elit. Beatae aliquam voluptas facere quasi eligendi qui, 
                dolor magnam cupiditate repellat consequuntur deleniti et minus ipsa quaerat
                nemo eos incidunt in! Doloribus.</p>
        </div>
    </div>

    <!--Creation de blocs répertoriant des infos sur l'utilisateur-->
    <div class="blocinfo">
        <div class="Immag">
            <img src="./asset/images/image4.png" width="100%" alt="jeuvideo">
        </div>    
        <div class = "carres">
            <div class="Haut">
                <div class = carrerouge>
                    <h2 class="H2i"> 21 Partie joué</h2>
                   <div class="partiJoué">
                   <?php
                    $part = 0;
                    ?>
                   </div>
                  
                </div>
                <div class = carrevert>
                    <h2 class="H2i">X Joueurs connectés</h2>
                </div>
            </div>
            <div class="Bas">
                <div class = carreorange>
                    <h2 class="H2i">30 sec Temps Record</h2>
                </div>
                <div class = carrebleu>
                    <h2 class="H2i">5 Joueurs inscrits</h2>
                </div>
            </div>
        </div>
    </div>
    <!--liste des differentes personnes sur le projet avec lien vers les réseauw-->
    <div class="separation">
        <h2 class="H2">Notre Équipe</h2>
        <p id="texteequipe">Quisque commodo facilisis purus, interdum volutpat arcu viverra sed.</p>
        <img src="./asset/images/separation.png" alt="separation">
    
        <div class="boxequipe">
            <div class = boxequipeT>
                <img class = "pdp" src="./asset/images/Bastien.png" alt="" width="60%">
                <h2 class="nom">Bastien</h2> 
                <p>Games Developer</p>
                <div class = icone>
                    <img class = "logo" src="./asset/images/facebook.png" alt="">
                    <img class = "logo" src="./asset/images/twitter.png" alt="">
                    <img class = "logo" src="./asset/images/pinterest.png" alt="">
                </div>
            </div>    
            
            <div class = boxequipeT>
                <img class = "pdp" src="./asset/images/Adam.png" alt="" width="60%">
                <h2 class="nom">Adam</h2>
                <p>Games Designer</p>
                <div class="icone">
                    <img class = "logo" src="./asset/images/facebook.png" alt="">
                    <img class = "logo" src="./asset/images/twitter.png" alt="">
                    <img class = "logo" src="./asset/images/pinterest.png" alt="">
                </div>
            </div>

            <div class = boxequipeT>
                <img class = "pdp" src="./asset/images/Guillaume.png" alt="" width="60%">
                <h2 class="nom">Guillaume</h2>
                <p>Games Developer</p>
                <div class="icone">
                    <img class = "logo" src="./asset/images/facebook.png" alt="">
                    <img class = "logo" src="./asset/images/twitter.png" alt="">
                    <img class = "logo" src="./asset/images/pinterest.png" alt="">
                </div>
            </div>

            <div class = boxequipeT>
                <img class = "pdp" src="./asset/images/Julien.png" alt="" width="60%">
                <h2 class="nom">Julien</h2>
                <p>Games Developer</p>
                <div class="icone">
                    <img class = "logo" src="./asset/images/facebook.png" alt="">
                    <img class = "logo" src="./asset/images/twitter.png" alt="">
                    <img class = "logo" src="./asset/images/pinterest.png" alt="">
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