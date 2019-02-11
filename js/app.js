const hamburger = document.querySelector('.hamburger-nav');
const hamburgerLinks = document.querySelectorAll('.blog-nav-sm a');
const smallScreenNav = document.querySelector('.blog-nav-sm');

hamburger.addEventListener('click', function (e) {
    smallScreenNav.classList.toggle('blog-nav-sm-in');
});

hamburgerLinks.forEach(function (link) {
    link.addEventListener('click', function (e) {
        smallScreenNav.classList.toggle('blog-nav-sm-in');
    })
});