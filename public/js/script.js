const hamburger = document.querySelector("#hamburger");
const navbar = document.querySelector(".nav-menu");
const navbarfixed = document.querySelector("#navbar");

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navbar.classList.toggle("navbar-active");
});

window.addEventListener("scroll", () => {
    const windowPost = window.scrollY > 0;
    navbarfixed.classList.toggle("navbar-fixed", windowPost);
});

document.addEventListener("click", function (e) {
    if (!hamburger.contains(e.target) && !navbar.contains(e.target)) {
        hamburger.classList.remove("active");
        navbar.classList.remove("navbar-active");
    }
});
function goBack() {
    window.history.back();
}
