import "../scss/main.scss";
import {initSwiper} from "./modules/swiper.js";
import {initNavigation} from "./modules/navigation.js";

document.addEventListener("DOMContentLoaded", () => {
    initSwiper()
    initNavigation()
});
