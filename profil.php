<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require('./includes/headlinks.php') ?>
    
</head>

<body>
    <?php
    // 
    if (empty($_SESSION['id'])) {
        $_SESSION['error'] = "Vous devez d'abord vous connecter.";
        header('Location: ./index.php');
        exit();
    }
    ?>
    <a href="./index.php">Retour à l'accueil</a>
    <?php
    // affichage d'un message d'erreur stocké dans la session (un des seuls moyens de faire communiquer des fichiers entre eux)
    if ($_SESSION['error'] !== "") {
        echo $_SESSION['error'];
        // on vide la variable de session pour ne pas causer de conflits entre les messages d'erreur
        $_SESSION['error'] = "";
    }
    ?>
    <form action="./scripts/modifMail.php" method="post">
        <label for="mail">Nouveau mail</label>
        <input type="email" name="mail" id="mail">
        <button type="submit">Modifier Mail</button>
    </form>
    <form action="./scripts/modifPseudo.php" method="post">
        <label for="pseudo">Nouveau pseudo</label>
        <input type="text" name="pseudo" id="pseudo">
        <button type="submit">Modifier Pseudo</button>
    </form>
    <form action="./scripts/modifMDP.php" method="post">
        <label for="oldpass">Actuel mdp</label>
        <input type="password" name="oldpass" id="oldpass">
        <label for="newpass">Nouveau mdp</label>
        <input type="password" name="newpass" id="newpass">
        <label for="newpass2">Confirmation</label>
        <input type="password" name="newpass2" id="newpass2">
        <button type="submit">Modifier MDP</button>
    </form>
    <a href="./scripts/supprCompte.php">Supprimer mon compte</a>
    
</body>

<?php require('./includes/footer.php') ?>



</html>