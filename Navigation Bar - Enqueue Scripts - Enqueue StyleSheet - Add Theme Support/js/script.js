document.addEventListener("DOMContentLoaded", function () {
    const hamburger = document.querySelector(".hamburger-menu");
    const menu = document.querySelector(".primary-menu");

    hamburger.addEventListener("click", function () {
        menu.classList.toggle("active");
    });
});
