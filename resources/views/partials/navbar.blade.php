<nav class="navbar">

    <div class="container">

        <a href="#home" class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
        </a>

        <!-- Hamburger -->
        <button class="menu-toggle" id="menuToggle" aria-label="Toggle Menu">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <ul class="nav-menu" id="navMenu">

            <li>
                <a href="#home">Home</a>
            </li>

            <li>
                <a href="#about">About</a>
            </li>

            <li>
                <a href="#skills">Skills</a>
            </li>

            <li>
                <a href="#projects">Projects</a>
            </li>

            <li>
                <a href="#contact" class="nav-contact">
                    Contact
                </a>
            </li>

        </ul>

    </div>
    <script>
        document.addEventListener("DOMContentLoaded", () => {

            const menuToggle = document.getElementById("menuToggle");
            const navMenu = document.getElementById("navMenu");

            menuToggle.addEventListener("click", () => {
                navMenu.classList.toggle("active");
            });

            document.querySelectorAll(".nav-menu a").forEach(link => {
                link.addEventListener("click", () => {
                    navMenu.classList.remove("active");
                });
            });

        });
    </script>

</nav>