<link rel="stylesheet" href="style contact.css">

<?php
require "Header.inc.php";
include ('includes/sqlconnect.php');
?>

    <div class="container">

        
        <!--au dessus ce situe le titre plus la balise permetant de tous centrer-->
        <div class="icone">
            <div class="Iicone">
                <img class="img" src="./img/telephone.jpeg" width="25%" alt="phone">
                <p style="color: white;">numéro de téléphone</p>
            </div class="Iicone">
            <div>
                <img class="img" src="./img/lettre.jpeg" width="25%" alt="">
                <p style="color: white;">email</p>
            </div>
            <div class="Iicone">
                <img class="img" src="./img/point.jpeg" width="25%" alt="">
                <p style="color: white;">Localisation</p>
            </div>
        </div>
        <!-- au dessus ce situe tout les icone et les texte qui il a en dessous-->
        <div class="contact">
            <form action="" >
                <div class="PE">
                    <input class="name" type="name" name="prenom" placeholder="Prenom et Nom">
                    <input class="email" type="email" name="email" placeholder="email">
                </div>
                <input class="sujet" type="text" name="sujet" placeholder="sujet">
                <textarea class="message" type="text" name="message" placeholder="message "></textarea>
                <button style="color: white;" class="bouton">Envoyer</button>
            </form>
        </div>
    <!--au dessus ce situe le formulaire de remplisage avec le bouton envoyer -->
  </div>

  <?php
    require "Footer.inc.php"
    ?>
