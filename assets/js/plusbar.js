var clickPlusbarOpenButton = document.getElementById('plusbar-open-button');

function activatePlusbar() {
    var elementPlusbar = document.querySelector("body");
    elementPlusbar.classList.remove('plusbar-deactivated');
    elementPlusbar.classList.add('plusbar-activated');
}

clickPlusbarOpenButton.addEventListener("click", activatePlusbar, false); 

function deactivatePlusbar() {
    var elementPlusbar = document.querySelector("body");
    elementPlusbar.classList.remove('plusbar-activated');
    elementPlusbar.classList.add('plusbar-deactivated');
}

var clickOverlayPlusbar = document.querySelector(".plusbar-overlay");

clickOverlayPlusbar.addEventListener("click", deactivatePlusbar, false); 

var clickPlusbarCloseButton = document.getElementById('plusbar-close-button');

clickPlusbarCloseButton.addEventListener("click", deactivatePlusbar, false); 