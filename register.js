
document.addEventListener("DOMContentLoaded", function() {
    var form = document.getElementById('register-form');
    var errorMessage = document.getElementById('error-message');
    var successMessage = document.getElementById('success-message');

    form.addEventListener('submit', function(event) {
        event.preventDefault();

        var username = form.querySelector('#username').value;
        var email = form.querySelector('#email').value;
        var password = form.querySelector('#password').value;

        if (username.trim() === '' || email.trim() === '' || password.trim() === '') {
            errorMessage.style.display = 'block';
            successMessage.style.display = 'none';
        } else {
            errorMessage.style.display = 'none';
            successMessage.style.display = 'block';
            // Ici, tu pourrais envoyer les données du formulaire au serveur pour le traitement
        }
    });
});
