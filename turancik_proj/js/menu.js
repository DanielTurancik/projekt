var hamburger = document.getElementById("hamburger");
function myNav() {
    var menu = document.querySelector(".menu");

    menu.classList.toggle("responsive");
}

hamburger.onclick = function () { myNav() };