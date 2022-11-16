<link rel="stylesheet" href="styleProfil.css">
<?php
    require "Header.inc.php";
    session_start();
    include ('includes/sqlconnect.php');
    


    ?> 

<div class="container">

    <h1 class="Titre">Bienvenue  Julien</h1>

    <div class="AvaScore">

        <div class="Avatar">
            <img class="AvaPro" src="./images/Champignon Bleu.jpg"alt="">

            <div class="selecavatar">

                <label for="avatar">Choisir votre photo de profil :</label>

                <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg" class="avatarFile">

            </div>
        </div>

        <ul>
       
    
        <li>
            <a href="logout.php">
                Se deconnecter
            </a>
        </li>
    </ul>   

        <div class="Score">
            <h1 class="Titre">Meilleur Scores</h1>

            <table>
                <thead>
                    <th>scores</th>
                    <th>Nbr de Coups</th>
                    <th>Difficulté</th>
                    <th>Date</th>
                </thead>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                </tr>
            </table>
        </div>

    </div>

</div>        

<?php
    require "Footer.inc.php"
?>