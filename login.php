

<link rel="stylesheet" href="login.css">

    <?php
    require "Header.inc.php";
    
    include ('includes/sqlconnect.php');
    ?>



    
    <section class="log">
        <div>
        

            <form action="" method="post">
          
                <input type="text" name="Email" placeholder="Email" required="required"/>

                <input type="password" name="password" placeholder="Mot de passe" required="required"/>
                <button type="submit">Connexion</button>

            </form>
        </div>
    </section>

    <?php
    require "Footer.inc.php"
    ?>


