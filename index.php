<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <?php require('./includes/headlinks.php') ?>
</head>

<body>
    <?php require('./includes/header.php') ?>
    <?php require('includes\footer.php'); ?>
    <div class="container">
    <?php
    
    if (!empty($_SESSION['error'])) {
        echo $_SESSION['error'];
        
        $_SESSION['error'] = "";
    }
    ?>
    <?php
    if (empty($_SESSION['id'])) {
    ?>
        <div class="b1" id="inscription">
            <form action="./scripts/inscription.php" method="POST">
            <h1>Se connecter</h1>
            <div class="inputbox">
                <input type="text" placeholder="Identifiant" required>
                <img class="risky" src=""/>
    </div>
                <div class="inputbox">
                    
                    <input type="email" placeholder="Mail" name="mail" id="mail">
                </div>
                <div class="inputbox">
                    
                    <input type="password" placeholder="Password" name="pass" id="pass">
                </div>
                <div class="inputbox">
                    
                    <input type="password" placeholder="Confirmation password" name="pass2" id="pass2">
                </div>
                
                    <button class="reglink1" type="submit"><p>Confirm</p></button>
            
            </form>
            <button class="form-switch reglink1">Je souhaite me connecter</button>
        </div>
        <div id="connexion" class="hide">
            <form action="./scripts/connexion.php" method="POST">
                <h2>Connexion</h2>
                <div>
                    <label for="mail2">Mail</label>
                    <input type="email" id="mail2" name="mail2">
                </div>
                <div>
                    <label for="pass3">Mot de passe</label>
                    <input type="password" id="pass3" name="pass3">
                </div>
                <button type="submit">Valider</button>
            </form>
            <button class="form-switch">Je souhaite m'inscrire</button>
        </div>
    <?php
    } else {
        echo "<p>Bonjour, " . $_SESSION['pseudo'] . " !</p>";
        echo "<a href='./profil.php'>Modifier le profil</a>";
        echo "<a href='./scripts/deconnexion.php'>Déconnexion</a>";
    }
    ?>
    </div>
    
    
</body>

</html>