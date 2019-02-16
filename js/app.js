var hamburger = document.querySelector('.hamburger-nav');
var hamburgerLinks = document.querySelectorAll('.blog-nav-sm a');
var smallScreenNav = document.querySelector('.blog-nav-sm');

hamburger.addEventListener('click', function (e) {
    smallScreenNav.classList.toggle('blog-nav-sm-in');
});

hamburgerLinks.forEach(function (link) {
    link.addEventListener('click', function (e) {
        smallScreenNav.classList.toggle('blog-nav-sm-in');
    })
});