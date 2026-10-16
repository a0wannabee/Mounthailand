{{-- ============================================
     NAVBAR
     ============================================ --}}
<header class="navbar" id="navbar" role="navigation" aria-label="Main navigation">
    <div class="container">
        <a href="#home" class="logo-container">
            <img src="{{ asset('assets/logo/logocoffee.jpeg') }}" alt="Mounthailand Coffee" class="navbar-logo">
        </a>

        <nav>
            <ul class="nav-menu" id="nav-menu">
                <li><a href="#home" class="nav-link active">Home</a></li>
                <li><a href="#products" class="nav-link">Products</a></li>
                <li><a href="#testimonials" class="nav-link">Testimonials</a></li>
                <li><a href="https://wa.me/6283198892832" target="_blank" rel="noopener noreferrer"
                        class="nav-cta-btn">Order Now</a></li>
            </ul>
        </nav>

        <button class="mobile-toggle" id="mobile-toggle" aria-label="Toggle navigation menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>
