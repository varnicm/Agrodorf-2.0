window.addEventListener("scroll", function() {
    let header = document.querySelector("header");
    header.classList.toggle("scrolled", window.scrollY > 0);
});

//active navbar
document.addEventListener("DOMContentLoaded", function() {
    const sections = document.querySelectorAll("section");
    const navLinks = document.querySelectorAll(".nav-link");

    window.addEventListener("scroll", function() {
        let current = "";

        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (pageYOffset >= (sectionTop - sectionHeight/3)) {
                current = section.getAttribute("id");
            }
        });

        navLinks.forEach(link => {
            link.classList.remove("active");
            if (link.getAttribute("href").substr(1) === current) {
                link.classList.add("active");
            }
        });

        // Your existing scroll function to handle the header's box-shadow:
        let header = document.querySelector("header");
        header.classList.toggle("scrolled", window.scrollY > 0);
    });
});

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        const target = document.querySelector(this.getAttribute('href'));
        const offset = 170;  // Adjust to the height of your header
        const targetPosition = target.getBoundingClientRect().top + window.scrollY - offset;

        window.scrollTo({
            top: targetPosition,
            behavior: 'smooth'
        });
    });
});





