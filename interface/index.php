<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akwaaba Kitchen | Authentic Ghanaian Restaurant</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-red: #C41E3A;
            --dark-red: #8B0000;
            --light-red: #DC143C;
            --white: #ffffff;
            --off-white: #f8f9fa;
            --text-dark: #2d2d2d;
            --text-muted: #6c757d;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--white);
            color: var(--text-dark);
            overflow-x: hidden;
        }

        /* Navbar */
        .navbar {
            background: var(--white) !important;
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(196, 30, 58, 0.1);
            padding: 1rem 0;
            box-shadow: 0 2px 20px rgba(0,0,0,0.05);
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: var(--primary-red) !important;
            font-family: 'Playfair Display', serif;
        }

        .nav-link {
            color: var(--text-dark) !important;
            font-weight: 500;
            transition: all 0.3s ease;
            margin: 0 0.5rem;
        }

        .nav-link:hover {
            color: var(--primary-red) !important;
        }

        .btn-primary-red {
            background: var(--primary-red);
            border: none;
            padding: 0.6rem 1.5rem;
            border-radius: 50px;
            color: white;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(196, 30, 58, 0.3);
        }

        .btn-primary-red:hover {
            background: var(--dark-red);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(196, 30, 58, 0.4);
            color: white;
        }

        /* Hero Section with Background Overlay */
        .hero-section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 8rem 0 6rem;
            position: relative;
            background: linear-gradient(135deg, rgba(196, 30, 58, 0.9) 0%, rgba(139, 0, 0, 0.95) 100%);
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 30% 70%, rgba(255,255,255,0.1) 0%, transparent 50%),
                        radial-gradient(circle at 70% 30%, rgba(255,255,255,0.08) 0%, transparent 40%);
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 1.5rem;
            font-family: 'Playfair Display', serif;
            color: var(--white);
        }

        .hero-title span {
            color: #FFD700;
        }

        .hero-subtitle {
            font-size: 1.25rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 2rem;
            line-height: 1.8;
        }

        .btn-white {
            background: var(--white);
            color: var(--primary-red);
            padding: 1rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-white:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            color: var(--dark-red);
        }

        .btn-outline-white {
            border: 2px solid var(--white);
            color: var(--white);
            padding: 0.9rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            background: transparent;
            transition: all 0.3s ease;
        }

        .btn-outline-white:hover {
            background: var(--white);
            color: var(--primary-red);
        }

        .floating-card {
            position: absolute;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 1rem 1.5rem;
            border: 1px solid rgba(255, 255, 255, 0.3);
            animation: float 3s ease-in-out infinite;
            color: white;
        }

        .floating-card.card-1 {
            top: 20%;
            right: 5%;
            animation-delay: 0s;
        }

        .floating-card.card-2 {
            bottom: 25%;
            right: 15%;
            animation-delay: 1s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        /* Menu Section */
        .menu-section {
            padding: 6rem 0;
            background: var(--white);
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 1rem;
            font-family: 'Playfair Display', serif;
            color: var(--text-dark);
        }

        .section-title span {
            color: var(--primary-red);
        }

        .section-subtitle {
            text-align: center;
            color: var(--text-muted);
            margin-bottom: 4rem;
            font-size: 1.1rem;
        }

        .menu-card {
            background: var(--white);
            border-radius: 20px;
            padding: 2rem;
            border: 1px solid rgba(196, 30, 58, 0.1);
            transition: all 0.4s ease;
            height: 100%;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        }

        .menu-card:hover {
            transform: translateY(-10px);
            border-color: var(--primary-red);
            box-shadow: 0 20px 40px rgba(196, 30, 58, 0.15);
        }

        .menu-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--primary-red) 0%, var(--dark-red) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            color: white;
        }

        .menu-card h4 {
            font-weight: 600;
            margin-bottom: 1rem;
            color: var(--text-dark);
            font-family: 'Playfair Display', serif;
        }

        .menu-card p {
            color: var(--text-muted);
            line-height: 1.7;
        }

        .menu-price {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--primary-red);
            margin-top: 1rem;
        }

        /* Stats Section with Background */
        .stats-section {
            padding: 5rem 0;
            background: linear-gradient(135deg, var(--primary-red) 0%, var(--dark-red) 100%);
            position: relative;
        }

        .stat-item {
            text-align: center;
            padding: 2rem;
            position: relative;
            z-index: 1;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            color: var(--white);
            font-family: 'Playfair Display', serif;
        }

        .stat-label {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.1rem;
            margin-top: 0.5rem;
        }

        /* About Section */
        .about-section {
            padding: 6rem 0;
            background: var(--off-white);
        }

        /* Testimonials Section */
        .testimonials-section {
            padding: 6rem 0;
            background: var(--white);
        }

        .testimonial-card {
            background: var(--white);
            border-radius: 20px;
            padding: 2rem;
            border: 1px solid rgba(196, 30, 58, 0.1);
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            height: 100%;
        }

        .testimonial-text {
            font-style: italic;
            color: var(--text-dark);
            line-height: 1.8;
            margin-bottom: 1.5rem;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
        }

        .author-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-red) 0%, var(--dark-red) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            margin-right: 1rem;
            color: white;
        }

        .author-info h6 {
            margin-bottom: 0.25rem;
            font-weight: 600;
            color: var(--text-dark);
        }

        .author-info span {
            color: var(--text-muted);
            font-size: 0.9rem;
        }

        /* CTA Section */
        .cta-section {
            padding: 6rem 0;
            background: var(--off-white);
        }

        .cta-box {
            background: linear-gradient(135deg, var(--primary-red) 0%, var(--dark-red) 100%);
            border-radius: 30px;
            padding: 4rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .cta-box::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 60%);
        }

        .cta-box h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            position: relative;
            color: var(--white);
            font-family: 'Playfair Display', serif;
        }

        .cta-box p {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 2rem;
            position: relative;
            color: var(--white);
        }

        .cta-btn {
            background: white;
            color: var(--primary-red);
            padding: 1rem 2.5rem;
            border-radius: 50px;
            font-weight: 600;
            border: none;
            transition: all 0.3s ease;
            position: relative;
        }

        .cta-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            color: var(--dark-red);
        }

        /* Footer */
        .footer {
            background: var(--text-dark);
            padding: 4rem 0 2rem;
            color: var(--white);
        }

        .footer-brand {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--white);
            margin-bottom: 1rem;
            display: inline-block;
            font-family: 'Playfair Display', serif;
        }

        .footer-text {
            color: rgba(255, 255, 255, 0.7);
            line-height: 1.8;
        }

        .footer h6 {
            font-weight: 600;
            margin-bottom: 1.5rem;
            color: white;
        }

        .footer-links {
            list-style: none;
            padding: 0;
        }

        .footer-links li {
            margin-bottom: 0.75rem;
            color: rgba(255, 255, 255, 0.7);
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .footer-links a:hover {
            color: var(--primary-red);
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .social-links a {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background: var(--primary-red);
            transform: translateY(-3px);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            margin-top: 3rem;
            padding-top: 2rem;
            text-align: center;
            color: rgba(255, 255, 255, 0.6);
        }

        .newsletter-input {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
        }

        .newsletter-input::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }

        .newsletter-input:focus {
            background: rgba(255, 255, 255, 0.15);
            border-color: var(--primary-red);
            color: white;
            box-shadow: none;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .hero-section {
                text-align: center;
            }

            .floating-card {
                display: none;
            }

            .cta-box {
                padding: 2rem;
            }

            .cta-box h2 {
                font-size: 1.75rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">🇬🇭 Akwaaba Kitchen</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto me-4">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#menu">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
                <a href="#contact" class="btn btn-primary-red">Order Now</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 hero-content">
                    <h1 class="hero-title">Taste the <span>Authentic</span> Flavors of Ghana</h1>
                    <p class="hero-subtitle">Welcome to Akwaaba Kitchen! Experience the rich, vibrant tastes of Ghana with our traditional recipes passed down through generations. From our famous Jollof Rice to local favorites, every dish tells a story of home.</p>
                    <div class="d-flex gap-3 flex-wrap">
                        <a href="#menu" class="btn btn-white btn-lg">Explore Menu</a>
                        <a href="#contact" class="btn btn-outline-white btn-lg">Reserve Table</a>
                    </div>
                </div>
                <div class="col-lg-5 position-relative">
                    <div class="floating-card card-1">
                        <i class="bi bi-star-fill text-warning me-2"></i>
                        <span>Best Jollof in Town!</span>
                    </div>
                    <div class="floating-card card-2">
                        <i class="bi bi-award me-2"></i>
                        <span>Award Winning Chef</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu Section -->
    <section class="menu-section" id="menu">
        <div class="container">
            <h2 class="section-title">Our <span>Delicious</span> Menu</h2>
            <p class="section-subtitle">Discover authentic Ghanaian dishes and continental favorites</p>
            
            <!-- Local Dishes -->
            <h5 class="text-center mb-4" style="color: var(--primary-red); font-weight: 600;">🍚 Local Ghanaian Favorites</h5>
            <div class="row g-4 mb-5">
                <div class="col-lg-4 col-md-6">
                    <div class="menu-card">
                        <div class="menu-icon">
                            <i class="bi bi-fire"></i>
                        </div>
                        <h4>Jollof Rice</h4>
                        <p>Our signature smoky Ghanaian Jollof rice cooked with rich tomato sauce, spices, and served with your choice of grilled chicken, fish, or beef.</p>
                        <div class="menu-price">GH₵ 45.00</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="menu-card">
                        <div class="menu-icon">
                            <i class="bi bi-egg-fried"></i>
                        </div>
                        <h4>Waakye</h4>
                        <p>Traditional rice and beans cooked with millet leaves, served with spicy shito sauce, spaghetti, gari, and your choice of protein.</p>
                        <div class="menu-price">GH₵ 40.00</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="menu-card">
                        <div class="menu-icon">
                            <i class="bi bi-droplet-fill"></i>
                        </div>
                        <h4>Banku &amp; Tilapia</h4>
                        <p>Fermented corn and cassava dough served with freshly grilled tilapia, hot pepper sauce, and fresh vegetables.</p>
                        <div class="menu-price">GH₵ 65.00</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="menu-card">
                        <div class="menu-icon">
                            <i class="bi bi-cup-hot-fill"></i>
                        </div>
                        <h4>Fufu &amp; Light Soup</h4>
                        <p>Pounded cassava and plantain served with aromatic light soup, goat meat, and assorted fish. A true Ghanaian comfort food.</p>
                        <div class="menu-price">GH₵ 55.00</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="menu-card">
                        <div class="menu-icon">
                            <i class="bi bi-brightness-high"></i>
                        </div>
                        <h4>Kelewele</h4>
                        <p>Spicy fried plantain cubes seasoned with ginger, pepper, and African spices. Perfect as a starter or side dish.</p>
                        <div class="menu-price">GH₵ 25.00</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="menu-card">
                        <div class="menu-icon">
                            <i class="bi bi-moon-stars"></i>
                        </div>
                        <h4>Red Red</h4>
                        <p>Black-eyed beans stewed in palm oil with ripe plantain. A popular vegetarian-friendly Ghanaian classic.</p>
                        <div class="menu-price">GH₵ 35.00</div>
                    </div>
                </div>
            </div>

            <!-- Continental Dishes -->
            <h5 class="text-center mb-4" style="color: var(--primary-red); font-weight: 600;">🍽️ Continental &amp; Fusion</h5>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="menu-card">
                        <div class="menu-icon">
                            <i class="bi bi-star"></i>
                        </div>
                        <h4>Fried Rice Special</h4>
                        <p>Ghanaian-style fried rice with mixed vegetables, shrimp, and your choice of chicken or beef. Served with extra shito.</p>
                        <div class="menu-price">GH₵ 50.00</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="menu-card">
                        <div class="menu-icon">
                            <i class="bi bi-heart-fill"></i>
                        </div>
                        <h4>Grilled Chicken Platter</h4>
                        <p>Juicy grilled chicken marinated in special Ghanaian spices, served with jollof rice, coleslaw, and fried plantain.</p>
                        <div class="menu-price">GH₵ 70.00</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="menu-card">
                        <div class="menu-icon">
                            <i class="bi bi-water"></i>
                        </div>
                        <h4>Seafood Okro Soup</h4>
                        <p>Rich okro soup loaded with crab, shrimp, and assorted fish. Served with your choice of banku or fufu.</p>
                        <div class="menu-price">GH₵ 80.00</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-number">20+</div>
                        <div class="stat-label">Years of Cooking</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-number">75K+</div>
                        <div class="stat-label">Happy Customers</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-number">50+</div>
                        <div class="stat-label">Menu Items</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-number">5⭐</div>
                        <div class="stat-label">Customer Rating</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section" id="about">
        <div class="container">
            <h2 class="section-title">What Our <span>Guests</span> Say</h2>
            <p class="section-subtitle">Reviews from our valued customers</p>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="testimonial-card">
                        <p class="testimonial-text">"The best Jollof rice I've had outside of Ghana! The smoky flavor took me right back to my grandmother's kitchen. Absolutely delicious!"</p>
                        <div class="testimonial-author">
                            <div class="author-avatar">KA</div>
                            <div class="author-info">
                                <h6>Kwame Asante</h6>
                                <span>Food Blogger</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-card">
                        <p class="testimonial-text">"Akwaaba Kitchen serves authentic Ghanaian food with love. The Banku and Tilapia is perfectly prepared. A must-visit for anyone craving home food!"</p>
                        <div class="testimonial-author">
                            <div class="author-avatar">AM</div>
                            <div class="author-info">
                                <h6>Ama Mensah</h6>
                                <span>Regular Customer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-card">
                        <p class="testimonial-text">"We hosted our family reunion here and everyone loved it! The service was excellent and the food portions were generous. Highly recommend!"</p>
                        <div class="testimonial-author">
                            <div class="author-avatar">KO</div>
                            <div class="author-info">
                                <h6>Kofi Owusu</h6>
                                <span>Event Host</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section" id="contact">
        <div class="container">
            <div class="cta-box">
                <h2>Ready to Taste Ghana?</h2>
                <p>Visit us today or place your order for pickup and delivery</p>
                <a href="tel:+233200000000" class="btn cta-btn btn-lg">📞 Call +233 20 000 0000</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="footer-brand">🇬🇭 Akwaaba Kitchen</div>
                    <p class="footer-text">Experience the warmth of Ghanaian hospitality and the rich flavors of our traditional cuisine. Akwaaba means "Welcome" - and that's exactly how you'll feel here.</p>
                    <div class="social-links">
                        <a href="#" aria-label="Follow us on Twitter" title="Twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" aria-label="Follow us on Facebook" title="Facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" aria-label="Follow us on Instagram" title="Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" aria-label="WhatsApp" title="WhatsApp"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-4">
                    <h6>Quick Links</h6>
                    <ul class="footer-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#menu">Menu</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 mb-4">
                    <h6>Opening Hours</h6>
                    <ul class="footer-links">
                        <li>Mon - Fri: 10am - 10pm</li>
                        <li>Saturday: 9am - 11pm</li>
                        <li>Sunday: 11am - 9pm</li>
                        <li>Public Holidays: Open</li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4 mb-4">
                    <h6>Newsletter</h6>
                    <p class="footer-text mb-3">Subscribe for special offers and new menu updates</p>
                    <form class="input-group" action="#" method="post" onsubmit="return validateEmail(this);">
                        <input type="email" name="email" class="form-control newsletter-input" placeholder="Enter your email" required aria-label="Email address for newsletter" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                        <button class="btn btn-primary-red" type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Akwaaba Kitchen. All rights reserved. | 📍 Osu, Oxford Street, Accra, Ghana</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Smooth Scroll -->
    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Navbar background on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.boxShadow = '0 2px 30px rgba(0,0,0,0.1)';
            } else {
                navbar.style.boxShadow = '0 2px 20px rgba(0,0,0,0.05)';
            }
        });

        // Email validation for newsletter form
        function validateEmail(form) {
            const email = form.email.value;
            const emailRegex = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/i;
            if (!emailRegex.test(email)) {
                alert('Please enter a valid email address.');
                return false;
            }
            alert('Medaase! Thank you for subscribing!');
            form.reset();
            return false;
        }
    </script>
</body>
</html>
