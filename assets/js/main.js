import "../scss/main.scss";
import Swiper from "swiper";
import {Navigation, Pagination, Scrollbar} from "swiper/modules";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import "swiper/css/scrollbar";

// Swiper
const swiper = new Swiper(".swiper", {
    modules: [Navigation, Pagination, Scrollbar],
    direction: "horizontal",
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    scrollbar: {
        el: ".swiper-scrollbar",
        draggable: true,
    },
});

// Primary navigation
document.addEventListener("DOMContentLoaded", () => {
    const toggleMobileNavButton = document.getElementById("toggle-mobile-nav");
    const body = document.querySelector("body");

    if (!toggleMobileNavButton || !body) return;

    toggleMobileNavButton.addEventListener("click", () => {
        const isOpen = body.classList.toggle("primary-nav-open");

        toggleMobileNavButton.classList.toggle("open", isOpen);
        toggleMobileNavButton.setAttribute("aria-expanded", isOpen);
        toggleMobileNavButton.setAttribute("aria-label", isOpen ? "Close navigation" : "Open navigation");
    });
});

console.log("Hello, world!");
