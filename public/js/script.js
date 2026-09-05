// ========== MOBILE NAV ==========
const navToggle = document.getElementById("navToggle");
const navMenu = document.getElementById("navMenu");
const header = document.getElementById("header");

navToggle.addEventListener("click", () => {
    navMenu.classList.toggle("open");
    navToggle.classList.toggle("active");
    document.body.classList.toggle("nav-open");
});

document.querySelectorAll(".nav-link").forEach((link) => {
    link.addEventListener("click", () => {
        navMenu.classList.remove("open");
        navToggle.classList.remove("active");
        document.body.classList.remove("nav-open");
    });
});

// ========== HEADER SCROLL ==========
window.addEventListener("scroll", () => {
    header.classList.toggle("scrolled", window.scrollY > 30);
});

// ========== ACTIVE SECTION ==========
const sections = document.querySelectorAll("section[id]");
window.addEventListener("scroll", () => {
    const y = window.scrollY + 120;
    sections.forEach((sec) => {
        const top = sec.offsetTop;
        const h = sec.offsetHeight;
        const id = sec.getAttribute("id");
        const link = document.querySelector(`.nav-link[href="#${id}"]`);
        if (link && y >= top && y < top + h) {
            document
                .querySelectorAll(".nav-link")
                .forEach((l) => l.classList.remove("active"));
            link.classList.add("active");
        }
    });
});

// ========== TYPING EFFECT ==========
const roles = [
    "Full-Stack Developer",
    "Frontend Engineer",
    "Backend Developer",
    "Problem Solver",
];
let roleIndex = 0;
let charIndex = 0;
let isDeleting = false;
const typedEl = document.getElementById("typedText");

function typeEffect() {
    const current = roles[roleIndex];
    if (isDeleting) {
        typedEl.textContent = current.substring(0, charIndex - 1);
        charIndex--;
    } else {
        typedEl.textContent = current.substring(0, charIndex + 1);
        charIndex++;
    }

    let speed = isDeleting ? 40 : 80;

    if (!isDeleting && charIndex === current.length) {
        speed = 1800;
        isDeleting = true;
    } else if (isDeleting && charIndex === 0) {
        isDeleting = false;
        roleIndex = (roleIndex + 1) % roles.length;
        speed = 400;
    }

    setTimeout(typeEffect, speed);
}

if (typedEl) {
    typeEffect();
}

// ========== CONTACT FORM ==========
const contactForm = document.getElementById("contactForm");
if (contactForm) {
    contactForm.addEventListener("submit", (e) => {
        e.preventDefault();
        const name = document.getElementById("name").value;
        alert(`Terima kasih, ${name}!\nPesan Anda telah dikirim (demo).`);
        e.target.reset();
    });
}
