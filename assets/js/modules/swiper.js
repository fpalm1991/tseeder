import Swiper from "swiper";
import {Navigation, Pagination, Scrollbar} from "swiper/modules";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import "swiper/css/scrollbar";

export const initSwiper = () => {
    new Swiper(".swiper", {
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
}
