<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enterprise Practices | Verdant Consulting</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Style -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

    <!-- Sticky Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-custom scrolled">
        <div class="container px-4">
            <a class="navbar-brand d-flex align-items-center gap-2" href="index.php">
                <div class="p-2 bg-success rounded-3 d-flex align-items-center justify-content-center" style="width: 2.25rem; height: 2.25rem; background-color: var(--primary-color) !important;">
                    <i data-lucide="leaf" style="color: var(--accent-color); width: 1.15rem; height: 1.15rem;"></i>
                </div>
                <div>
                    <span class="navbar-brand-text">VERDANT</span>
                    <span class="navbar-brand-sub">CONSULTING</span>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-4 me-4">
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="index.php#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom active" href="services.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="team.php">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="index.php#testimonials">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="index.php#contact">Contact</a>
                    </li>
                </ul>
                <a href="contact.php" class="btn btn-primary-custom d-flex align-items-center gap-2">
                    Get Consultation <i data-lucide="arrow-right" style="width: 1rem; height: 1rem;"></i>
                </a>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <section class="py-5 text-center" style="padding-top: 10rem !important;">
        <div class="container px-4">
            <div class="d-inline-flex align-items-center gap-2 px-3 py-1 bg-dark border border-success rounded-pill mb-4" style="border-color: rgba(40, 90, 72, 0.4) !important;">
                <span class="subheading text-white m-0" style="font-size: 0.65rem;">02 / practice fields</span>
            </div>
            <h1 class="display-4 fw-bold text-white mb-4" style="font-family: var(--font-headings); max-width: 800px; margin: 0 auto; line-height: 1.15;">
                Specialized <span style="color: var(--accent-color);">Strategic</span> Advisory
            </h1>
            <p class="lead mx-auto" style="max-width: 600px;">
                Explore our specialized practice lines. We combine organizational consulting with luxury visual branding and digital efficiency to unlock maximum commercial headroom.
            </p>
        </div>
    </section>

    <!-- Detailed Practices Grid -->
    <section class="py-5">
        <div class="container px-4 text-start">
            <div class="row g-4">
                <!-- Service 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card card-custom d-flex flex-column">
                        <div class="card-icon-container">
                            <i data-lucide="trending-up"></i>
                        </div>
                        <span class="subheading d-block mb-1" style="font-size: 0.6rem;">Strategy Practice</span>
                        <h3 class="h5 fw-bold text-white mb-3">Strategic Growth Consulting</h3>
                        <p class="small mb-4">Accelerating business trajectory through precise market analysis, competitive positioning, and actionable financial modeling.</p>
                        <ul class="list-unstyled d-flex flex-column gap-2 mb-4 mt-auto small">
                            <li class="d-flex align-items-start gap-2"><i data-lucide="check" style="width: 0.9rem; height: 0.9rem; color: var(--accent-color);"></i> Market Entry Valuation</li>
                            <li class="d-flex align-items-start gap-2"><i data-lucide="check" style="width: 0.9rem; height: 0.9rem; color: var(--accent-color);"></i> Capital Allocation Strategy</li>
                            <li class="d-flex align-items-start gap-2"><i data-lucide="check" style="width: 0.9rem; height: 0.9rem; color: var(--accent-color);"></i> Revenue Stream Diversification</li>
                        </ul>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card card-custom d-flex flex-column">
                        <div class="card-icon-container">
                            <i data-lucide="palette"></i>
                        </div>
                        <span class="subheading d-block mb-1" style="font-size: 0.6rem;">Design Practice</span>
                        <h3 class="h5 fw-bold text-white mb-3">Eco-System Brand Architecture</h3>
                        <p class="small mb-4">Crafting premium, highly coherent, and sustainable brand systems that resonate deeply with modern, value-driven consumers.</p>
                        <ul class="list-unstyled d-flex flex-column gap-2 mb-4 mt-auto small">
                            <li class="d-flex align-items-start gap-2"><i data-lucide="check" style="width: 0.9rem; height: 0.9rem; color: var(--accent-color);"></i> Corporate Brand Guidelines</li>
                            <li class="d-flex align-items-start gap-2"><i data-lucide="check" style="width: 0.9rem; height: 0.9rem; color: var(--accent-color);"></i> Sustainable Packaging Design</li>
                            <li class="d-flex align-items-start gap-2"><i data-lucide="check" style="width: 0.9rem; height: 0.9rem; color: var(--accent-color);"></i> Visual Rebranding Audits</li>
                        </ul>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card card-custom d-flex flex-column">
                        <div class="card-icon-container">
                            <i data-lucide="cpu"></i>
                        </div>
                        <span class="subheading d-block mb-1" style="font-size: 0.6rem;">Optimization Practice</span>
                        <h3 class="h5 fw-bold text-white mb-3">Digital Process Optimization</h3>
                        <p class="small mb-4">Integrating state-of-the-art automation and advanced digital frameworks to streamline operations and eliminate friction.</p>
                        <ul class="list-unstyled d-flex flex-column gap-2 mb-4 mt-auto small">
                            <li class="d-flex align-items-start gap-2"><i data-lucide="check" style="width: 0.9rem; height: 0.9rem; color: var(--accent-color);"></i> Automated Workflow Integration</li>
                            <li class="d-flex align-items-start gap-2"><i data-lucide="check" style="width: 0.9rem; height: 0.9rem; color: var(--accent-color);"></i> Cloud Migration Blueprint</li>
                            <li class="d-flex align-items-start gap-2"><i data-lucide="check" style="width: 0.9rem; height: 0.9rem; color: var(--accent-color);"></i> Operational KPI Dashboards</li>
                        </ul>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card card-custom d-flex flex-column">
                        <div class="card-icon-container">
                            <i data-lucide="leaf"></i>
                        </div>
                        <span class="subheading d-block mb-1" style="font-size: 0.6rem;">Consulting Practice</span>
                        <h3 class="h5 fw-bold text-white mb-3">Environmental & ESG Advisory</h3>
                        <p class="small mb-4">Formulating rigorous, regulatory-compliant ESG strategies that harmonize commercial growth with environmental stewardship.</p>
                        <ul class="list-unstyled d-flex flex-column gap-2 mb-4 mt-auto small">
                            <li class="d-flex align-items-start gap-2"><i data-lucide="check" style="width: 0.9rem; height: 0.9rem; color: var(--accent-color);"></i> Carbon Handprint Auditing</li>
                            <li class="d-flex align-items-start gap-2"><i data-lucide="check" style="width: 0.9rem; height: 0.9rem; color: var(--accent-color);"></i> CSRD Compliance Consulting</li>
                            <li class="d-flex align-items-start gap-2"><i data-lucide="check" style="width: 0.9rem; height: 0.9rem; color: var(--accent-color);"></i> Supply Chain Carbon Metrics</li>
                        </ul>
                    </div>
                </div>

                <!-- Service 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card card-custom d-flex flex-column">
                        <div class="card-icon-container">
                            <i data-lucide="sparkles"></i>
                        </div>
                        <span class="subheading d-block mb-1" style="font-size: 0.6rem;">Design Practice</span>
                        <h3 class="h5 fw-bold text-white mb-3">Experience Experience Architecture</h3>
                        <p class="small mb-4">Engineering elegant, frictionless user experiences that maximize customer retention and establish lifelong brand affinity.</p>
                        <ul class="list-unstyled d-flex flex-column gap-2 mb-4 mt-auto small">
                            <li class="d-flex align-items-start gap-2"><i data-lucide="check" style="width: 0.9rem; height: 0.9rem; color: var(--accent-color);"></i> User Journey Mapping</li>
                            <li class="d-flex align-items-start gap-2"><i data-lucide="check" style="width: 0.9rem; height: 0.9rem; color: var(--accent-color);"></i> Premium UI/UX Design</li>
                            <li class="d-flex align-items-start gap-2"><i data-lucide="check" style="width: 0.9rem; height: 0.9rem; color: var(--accent-color);"></i> Interaction & Animation Design</li>
                        </ul>
                    </div>
                </div>

                <!-- Service 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card card-custom d-flex flex-column">
                        <div class="card-icon-container">
                            <i data-lucide="shield-check"></i>
                        </div>
                        <span class="subheading d-block mb-1" style="font-size: 0.6rem;">Strategy Practice</span>
                        <h3 class="h5 fw-bold text-white mb-3">Agile Scale Integration</h3>
                        <p class="small mb-4">Re-engineering organizational structures to be highly adaptive, collaborative, and prepared for high-velocity scaling.</p>
                        <ul class="list-unstyled d-flex flex-column gap-2 mb-4 mt-auto small">
                            <li class="d-flex align-items-start gap-2"><i data-lucide="check" style="width: 0.9rem; height: 0.9rem; color: var(--accent-color);"></i> Cross-functional Team Structure</li>
                            <li class="d-flex align-items-start gap-2"><i data-lucide="check" style="width: 0.9rem; height: 0.9rem; color: var(--accent-color);"></i> OKR Governance Setup</li>
                            <li class="d-flex align-items-start gap-2"><i data-lucide="check" style="width: 0.9rem; height: 0.9rem; color: var(--accent-color);"></i> Communication Network Audits</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Professional Footer -->
    <footer class="py-5" style="background-color: #050b0a; border-top: 1px solid rgba(40, 90, 72, 0.15);">
        <div class="container px-4 py-4 text-start">
            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <a class="d-flex align-items-center gap-2 text-decoration-none mb-4" href="index.php">
                        <div class="p-2 bg-success rounded-3 d-flex align-items-center justify-content-center" style="width: 2rem; height: 2rem; background-color: var(--primary-color) !important;">
                            <i data-lucide="leaf" style="color: var(--accent-color); width: 1rem; height: 1rem;"></i>
                        </div>
                        <div>
                            <span class="navbar-brand-text h6 m-0 text-white">VERDANT</span>
                            <span class="navbar-brand-sub" style="font-size: 0.5rem;">CONSULTING</span>
                        </div>
                    </a>
                    <p class="mb-4">Engineered guidance for the contemporary enterprise. Harmonizing commercial growth with sustainability and modern design paradigms.</p>
                    <div class="d-flex gap-3">
                        <a href="#" class="p-2 rounded-3 bg-dark border border-success text-white d-flex align-items-center justify-content-center" style="width: 2rem; height: 2rem; border-color: rgba(40, 90, 72, 0.3) !important;"><i data-lucide="linkedin" style="width: 0.95rem; height: 0.95rem;"></i></a>
                        <a href="#" class="p-2 rounded-3 bg-dark border border-success text-white d-flex align-items-center justify-content-center" style="width: 2rem; height: 2rem; border-color: rgba(40, 90, 72, 0.3) !important;"><i data-lucide="twitter" style="width: 0.95rem; height: 0.95rem;"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white h6 mb-4" style="font-family: var(--font-subheadings); letter-spacing: 1px; font-weight: 700;">PRACTICE AREAS</h5>
                    <ul class="list-unstyled d-flex flex-col gap-2.5">
                        <li><a href="services.php" class="text-decoration-none text-muted small">Strategic Consulting</a></li>
                        <li><a href="services.php" class="text-decoration-none text-muted small">Eco-System Design</a></li>
                        <li><a href="services.php" class="text-decoration-none text-muted small">Workflow Optimization</a></li>
                        <li><a href="services.php" class="text-decoration-none text-muted small">ESG Advisory</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white h6 mb-4" style="font-family: var(--font-subheadings); letter-spacing: 1px; font-weight: 700;">COMPANY</h5>
                    <ul class="list-unstyled d-flex flex-col gap-2.5">
                        <li><a href="about.php" class="text-decoration-none text-muted small">Story & Vision</a></li>
                        <li><a href="team.php" class="text-decoration-none text-muted small">Advisory Council</a></li>
                        <li><a href="testimonials.php" class="text-decoration-none text-muted small">Appraisals</a></li>
                        <li><a href="contact.php" class="text-decoration-none text-muted small">Get in Touch</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5 class="text-white h6 mb-4" style="font-family: var(--font-subheadings); letter-spacing: 1px; font-weight: 700;">ADVISORY DIGEST</h5>
                    <p class="small mb-4">Subscribe to receive our seasonal briefs on sustainable business paradigms and operational agility.</p>
                    <form class="d-flex gap-2">
                        <input type="email" placeholder="Email address" class="form-control bg-dark text-white border-success" style="font-size: 0.75rem; border-color: rgba(40, 90, 72, 0.4) !important;">
                        <button type="submit" class="btn btn-primary-custom" style="padding: 0.5rem 1rem;"><i data-lucide="send" style="width: 0.85rem; height: 0.85rem;"></i></button>
                    </form>
                </div>
            </div>
            <div class="d-flex flex-column flex-md-row align-items-center justify-content-between pt-4 border-top" style="border-top-color: rgba(40, 90, 72, 0.15) !important;">
                <p class="small mb-0">© 2026 Verdant Consulting Group. All Rights Reserved.</p>
                <div class="d-flex gap-4 mt-3 mt-md-0">
                    <a href="#" class="text-decoration-none text-muted small">Privacy Policy</a>
                    <a href="#" class="text-decoration-none text-muted small">Terms of Engagement</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll-to-Top Button -->
    <button class="scroll-to-top-btn" aria-label="Scroll to top">
        <i data-lucide="arrow-up"></i>
    </button>

    <!-- Lucide Icons CDN -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>
    <!-- Bootstrap 5 JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom Script -->
    <script src="js/script.js"></script>
</body>
</html>
