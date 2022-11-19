<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/contact.css">
    <link rel="stylesheet" href="./asset/HeaderFooter.css">
    <title>Contact</title>
</head>
<body>

<?php
require "Header.inc.php";
include ('./asset/includes/sqlconnect.php');
?>

<div class="container">


    <!--au dessus ce situe le titre plus la balise permetant de tous centrer-->
    <div class="icone">
        <div class="Iicone">
            <img class="img" src="./asset/images/telephone.jpeg" width="25%" alt="phone">
            <p style="color: white;">numéro de téléphone</p>
        </div class="Iicone">
        <div>
            <img class="img" src="./asset/images/lettre.jpeg" width="25%" alt="">
            <p style="color: white;">email</p>
        </div>
        <div class="Iicone">
            <img class="img" src="./asset/images/point.jpeg" width="25%" alt="">
            <p style="color: white;">Localisation</p>
        </div>
    </div>
    <!-- au dessus ce situe tout les icone et les texte qui il a en dessous-->
    <div class="contact">
        <form method = "POST" >
            <div class="PE">
                <input class="name" type="name" name="prenom" placeholder="Prenom et Nom">
                <input class="email" type="email" name="email" placeholder="email">
            </div>
            <input class="sujet" type="text" name="sujet" placeholder="sujet">
            <textarea class="message" type="text" name="message" placeholder="message "></textarea>
            <!--<input type='submit' class="button" name="submit" />-->
            <button class="bouton" name="submit">Envoyer</button>
        </form>

        <?php
/* Page: contact.php */
//mettez ici votre adresse mail
$VotreAdresseMail="julien.quatravaux@edu.esiee-it.fr";
// si le bouton "Envoyer" est cliqué
if(isset($_POST['submit'])){
    //on vérifie que le champ mail est correctement rempli
    if(empty($_POST['prenom'])) {
        echo "Le champ nom est vide";
    }else{
        if(empty($_POST['email'])) {
            echo "Le champ email est vide";
        } else {
            //on vérifie que l'adresse est correcte
            if(!preg_match("#^[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?@[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?\.[a-z]{2,}$#i",$_POST['email'])){
                echo "L'adresse mail entrée est incorrecte";
            }else{
                //on vérifie que le champ sujet est correctement rempli
                if(empty($_POST['sujet'])) {
                    echo "Le champ sujet est vide";
                }else{
                    //on vérifie que le champ message n'est pas vide
                    if(strlen($_POST['message'])<15) {
                        echo "message trop court";
                    }else{
                        
                        //tout est correctement renseigné, on envoi le mail
                        //on renseigne les entêtes de la fonction mail de PHP
                        $Entetes = "MIME-Version: 1.0\r\n";
                        $Entetes .= "Content-type: text/html; charset=UTF-8\r\n";
                        $Entetes .= "From: Nom de votre site <".$_POST['email'].">\r\n";//de préférence une adresse avec le même domaine de là où, vous utilisez ce code, cela permet un envoie quasi certain jusqu'au destinataire
                        $Entetes .= "Reply-To: Nom de votre site <".$_POST['email'].">\r\n";
                        //on prépare les champs:
                        $Mail=$_POST['email']; 
                        $Sujet='=?UTF-8?B?'.base64_encode($_POST['sujet']).'?=';//Cet encodage (base64_encode) est fait pour permettre aux informations binaires d'être manipulées par les systèmes qui ne gèrent pas correctement les 8 bits (=?UTF-8?B? est une norme afin de transmettre correctement les caractères de la chaine)
                        $Message=htmlentities($_POST['message'],ENT_QUOTES,"UTF-8");//htmlentities() converti tous les accents en entités HTML, ENT_QUOTES Convertit en + les guillemets doubles et les guillemets simples, en entités HTML
                        //en fin, on envoi le mail
                        if(mail($VotreAdresseMail,$Sujet,nl2br($Message),$Entetes)){//la fonction nl2br permet de conserver les sauts de ligne et la fonction base64_encode de conserver les accents dans le titre
                            echo "Le email à été envoyé avec succès!";
                        } else {
                            echo "Une erreur est survenue, le mail n'a pas été envoyé";
                        }
                    }
            }
        }
    }
}
}
?>


    </div>
    <!--au dessus ce situe le formulaire de remplisage avec le bouton envoyer -->
</div>

<?php
    require "Footer.inc.php"
?>
</body>
</html>