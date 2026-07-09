<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verdant Consulting | Premium Strategic Advisory</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Style -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body >

    <!-- Sticky Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-custom">
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
                        <a class="nav-link nav-link-custom active" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="services.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="team.php">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="#testimonials">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="hero-glow"></div>
        <div class="container px-4">
            <div class="row align-items-center gy-5">
                <div class="col-lg-7 text-start">
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-1.5 rounded-pill mb-4" style="background-color: rgba(40, 90, 72, 0.2); border: 1px solid rgba(40, 90, 72, 0.4);">
                        <i data-lucide="award" style="color: var(--accent-color); width: 0.9rem; height: 0.9rem;"></i>
                        <span class="subheading text-white m-0" style="font-size: 0.65rem;">Premier Strategic Advisory</span>
                    </div>
                    <h1 class="display-4 fw-bold mb-4" style="font-family: var(--font-headings); line-height: 1.15;">
                        Harmonize <span style="color: var(--accent-color);">Commercial Growth</span> with Sustainable Design
                    </h1>
                    <p class="lead mb-5" style="color: #a0b8ad;">
                        Verdant Consulting partners with high-growth enterprises to automate workflow bottlenecks, architect premium eco-friendly brands, and execute ESG parameters.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#contact" class="btn btn-primary-custom px-4 py-3 d-flex align-items-center gap-2">
                            Inquire Solutions <i data-lucide="arrow-right" style="width: 1rem; height: 1rem;"></i>
                        </a>
                        <a href="services.php" class="btn btn-secondary-custom px-4 py-3">
                            Explore Services
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 text-center">
                    <div class="position-relative p-2 rounded-4" style="background: linear-gradient(to right, #285A48, #408A71, #B0E4CC) 1; border: 1px solid rgba(40, 90, 72, 0.3);">
                        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&q=80&w=800&h=800" alt="Meeting" class="img-fluid rounded-3 shadow-lg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5" style="border-top: 1px solid rgba(40, 90, 72, 0.15);">
        <div class="container px-4 py-5">
            <div class="row align-items-center gy-5">
                <div class="col-lg-5 text-start">
                    <span class="subheading d-block mb-3">01 / Founders Statement</span>
                    <h2 class="h1 fw-bold text-white mb-4" style="font-family: var(--font-headings);">
                        Designed for commercial acceleration. Calibrated for environmental stewardship.
                    </h2>
                    <div class="mb-4" style="width: 80px; height: 2px; background-color: var(--primary-color);"></div>
                    <p class="mb-4">
                        "Verdant was established to prove that organizational scaling and strict ESG performance are not adversarial. True operational excellence eliminates structural waste—which, in turn, minimizes environmental footprint."
                    </p>
                </div>
                <div class="col-lg-7">
                    <div class="row g-4 text-start">
                        <div class="col-md-6">
                            <div class="card card-custom">
                                <div class="card-icon-container">
                                    <i data-lucide="users"></i>
                                </div>
                                <h3 class="h5 fw-bold text-white mb-3">Advisory Synergy</h3>
                                <p class="card-text mb-0">
                                    We combine design specialists, operations engineers, and sustainability researchers under a single elite advisory banner.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-custom">
                                <div class="card-icon-container">
                                    <i data-lucide="sparkles"></i>
                                </div>
                                <h3 class="h5 fw-bold text-white mb-3">Luxurious Precision</h3>
                                <p class="card-text mb-0">
                                    Every slide deck, software interface, operational matrix, and carbon report is designed to meet strict luxury visual standards.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Extended About Section - Our Mission -->
    <section class="py-5" style="background-color: #050b0a; border-top: 1px solid rgba(40, 90, 72, 0.15); border-bottom: 1px solid rgba(40, 90, 72, 0.15);">
        <div class="container px-4 py-5">
            <div class="row align-items-center gy-5 text-start">
                <div class="col-lg-6">
                    <span class="subheading d-block mb-3">Our Core Mission</span>
                    <h2 class="h1 fw-bold text-white mb-4" style="font-family: var(--font-headings);">Harmonizing operational output with architectural responsibility.</h2>
                    <div class="mb-4" style="width: 80px; height: 2px; background-color: var(--primary-color);"></div>
                    <p class="mb-3">
                        The traditional corporate advisory playbook is broken. For decades, companies were told they could either chase aggressive quarterly profits or commit to passive, unmeasured CSR projects.
                    </p>
                    <p class="mb-4">
                        At Verdant Consulting, we prove that structural efficiency is the absolute core of ecological conservation. By eliminating digital overhead, simplifying branding, and re-architecting workflows, we unlock substantial operational savings that fund long-term environmental strategies.
                    </p>
                    <div class="d-flex gap-5">
                        <div>
                            <span class="d-block h2 fw-bold text-white mb-0">100%</span>
                            <span class="subheading" style="font-size: 0.55rem;">Bespoke Strategies</span>
                        </div>
                        <div style="width: 1px; background-color: rgba(40, 90, 72, 0.3);"></div>
                        <div>
                            <span class="d-block h2 fw-bold text-white mb-0">CSRD</span>
                            <span class="subheading" style="font-size: 0.55rem;">Aligned Reporting</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="rounded-4 overflow-hidden shadow-lg border border-success" style="border-color: rgba(40, 90, 72, 0.3) !important;">
                        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&q=80&w=800&h=600" alt="Sustainable Office" class="img-fluid" style="object-fit: cover; aspect-ratio: 4/3;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Preview Section -->
    <section class="py-5" style="background-color: #050b0a; border-top: 1px solid rgba(40, 90, 72, 0.15); border-bottom: 1px solid rgba(40, 90, 72, 0.15);">
        <div class="container px-4 py-5 text-start">
            <div class="d-flex flex-column flex-md-row align-items-md-end justify-content-between mb-5 gap-4">
                <div>
                    <span class="subheading d-block mb-3">02 / Core Practices</span>
                    <h2 class="h1 fw-bold text-white mb-0" style="font-family: var(--font-headings);">Specialized Enterprise Solutions</h2>
                </div>
                <a href="services.php" class="subheading d-flex align-items-center gap-2 m-0 text-decoration-none" style="color: var(--accent-color) !important;">
                    See Detailed Capabilities <i data-lucide="arrow-right" style="width: 1rem; height: 1rem;"></i>
                </a>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card card-custom">
                        <h3 class="h5 fw-bold text-white mb-3">Strategic Growth Consulting</h3>
                        <p class="card-text">Accelerating business trajectory through precise market analysis, competitive positioning, and actionable financial modeling.</p>
                        <a href="services.php" class="mt-auto subheading d-flex align-items-center gap-1.5 text-decoration-none" style="color: var(--accent-color) !important; font-size: 0.6rem;">
                            Learn Strategy <i data-lucide="arrow-right" style="width: 0.85rem; height: 0.85rem;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-custom">
                        <h3 class="h5 fw-bold text-white mb-3">Eco-System Brand Architecture</h3>
                        <p class="card-text">Crafting premium, highly coherent, and sustainable brand systems that resonate deeply with modern, value-driven consumers.</p>
                        <a href="services.php" class="mt-auto subheading d-flex align-items-center gap-1.5 text-decoration-none" style="color: var(--accent-color) !important; font-size: 0.6rem;">
                            Learn Strategy <i data-lucide="arrow-right" style="width: 0.85rem; height: 0.85rem;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card card-custom">
                        <h3 class="h5 fw-bold text-white mb-3">Digital Process Optimization</h3>
                        <p class="card-text">Integrating state-of-the-art automation and advanced digital frameworks to streamline operations and eliminate friction.</p>
                        <a href="services.php" class="mt-auto subheading d-flex align-items-center gap-1.5 text-decoration-none" style="color: var(--accent-color) !important; font-size: 0.6rem;">
                            Learn Strategy <i data-lucide="arrow-right" style="width: 0.85rem; height: 0.85rem;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Members Preview -->
    <section class="py-5">
        <div class="container px-4 py-5">
            <div class="d-flex flex-column flex-md-row align-items-md-end justify-content-between mb-5 gap-4 text-start">
                <div>
                    <span class="subheading d-block mb-3">03 / Advisory Board</span>
                    <h2 class="h1 fw-bold text-white mb-0" style="font-family: var(--font-headings);">The Strategic Engineers</h2>
                </div>
                <a href="team.php" class="subheading d-flex align-items-center gap-2 m-0 text-decoration-none" style="color: var(--accent-color) !important;">
                    Meet Full Council <i data-lucide="arrow-right" style="width: 1rem; height: 1rem;"></i>
                </a>
            </div>
            <div class="row g-4 text-start">
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4" style="background-color: var(--bg-color); border: 1px solid rgba(40, 90, 72, 0.15); transition: border-color 0.3s ease;">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=600&h=600" alt="Eleanor Vance" class="img-fluid rounded-3 mb-4" style="object-fit: cover; aspect-ratio: 1/1;">
                        <h3 class="h5 fw-bold text-white mb-1">Eleanor Vance</h3>
                        <p class="small mb-0" style="color: #a0b8ad;">Strategy lead, former McKinsey. Over 15 years in sustainable enterprise valuation.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4" style="background-color: var(--bg-color); border: 1px solid rgba(40, 90, 72, 0.15); transition: border-color 0.3s ease;">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&q=80&w=600&h=600" alt="Marcus Thorne" class="img-fluid rounded-3 mb-4" style="object-fit: cover; aspect-ratio: 1/1;">
                        <h3 class="h5 fw-bold text-white mb-1">Marcus Thorne</h3>
                        <p class="small mb-0" style="color: #a0b8ad;">Visual architect with background in premium design portfolios. Believes in strict minimalism.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="p-4 rounded-4" style="background-color: var(--bg-color); border: 1px solid rgba(40, 90, 72, 0.15); transition: border-color 0.3s ease;">
                        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&q=80&w=600&h=600" alt="Seraphina Chen" class="img-fluid rounded-3 mb-4" style="object-fit: cover; aspect-ratio: 1/1;">
                        <h3 class="h5 fw-bold text-white mb-1">Dr. Seraphina Chen</h3>
                        <p class="small mb-0" style="color: #a0b8ad;">Ph.D. Stanford. Author of "The Eco-Efficient Enterprise" and expert in ESG carbon models.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Carousel Section -->
    <section id="testimonials" class="py-5" style="background-color: #050b0a; border-top: 1px solid rgba(40, 90, 72, 0.15); border-bottom: 1px solid rgba(40, 90, 72, 0.15);">
        <div class="container px-4 py-5 text-center">
            <span class="subheading d-block mb-3">04 / Executive Appraisals</span>
            <h2 class="h1 fw-bold text-white mb-5" style="font-family: var(--font-headings);">Client Alignments</h2>
            
            <div class="position-relative mx-auto" style="max-width: 700px;">

            <!-- Full Testimonials List -->
            <div class="row g-5 text-start mt-5">
                <div class="col-lg-12">
                    <div class="d-flex flex-column gap-4">
                        <!-- Review 1 -->
                        <div class="p-5 rounded-4" style="background-color: var(--bg-color); border: 1px solid rgba(40, 90, 72, 0.2);">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="d-flex gap-1" style="color: var(--accent-color);">
                                    <i data-lucide="star" style="width: 0.95rem; height: 0.95rem; fill: currentColor;"></i>
                                    <i data-lucide="star" style="width: 0.95rem; height: 0.95rem; fill: currentColor;"></i>
                                    <i data-lucide="star" style="width: 0.95rem; height: 0.95rem; fill: currentColor;"></i>
                                    <i data-lucide="star" style="width: 0.95rem; height: 0.95rem; fill: currentColor;"></i>
                                    <i data-lucide="star" style="width: 0.95rem; height: 0.95rem; fill: currentColor;"></i>
                                </div>
                            </div>
                            <p class="fs-6 italic mb-4" style="font-family: var(--font-headings); font-style: italic;">"Verdant Consulting completely re-engineered our operational workflow. By automating legacy administration and implementing a custom ESG strategy, we reduced reporting cycles by 40% while saving over $1.2M in resource overhead."</p>
                            <div class="d-flex align-items-center gap-3">
                                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&q=80&w=150&h=150" alt="Thomas Sterling" class="rounded-circle" style="width: 2.5rem; height: 2.5rem; object-fit: cover; border: 1px solid var(--secondary-color);">
                                <div>
                                    <h6 class="text-white mb-0" style="font-family: var(--font-subheadings); font-weight: 700;">Thomas Sterling</h6>
                                </div>
                            </div>
                        </div>

                        <!-- Review 2 -->
                        <div class="p-5 rounded-4" style="background-color: var(--bg-color); border: 1px solid rgba(40, 90, 72, 0.2);">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="d-flex gap-1" style="color: var(--accent-color);">
                                    <i data-lucide="star" style="width: 0.95rem; height: 0.95rem; fill: currentColor;"></i>
                                    <i data-lucide="star" style="width: 0.95rem; height: 0.95rem; fill: currentColor;"></i>
                                    <i data-lucide="star" style="width: 0.95rem; height: 0.95rem; fill: currentColor;"></i>
                                    <i data-lucide="star" style="width: 0.95rem; height: 0.95rem; fill: currentColor;"></i>
                                    <i data-lucide="star" style="width: 0.95rem; height: 0.95rem; fill: currentColor;"></i>
                                </div>
                            </div>
                            <p class="fs-6 italic mb-4" style="font-family: var(--font-headings); font-style: italic;">"The brand architecture developed by Marcus and his team exceeded our expectations. They took our highly technical solar product line and packaged it into a visual narrative that instantly appeals to modern premium customers."</p>
                            <div class="d-flex align-items-center gap-3">
                                <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&q=80&w=150&h=150" alt="Helena Rostov" class="rounded-circle" style="width: 2.5rem; height: 2.5rem; object-fit: cover; border: 1px solid var(--secondary-color);">
                                <div>
                                    <h6 class="text-white mb-0" style="font-family: var(--font-subheadings); font-weight: 700;">Helena Rostov</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container px-4 py-5 text-start">
            <div class="text-center mb-5">
                <span class="subheading d-block mb-3">05 / COMMUNICATION</span>
                <h2 class="h1 fw-bold text-white mb-3" style="font-family: var(--font-headings); max-width: 800px; margin: 0 auto; line-height: 1.15;">
                    Initiate <span style="color: var(--accent-color);">Advisory Dialog</span>
                </h2>
                <p class="lead mx-auto" style="max-width: 600px;">
                    We welcome confidential inquiries from growing enterprise managers. Reach out to our physical hubs, review corporate business hours, or request a complete operational mapping session.
                </p>
            </div>

            <div class="row g-5">
                <!-- Info Column -->
                <div class="col-lg-5">
                    <h2 class="h3 text-white fw-bold mb-4" style="font-family: var(--font-headings);">Direct Coordinates</h2>
                    <div class="mb-4" style="width: 60px; height: 2px; background-color: var(--primary-color);"></div>
                    <p class="mb-5">Our core advisory partner team is distributed strategically across global financial and design corridors.</p>
                    
                    <div class="d-flex flex-column gap-4 text-start">
                        <div class="d-flex gap-4 p-4 rounded-3" style="background-color: #050b0a; border: 1px solid rgba(40, 90, 72, 0.25);">
                            <div class="p-2 rounded-3 bg-dark border border-success d-flex align-items-center justify-content-center shrink-0" style="width: 2.75rem; height: 2.75rem; border-color: rgba(40, 90, 72, 0.4) !important;">
                                <i data-lucide="map-pin" style="color: var(--accent-color); width: 1.25rem; height: 1.25rem;"></i>
                            </div>
                            <div>
                                <h4 class="h6 text-white mb-1" style="font-family: var(--font-subheadings); font-weight: 700; font-size: 0.75rem; letter-spacing: 1px;">ZURICH HEADQUARTERS</h4>
                                <p class="small mb-0">Militärstrasse 84, 8004 Zürich, Switzerland</p>
                            </div>
                        </div>

                        <div class="d-flex gap-4 p-4 rounded-3" style="background-color: #050b0a; border: 1px solid rgba(40, 90, 72, 0.25);">
                            <div class="p-2 rounded-3 bg-dark border border-success d-flex align-items-center justify-content-center shrink-0" style="width: 2.75rem; height: 2.75rem; border-color: rgba(40, 90, 72, 0.4) !important;">
                                <i data-lucide="clock" style="color: var(--accent-color); width: 1.25rem; height: 1.25rem;"></i>
                            </div>
                            <div>
                                <h4 class="h6 text-white mb-1" style="font-family: var(--font-subheadings); font-weight: 700; font-size: 0.75rem; letter-spacing: 1px;">BUSINESS & INTAKE HOURS</h4>
                                <p class="small mb-1">Mon – Fri, 08:30 – 18:30 CET</p>
                                <small class="text-success font-semibold" style="font-family: var(--font-subheadings); font-size: 0.6rem; letter-spacing: 0.5px;">● INBOUND OPERATIONS ACTIVE</small>
                            </div>
                        </div>

                        <div class="d-flex gap-4 p-4 rounded-3" style="background-color: #050b0a; border: 1px solid rgba(40, 90, 72, 0.25);">
                            <div class="p-2 rounded-3 bg-dark border border-success d-flex align-items-center justify-content-center shrink-0" style="width: 2.75rem; height: 2.75rem; border-color: rgba(40, 90, 72, 0.4) !important;">
                                <i data-lucide="phone" style="color: var(--accent-color); width: 1.25rem; height: 1.25rem;"></i>
                            </div>
                            <div>
                                <h4 class="h6 text-white mb-1" style="font-family: var(--font-subheadings); font-weight: 700; font-size: 0.75rem; letter-spacing: 1px;">VOICE COMMUNICATIONS</h4>
                                <p class="small mb-1">+41 (44) 289-9110 (Zurich)</p>
                                <p class="small mb-0">+1 (415) 309-1140 (San Francisco)</p>
                            </div>
                        </div>

                        <div class="d-flex gap-4 p-4 rounded-3" style="background-color: #050b0a; border: 1px solid rgba(40, 90, 72, 0.25);">
                            <div class="p-2 rounded-3 bg-dark border border-success d-flex align-items-center justify-content-center shrink-0" style="width: 2.75rem; height: 2.75rem; border-color: rgba(40, 90, 72, 0.4) !important;">
                                <i data-lucide="mail" style="color: var(--accent-color); width: 1.25rem; height: 1.25rem;"></i>
                            </div>
                            <div>
                                <h4 class="h6 text-white mb-1" style="font-family: var(--font-subheadings); font-weight: 700; font-size: 0.75rem; letter-spacing: 1px;">EMAIL COMMUNICATIONS</h4>
                                <p class="small mb-0">hello@verdantconsulting.ch</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="col-lg-7">
                    <div class="p-5 rounded-4" style="background-color: var(--bg-color); border: 1px solid rgba(40, 90, 72, 0.35);">
                        <h3 class="h4 text-white fw-bold mb-4" style="font-family: var(--font-headings);">Contact Enquiries Request</h3>
                        <form id="advisory-contact-form" action="submit_enquiry.php" method="POST" class="d-flex flex-column gap-3">
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <label for="form-cname" class="subheading d-block mb-1.5" style="font-size: 0.55rem;">Full Name</label>
                                    <input type="text" id="form-cname" name="fullname" required placeholder="E.g., Charlotte Sterling" class="form-control bg-dark text-white border-success" style="font-size: 0.75rem; border-color: rgba(40, 90, 72, 0.3) !important;">
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <label for="form-cemail" class="subheading d-block mb-1.5" style="font-size: 0.55rem;">Email</label>
                                    <input type="email" id="form-cemail" name="email" required placeholder="E.g., charlotte@aether.ch" class="form-control bg-dark text-white border-success" style="font-size: 0.75rem; border-color: rgba(40, 90, 72, 0.3) !important;">
                                </div>
                            </div>
                            <div>
                                <label for="form-cmessage" class="subheading d-block mb-1.5" style="font-size: 0.55rem;">Contact Enquiries</label>
                                <textarea id="form-cmessage" name="message" rows="4" required placeholder="Reviewing operational targets or current bottleneck parameters..." class="form-control bg-dark text-white border-success" style="font-size: 0.75rem; border-color: rgba(40, 90, 72, 0.3) !important; resize: none;"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary-custom w-100 mt-2">Submit Enquiry</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Professional Footer -->
    <footer class="py-5" style="background-color: #050b0a; border-top: 1px solid rgba(40, 90, 72, 0.15);">
        <div class="container px-4 py-4 text-start">
            <div class="row g-5 mb-5">
                <div class="col-lg-5">
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
                </div>

                <div class="col-lg-7">
                    <!-- <div class="footer-review-card p-4 p-md-5 rounded-4"> -->
                    <div class="footer-review-card p-3 p-md-4 rounded-4 mx-auto" style="max-width:550px;">    
                        <!-- <h2 class="h4 text-white mb-4" style="font-family: var(--font-headings);">Experience</h2> -->
                        <span class="navbar-brand-text h6 m-0 text-white">Share Your Experience</span>
                        <form action="submit_testimonial.php" method="POST" class="d-flex flex-column gap-2" id="footer-review-form">
                            <div>
                                <label class="form-label text-white" for="footer-review-name">Full Name</label>
                                <input type="text" id="footer-review-name" name="name" class="form-control bg-dark text-white border-success footer-review-input" placeholder="Enter your name" required>
                            </div>

                            <div>
                                <label class="form-label text-white">Rating</label>
                                <div class="d-flex gap-2 footer-star-rating" id="footer-star-rating">

                                    <i data-lucide="star" class="star" data-value="1"></i>

                                    <i data-lucide="star" class="star" data-value="2"></i>

                                    <i data-lucide="star" class="star" data-value="3"></i>

                                    <i data-lucide="star" class="star" data-value="4"></i>

                                    <i data-lucide="star" class="star" data-value="5"></i>
                                </div>

                                <input type="hidden" name="rating" id="footer-rating-input" value="5" required>
                            </div>

                            <div>
                                <label class="form-label text-white" for="footer-review-text">Review</label>
                                <textarea id="footer-review-text" name="review" class="form-control bg-dark text-white border-success footer-review-input" rows="4" placeholder="Write your review here..." required></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary-custom w-100 py-2 footer-review-btn">
                                Submit Review
                            </button>
                        </form>
                    </div>
                </div>

            </div>
            <div class="d-flex flex-column flex-md-row align-items-center justify-content-between pt-4 border-top" style="border-top-color: rgba(40, 90, 72, 0.15) !important;">
                <p class="small mb-0">© 2026 Verdant Consulting Group. All Rights Reserved.</p>
                <div class="d-flex gap-4 mt-3 mt-md-0">

                    <a href="#" class="text-decoration-none small" style="color:#a0b8ad;">
                        Privacy Policy
                    </a>

                    <a href="#" class="text-decoration-none small" style="color:#a0b8ad;">
                        Terms of Engagement
                    </a>

                    <a href="admin/login.php"
                    class="text-decoration-none small"
                    style="color:#408A71;font-weight:600;">
                        <i data-lucide="shield-check"></i>
                        Admin Dashboard
                    </a>

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
    
    <?php
    if(isset($_GET['contact']))
    {
    ?>
    <script>
    document.addEventListener("DOMContentLoaded",function(){
        alert("Thank you! Your consultation request has been sent successfully.");
    });
    </script>
    <?php
    }
    ?>

    <?php
    if(isset($_GET['review']))
    {
    ?>
    <script>
    document.addEventListener("DOMContentLoaded",function(){
        alert("Thank you! Your review has been submitted successfully.");
    });
    </script>
    <?php
    }
    ?>
</body>
</html>
