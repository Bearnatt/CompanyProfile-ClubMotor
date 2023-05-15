// Set Scroll Navbar Animation
const navbar = document.getElementsByTagName("nav")[0];
window.addEventListener("scroll", function(){
    if (this.window.scrollY > 1) {
        navbar.classList.replace("bg-transparent", "navbar-color");
    }else if(this.window.scrollY <= 0){
        navbar.classList.replace("navbar-color", "bg-transparent");
    }
});

// Set Active Link
document.querySelectorAll(".nav-link").forEach((link) => {
    if (link.href === window.location.href) {
        link.classList.add("active");
        link.setAttribute("aria-current", "page");
    }
});