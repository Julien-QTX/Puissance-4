<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style2.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace</title>
</head>
<body>

    <?php
    require "Header.inc.php"
    ?>

<div class="selecavatar">
            <label for="avatar">Choisir votre photo de profil :</label>

            <input type="file"
                id="avatar" name="avatar"
                accept="image/png, image/jpeg"
                class="avatar">
        </div>
            
        <img class="" src="" alt="">

    <?php
    require "Footer.inc.php"
    ?>

</body>

</html>