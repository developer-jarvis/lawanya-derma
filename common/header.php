<body>
    <!-- Top Info Bar -->
    <div class="top-bar d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-telephone-fill me-2"></i>
                        <span class="me-4">+91 70421 79159</span>
                        <i class="bi bi-envelope-fill me-2"></i>
                        <span>lawanyaderma@gmail.com</span>
                    </div>
                </div>
                <div class="col-md-6 text-end">
                    <div class="d-flex align-items-center justify-content-end">
                        <span class="me-3">Follow Us:</span>
                        <a href="#" class="me-3" title="Facebook">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="#" class="me-3" title="Instagram">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <!-- <a href="#" class="me-3" title="YouTube">
                        <i class="bi bi-youtube"></i>
                    </a> -->
                        <a href="#" title="WhatsApp">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container-fluid">
            <!-- Logo/Brand -->
            <a class="navbar-brand d-flex align-items-center" href="<?=  $base_url; ?>">
                <img src="./assets/logo/logo.jpeg" alt="Lawanya Derma & Aesthetic Clinic" width="70" class="me-2 rounded img-fluid">
                <div>
                    <h4 class="mb-0 fw-bold">Lawanya Derma</h4>
                    <small class="text-muted">& Aesthetic Clinic</small>
                </div>
            </a>

            <!-- Mobile Menu Button - Enhanced Custom Toggle (Only visible on mobile) -->
            <button class="navbar-toggler custom-toggler border-0 p-0 d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger-menu">
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                </div>
            </button>

            <!-- Navigation Menu -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?=  $base_url; ?>">
                            <i class="bi bi-house-door me-1"></i>Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#about">
                            <i class="bi bi-info-circle me-1"></i>About Us
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#services">
                            <i class="bi bi-heart-pulse me-1"></i>Services
                        </a>
                    </li>

                
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">
                            <i class="bi bi-images me-1"></i>Gallery
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#contact">
                            <i class="bi bi-geo-alt me-1"></i>Contact
                        </a>
                    </li>

                    <!-- CTA Buttons -->
                    <li class="nav-item ms-lg-3">
                        <a href="tel:+917042179159" class="btn btn-outline-primary btn-sm me-2 mb-2 mb-lg-0">
                            <i class="bi bi-telephone me-1"></i>Call Now
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="btn btn-primary btn-sm">
                            <i class="bi bi-calendar-check me-1"></i>Book Appointment
                        </a>
                    </li>
                </ul>
            </div>
        </div>
         
        <div class="d-lg-none d-flex align-items-center justify-content-center gap-2 px-2 pt-2 mx-auto mb-1">
            <a href="https://wa.me/917042179159" class="btn btn-primary btn-sm" target="_blank">
                <i class="bi bi-whatsapp"></i> WhatsApp
            </a>
            <a href="tel:+917042179159" class="btn btn-primary btn-sm">
                <i class="bi bi-telephone-fill"></i> Call Now
            </a>
        </div>
    </nav>

    <!-- Emergency Contact Strip (Mobile Only) -->
    <div class="d-lg-none" style="background: var(--accent-teal); color: var(--white); padding: 10px 0;">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <a href="tel:+917042179159" style="color: var(--white); text-decoration: none; font-weight: 600;">
                        <i class="bi bi-telephone-fill me-2"></i>Emergency Call
                    </a>
                </div>
                <div class="col-6 text-end">
                    <a href="https://wa.me/917042179159" style="color: var(--white); text-decoration: none; font-weight: 600;">
                        <i class="bi bi-whatsapp me-2"></i>WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>