<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style contact.css"/>
    <style>
        
    </style>
    <title>Contacte</title>
</head>
<?php
require 'Header.html'
?>
<body>
    <div class="center">
        <h1>nous contacter</h1>
    </div> 
    <!--au dessus ce situe le titre plus la balise permetant de tous centrer-->
    <div class="icone">
        <div>
            <img class="img" src="../image/telephone.jpeg" width="25%" alt="phone">
            <p style="color: white;">numéro de téléphone</p>
        </div>
        <div>
            <img class="img" src="../image/lettre.jpeg" width="20%" alt="emaill">
            <p style="color: white;">email</p>
        </div>
        <div>
            <img class="img" src="../image/point.jpeg" width="30%" alt="ocalisation">
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
            <input class="sujet" typze="text" name="sujet" placeholder="sujet">
            <textarea class="message" type="text" name="message" placeholder="message "></textarea>
            <button style="color: white;" class="bouton">Envoyer</button>
        </form>
    </div>
  <!--au dessus ce situe le formulaire de remplisage avec le bouton envoyer -->
    
</body>
</html>