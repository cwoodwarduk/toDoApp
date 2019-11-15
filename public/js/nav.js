window.onscroll = function() {stickyNav()};

var navbar = document.getElementsByTagName("nav");

var sticky = navbar.offsetTop;

function stickyNav() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
    } else {
        navbar.classList.remove("sticky");
    }
}