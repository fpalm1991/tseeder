export const initNavigation = () => {
    const toggleMobileNavButton = document.getElementById("toggle-mobile-nav");
    const body = document.querySelector("body");

    if (!toggleMobileNavButton || !body) return;

    toggleMobileNavButton.addEventListener("click", () => {
        const isOpen = body.classList.toggle("primary-nav-open");

        toggleMobileNavButton.classList.toggle("open", isOpen);
        toggleMobileNavButton.setAttribute("aria-expanded", isOpen);
        toggleMobileNavButton.setAttribute("aria-label", isOpen ? "Close navigation" : "Open navigation");
    });
}
