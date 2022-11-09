<link rel="stylesheet" href="style contact.css">
<?php
require 'Header.inc.php';
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
    require 'Footer.inc.php'
    ?>

</html>
