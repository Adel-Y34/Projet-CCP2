<?php
// Vérification si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérification des données envoyées
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        // Récupération des données soumises
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Vérification du nom d'utilisateur et du mot de passe
        if ($username === "votre_nom_utilisateur" && $password === "votre_mot_de_passe") {
            // Authentification réussie
            // Vous pouvez rediriger l'utilisateur vers une page sécurisée ou afficher un message de bienvenue
            echo "Authentification réussie. Bienvenue, $username !";
        } else {
            
            echo "Nom d'utilisateur ou mot de passe incorrect.";
        }
    } else {
        // Si certaines données sont manquantes
        echo "Tous les champs du formulaire sont obligatoires.";
    }
}
?>

