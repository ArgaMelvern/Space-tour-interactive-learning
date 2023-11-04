
// Hamburger Button (Navigation)
const hamButton = document.querySelector(".mobile-nav-toggle");
const sideNav = document.querySelector(".primary-navigation");


hamButton.addEventListener("click", ()=> {
    const visibility = sideNav.getAttribute("data-visible");
    if (visibility == "false"){
        sideNav.setAttribute("data-visible", true);
        hamButton.setAttribute("aria-expanded", true);
    }else{
        sideNav.setAttribute("data-visible", false);
        hamButton.setAttribute("aria-expanded", false);
    };
});

