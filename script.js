let loader = document.getElementById("loader-container");
document.addEventListener("DOMContentLoaded", function () {
    console.log("started");
    loader.style.display = "block"
    var navLinks = document.querySelectorAll('.nav-link');
    // Get the current page URL
    var currentPage = window.location.pathname;
    if (currentPage == "/") {
        navLinks[0].classList.add("active")
    }
    // Get all the nav links

    // Loop through the links and add/remove the active class
    navLinks.forEach(function (link) {
        var linkPath = link.getAttribute('href');


        // Remove active class from all links
        link.parentElement.classList.remove('active');

        // If the current page matches the link, add the active class
        if (currentPage === linkPath) {
            link.parentElement.classList.add('active');
        }
    });
});
window.onload = function () {
    console.log("ended");
    
    loader.style.display = "none"
};