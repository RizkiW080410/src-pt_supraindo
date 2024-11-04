<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-body rounded w-100" style="background-color: #fff; height: 75px; position: fixed; z-index: 10000;">
    <div class="container">
        <a class="navbar-brand fw-bold fs-4" style="color: #0517FF;" href="#">
            <img src="{{ asset('style_web/assets/logo.png') }}" alt="" width="30" height="24" class="d-inline-block align-text-middle">
            PT.SUPRAINDO MULTI SEJAHTERA
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="arrow-icon d-none" id="arrowIcon">
                <i class="bi bi-arrow-right"></i> <!-- Gunakan ikon panah yang diinginkan -->
            </div>
            <ul class="navbar-nav ms-auto fw-bold fs-5">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/" style="{{ Request::is('/') ? 'color: #0517FF; font-weight: bold; border-bottom: 2px solid #0517FF; text-decoration: none;' : '' }}">
                        Home <i class="bi bi-house-door ms-2"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about" style="{{ Request::is('about') ? 'color: #0517FF; font-weight: bold; border-bottom: 2px solid #0517FF; text-decoration: none;' : '' }}">
                        About <i class="bi bi-info-circle ms-2"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('product') ? 'active' : '' }}" href="/product" style="{{ Request::is('product') ? 'color: #0517FF; font-weight: bold; border-bottom: 2px solid #0517FF; text-decoration: none;' : '' }}">
                        Product <i class="bi bi-box-seam ms-2"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('achievement') ? 'active' : '' }}" href="/achievement" style="{{ Request::is('achievement') ? 'color: #0517FF; font-weight: bold; border-bottom: 2px solid #0517FF; text-decoration: none;' : '' }}">
                        Achievement <i class="bi bi-trophy ms-2"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="/contact" style="{{ Request::is('contact') ? 'color: #0517FF; font-weight: bold; border-bottom: 2px solid #0517FF; text-decoration: none;' : '' }}">
                        Contact Us <i class="bi bi-headset ms-2"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
