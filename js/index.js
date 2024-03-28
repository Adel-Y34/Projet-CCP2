// récupération des boutons
const buttons = document.querySelectorAll(".form-switch");
function toggleForm() {
    document.querySelector('#inscription').classList.toggle("hide");
    document.querySelector('#connexion').classList.toggle("hide");
    // if(document.querySelector('#inscription').classList.contains("hide")) {
    //     document.querySelector('#inscription').classList.remove("hide");
    // } else {
    //     document.querySelector('#inscription').classList.add("hide");
    // }
    // if(document.querySelector('#connexion').classList.contains("hide")) {
    //     document.querySelector('#connexion').classList.remove("hide");
    // } else {
    //     document.querySelector('#connexion').classList.add("hide");
    // }
}
buttons[0].addEventListener("click", toggleForm);
buttons[1].addEventListener("click", toggleForm);