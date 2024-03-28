<?php
// obligatoire si on veut utiliser les variables de sessions
session_start();
// exemple de debug avec var_dump
// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';
// die;
require('../includes/dbConnect.php');

// vérification inputs vides
if (!empty($_POST['pseudo']) && !empty($_POST['mail']) && !empty($_POST['pass']) && !empty($_POST['pass2'])) {
    // vérification correspondance MDP
    if ($_POST['pass'] === $_POST['pass2']) {
        // sécurisation inputs
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mail = htmlspecialchars($_POST['mail']);
        $pass = password_hash($_POST['pass'], PASSWORD_BCRYPT);
        //  verifier si mail ou pseudo existent
        $query = $connect->prepare("SELECT * FROM user WHERE pseudo = ? OR mail = ?");
        $query->execute([$pseudo, $mail]);
        $response = $query->fetch();
        if($response === false) {
            // inscription de l'utilisateur si le mail ou le pseudo n'existent pas
            // insertion dans la BDD
            $query = $connect->prepare("INSERT INTO user(pseudo, mail, pass) VALUES(?, ?, ?)");
            $query->execute([$pseudo, $mail, $pass]);
            $_SESSION['error'] = "<p class='text-success'>Incription réussie. Veuillez vous connecter.</p>";
            header('Location: ../index.php');
            exit();
        } else {
            // erreur si doublon mail ou pseudo
            $_SESSION['error'] = "<p class='text-danger'>Votre mail ou votre pseudo existent déjà.</p>";
            header('Location: ../index.php');
            exit();
        }
    } else {
        // erreur MDP différents
        $_SESSION['error'] = "<p class='text-danger'>Les mots de passe ne sont pas identiques.</p>";
        header('Location: ../index.php');
        exit();
    }
} else {
    // erreur champ vide
    $_SESSION['error'] = "<p class='text-danger'>Un des champs est vide.</p>";
    header('Location: ../index.php');
    exit();
}
