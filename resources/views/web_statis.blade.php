<!DOCTYPE html>
<html lang="id" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>J.CO Donuts & Coffee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="asset/css/style.css" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm py-3">
        <div class="container">
            <a class="navbar-brand" href="#home">
                <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="J.CO Logo" class="jco-logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title fw-bold" id="offcanvasNavbarLabel">J.CO Indonesia</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav ms-auto me-lg-4 mt-lg-2 mb-2 mb-lg-0 gap-lg-3">
                        <li class="nav-item"><a class="nav-link active fw-semibold" href="#home">DONUTS</a></li>
                        <li class="nav-item"><a class="nav-link fw-semibold" href="#menu">COFFEE</a></li>
                        <li class="nav-item"><a class="nav-link fw-semibold" href="#menu">MENU</a></li>
                        <li class="nav-item"><a class="nav-link fw-semibold" href="#partner-location">STORES</a></li>
                        <li class="nav-item"><a class="nav-link fw-semibold" href="#partner-location">RESERVE</a></li>
                        <li class="nav-item"><a class="nav-link fw-semibold" href="#footer">CONTACT US</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- hero -->
    <section id="home" class="container my-3">
        <div id="heroCarousel" class="carousel slide rounded-4 overflow-hidden shadow-sm border" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active hero-frame">
                    <img src="{{ Vite::asset('resources/images/hero1.jpg') }}" class="d-block w-100 h-100" alt="J.CO Banner 1">
                </div>
                <div class="carousel-item hero-frame">
                    <img src="{{ Vite::asset('resources/images/hero2.jpg') }}" class="d-block w-100 h-100" alt="J.CO Banner 2">
                </div>
                <div class="carousel-item hero-frame">
                    <img src="{{ Vite::asset('resources/images/hero3.jpg') }}" class="d-block w-100 h-100" alt="J.CO Banner 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- explore Menu -->
    <section id="menu" class="py-5 bg-white text-center">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <p class="jco-tagline-text mb-4">
                        What's your mood? We've got exceptionally handcrafted<br class="d-none d-md-inline">
                        donuts, premium sourced Arabica coffee, and other crave-<br class="d-none d-md-inline">
                        inducing treats prepared just for you.
                    </p>
                    <a href="#partner-location" class="btn jco-btn-explore">
                        EXPLORE OUR MENU
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--section tengah -->
    <section id="store-banner" class="w-100">
        <img src="{{ Vite::asset('resources/images/section_tengah.jpg') }}" class="jco-mid-banner" alt="J.CO Donuts and Coffee Banner">
    </section>

    <!-- partner & location -->
    <section id="partner-location" class="py-5 bg-white">
        <div class="container py-4">
            <div class="row g-5 justify-content-center">

                <div class="col-md-5">
                    <a href="#footer" class="jco-feature-card text-decoration-none d-block">
                        <div class="jco-feature-img-box mb-4">
                            <img src="{{ Vite::asset('resources/images/partner.jpg') }}" alt="Be Our Partner">
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="jco-feature-title mb-0">BE OUR PARTNER</h5>
                            <i class="bi bi-chevron-right jco-feature-arrow"></i>
                        </div>
                        <hr class="jco-line mb-3">
                        <p class="jco-feature-desc mb-0">Bring J.CO even closer to your community.</p>
                    </a>
                </div>

                <div class="col-md-5">
                    <a href="#footer" class="jco-feature-card text-decoration-none d-block">
                        <div class="jco-feature-img-box mb-4">
                            <img src="{{ Vite::asset('resources/images/location.jpg') }}" alt="Our Location">
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="jco-feature-title mb-0">OUR LOCATION</h5>
                            <i class="bi bi-chevron-right jco-feature-arrow"></i>
                        </div>
                        <hr class="jco-line mb-3">
                        <p class="jco-feature-desc mb-0">Find a store near you.</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="footer" class="jco-footer py-5">
        <div class="container py-4">
            <div class="row g-4">

                <div class="col-6 col-md-2 offset-md-1">
                    <ul class="list-unstyled jco-footer-links">
                        <li class="mb-3"><a href="#home">OUR STORY</a></li>
                        <li class="mb-3"><a href="#menu">OUR PRODUCTS</a></li>
                        <li class="mb-3"><a href="#partner-location">STORES</a></li>
                        <li class="mb-3"><a href="#menu">ONLINE ORDER</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2">
                    <ul class="list-unstyled jco-footer-links">
                        <li class="mb-3"><a href="#footer">IN THE PRESS</a></li>
                        <li class="mb-3"><a href="#footer">EVENTS</a></li>
                        <li class="mb-3"><a href="#partner-location">FRANCHISE</a></li>
                        <li class="mb-3"><a href="#footer">CONTACT US</a></li>
                    </ul>
                </div>

                <div class="col-12 col-md-3">
                    <div class="mb-4">
                        <div class="jco-footer-heading mb-2">GET IN TOUCH</div>
                        <div class="d-flex gap-3 jco-social">
                            <a href="https://facebook.com" target="_blank" rel="noopener" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                            <a href="https://instagram.com" target="_blank" rel="noopener" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                            <a href="https://youtube.com" target="_blank" rel="noopener" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="jco-footer-heading mb-2">CHANGE REGION</div>
                        <div class="d-flex align-items-center gap-2">
                            <span class="flag-id"></span>
                            <span class="jco-region-text">INDONESIA</span>
                        </div>
                    </div>

                    <div>
                        <div class="jco-footer-heading mb-1">LANGUAGE</div>
                        <div class="jco-lang">
                            <a href="#footer" class="active">EN</a>
                            <span class="mx-1 text-muted">|</span>
                            <a href="#footer" class="text-muted">IN</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-3 d-flex flex-column justify-content-end">
                    <div class="jco-copyright">
                        <p class="mb-1">&copy; 2026 JCO DONUT &amp; COFFEE. All Rights Reserved.</p>
                        <p class="mb-0">
                            <a href="#footer">Terms of Use</a> <span class="mx-1">|</span> <a href="#footer">Privacy Policy</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
