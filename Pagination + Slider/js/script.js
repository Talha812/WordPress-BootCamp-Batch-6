document.addEventListener("DOMContentLoaded", function () {
    const hamburger = document.querySelector(".hamburger-menu");
    const menu = document.querySelector(".primary-menu");

    hamburger.addEventListener("click", function () {
        menu.classList.toggle("active");
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const sliderWrapper = document.querySelector(".slider-wrapper");
    const slides = document.querySelectorAll(".slide");
    const prevButton = document.querySelector(".prev");
    const nextButton = document.querySelector(".next");
    let index = 0;

    function updateSlider() {
        sliderWrapper.style.transform = `translateX(-${index * 100}%)`;
    }

    prevButton.addEventListener("click", () => {
        index = (index > 0) ? index - 1 : slides.length - 1;
        updateSlider();
    });

    nextButton.addEventListener("click", () => {
        index = (index < slides.length - 1) ? index + 1 : 0;
        updateSlider();
    });
});
