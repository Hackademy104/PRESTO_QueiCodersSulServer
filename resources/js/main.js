/* SCROLL NAVBAR */

/* let nav = document.querySelector("#nav");
let links = document.querySelectorAll(".nav-item");

window.addEventListener("scroll", () => {
    if (window.scrollY > 0) {
        nav.style.backgroundColor = `rgb(72, 202, 228)`;
        links.forEach((link) => {
            link.style.color = `rgb(237, 242, 244)`;
            link.addEventListener("mouseover", () => {
                link.style.color = `rgb(237, 242, 244)`;
            })
        })
        logo.src = "http://127.0.0.1:5500/media/logoW.png";

    } else {
        nav.style.backgroundColor = `rgb(237, 242, 244)`;
        logo.src = "http://127.0.0.1:5500/media/logo.png"
    }
}) */


document.addEventListener("DOMContentLoaded", function() {
    var alertMessages = document.querySelectorAll('.alert-success.fade-out');
    
    function hideMessage(alertMessage) {
        alertMessage.style.transition = "opacity 1s";
        alertMessage.style.opacity = 0;
        setTimeout(function() {
            alertMessage.remove();
        }, 1000);
    }

    alertMessages.forEach(function(alertMessage) {
        document.getElementById('submitBtn').addEventListener('click', function() {
            hideMessage(alertMessage);
        });

        setTimeout(function() {
            hideMessage(alertMessage);
        }, 10000); // 10000 millisecondi = 10 secondi
    });
});
