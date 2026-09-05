<!-- ========== NAV ========== -->
<header class="header" id="header">
    <nav class="nav container">
        <a href="#home" class="logo">
            <span class="logo-bracket">&lt;</span>Dev<span class="logo-dot">.</span><span class="logo-bracket">/&gt;</span>
        </a>

        <button class="nav-toggle" id="navToggle" aria-label="Menu">
            <span></span><span></span><span></span>
        </button>

        <ul class="nav-menu" id="navMenu">
            <li><a href="{{ route('home') }}" class="nav-link active">Home</a></li>
            <li><a href="{{ route('home') }}#about" class="nav-link">About</a></li>
            <li><a href="{{ route('home') }}#skills" class="nav-link">Skills</a></li>
            <li><a href="{{ route('home') }}#projects" class="nav-link">Projects</a></li>
            <li><a href="{{ route('home') }}#experience" class="nav-link">Experience</a></li>
            <li><a href="{{ route('home') }}#contact" class="nav-link nav-cta">Contact</a></li>
        </ul>
    </nav>
</header>