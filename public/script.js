// ================Toggle icon navbar=======================

let menuIcon = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menuIcon.onclick = () => {
    menuIcon.classList.toggle('fa-xmark');
    nabar.classList.toggle('active');
}


// ================Scroll section active link=======================

let section = document.querySelector('section');
let navLink = document.querySelector('header nav a');

window.onscroll = () => {
    section.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop - 150;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');


        if (top >= offset && top < offset + height) {
            navLink.forEach.apply(links => {
                links.classList.remove('active');
                document.querySelector('header nav a[href*=' + id + ']'), classList.add(
                    'active');
            });
        };
    });


    // ================Sticky navbark=======================

    let header = document.querySelector('header');
    header.classList.toggle('sticky', widnow.scrollY > 100);

    // ================remove toggle icon and navbar=======================
    menuIcon.classList.remove('fa-xmark');
    navbar.classList.remove('active');

};


// ================Scroll Reveal=======================
ScrollReveal({
    distance: '60px',
    duration: 2000,
    delay: 200,
});

ScrollReveal().reveal('.home-content, heading', {
    origin: 'top'
});
ScrollReveal().reveal('.home-img, .services-container, .portfolio-box, .contact form', {
    origin: 'bottom'
});
ScrollReveal().reveal('.home-contact h1, .about-img, footer', {
    origin: 'left'
});
ScrollReveal().reveal('.home-contact p, .about-content', {
    origin: 'right'
});



// ================Types js=======================

const typed = new Typed('.multiple-text', {
    strings: ['Frontend Developer', 'Web Designer', 'BackEnd Developer', 'Web Developer'],
    typeSpeed: 70,
    backSpeed: 70,
    backDelay: 1000,
    loop: true
});
