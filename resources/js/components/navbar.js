window.addEventListener("load", () => {
    const openBtn = document.getElementById("openSearch");
    const closeBtn = document.getElementById("closeSearch");
    const searchBar = document.getElementById("searchBar");
    const overlay = document.getElementById("searchOverlay");
    const Menu = document.getElementById("Menu");
    const HamBurger = document.getElementById("ham-burger");
    const closeHamburger = document.getElementById("closeHamburger");
    const HamBurger_Overlay = document.getElementById("HamBurger-Overlay");
    const arrow = document.getElementById("servicesArrow");
    const menu = document.getElementById("services-menu");
    const SubmenuArrow = document.getElementById("submenu-arrow");
    const SubMenu = document.getElementById("services-submenu");
    const SubmenuArrow2 = document.getElementById("submenu-arrow2");
    const SubMenu2 = document.getElementById("services-submenu2");

    openBtn.addEventListener("click", () => {
        searchBar.classList.remove("-translate-y-full");
        overlay.classList.remove("hidden");
    });

    closeBtn.addEventListener("click", () => {
        searchBar.classList.add("-translate-y-full");
        overlay.classList.add("hidden");
    });

    Menu.addEventListener("click", () => {
        HamBurger.classList.remove("-translate-x-full");
        HamBurger_Overlay.classList.remove("hidden");
    });

    closeHamburger.addEventListener("click", () => {
        HamBurger.classList.add("-translate-x-full");
        HamBurger_Overlay.classList.add("hidden");
    });

    arrow.addEventListener("click", function () {
        menu.classList.toggle("max-h-0");
        menu.classList.toggle("max-h-96");
        arrow.classList.toggle("rotate-180");
    });

    SubmenuArrow.addEventListener("click", function () {
        SubMenu.classList.toggle("max-h-0");
        SubMenu.classList.toggle("max-h-96");
        SubmenuArrow.classList.toggle("rotate-180");
    });

    SubmenuArrow2.addEventListener("click", function () {
        SubMenu2.classList.toggle("max-h-0");
        SubMenu2.classList.toggle("max-h-96");
        SubmenuArrow2.classList.toggle("rotate-180");
    });
});