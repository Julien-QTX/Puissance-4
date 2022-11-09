<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style contact.css">
</head>
<body>
    
</body>
</html>
<?php
require 'Header.php';
?>
</head>

<body>
    
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


</body>

    <?php
    require 'Footer.php'
    ?>

</html>
