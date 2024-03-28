
document.addEventListener("DOMContentLoaded", function() {
    const registerModal = document.getElementById("registerModal");
    const openRegister = document.getElementById("openRegister");
    const closeRegister = document.getElementsByClassName("close")[0];

    // Ouvrir la pop-up d'inscription
    openRegister.onclick = function() {
        registerModal.style.display = "block";
    }

    // Fermer la pop-up d'inscription en cliquant sur la croix
    closeRegister.onclick = function() {
        registerModal.style.display = "none";
    }

    // Fermer la pop-up d'inscription lorsque l'utilisateur clique en dehors de celle-ci
    window.onclick = function(event) {
        if (event.target == registerModal) {
            registerModal.style.display = "none";
        }
    }
});
