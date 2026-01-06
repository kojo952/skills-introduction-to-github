<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Bella Cucina | Fine Dining Restaurant</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --secondary-gradient: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            --dark-bg: #0f0f23;
            --card-bg: rgba(255, 255, 255, 0.05);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--dark-bg);
            color: #ffffff;
            overflow-x: hidden;
        }

        /* Animated Background */
        .bg-animation {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: linear-gradient(125deg, #0f0f23 0%, #1a1a3e 50%, #0f0f23 100%);
        }

        .bg-animation::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 20% 80%, rgba(102, 126, 234, 0.15) 0%, transparent 50%),
                        radial-gradient(circle at 80% 20%, rgba(118, 75, 162, 0.15) 0%, transparent 50%),
                        radial-gradient(circle at 40% 40%, rgba(240, 147, 251, 0.1) 0%, transparent 40%);
        }

        /* Navbar */
        .navbar {
            background: rgba(15, 15, 35, 0.8) !important;
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            padding: 1rem 0;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            color: #667eea; /* Fallback for accessibility */
        }

        .nav-link {
            color: rgba(255, 255, 255, 0.8) !important;
            font-weight: 500;
            transition: all 0.3s ease;
            margin: 0 0.5rem;
        }

        .nav-link:hover {
            color: #667eea !important;
        }

        .btn-gradient {
            background: var(--primary-gradient);
            border: none;
            padding: 0.6rem 1.5rem;
            border-radius: 50px;
            color: white;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        }

        .btn-gradient:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.6);
            color: white;
        }

        /* Hero Section */
        .hero-section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 8rem 0 4rem;
            position: relative;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 1.5rem;
            font-family: 'Playfair Display', serif;
        }

        .hero-title span {
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-subtitle {
            font-size: 1.25rem;
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 2rem;
            line-height: 1.8;
        }

        .hero-image {
            position: relative;
        }

        .hero-image img {
            width: 100%;
            border-radius: 20px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5);
        }

        .floating-card {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 1rem 1.5rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
            animation: float 3s ease-in-out infinite;
        }

        .floating-card.card-1 {
            top: 10%;
            right: -10%;
            animation-delay: 0s;
        }

        .floating-card.card-2 {
            bottom: 20%;
            left: -5%;
            animation-delay: 1s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        /* Features Section */
        .features-section {
            padding: 6rem 0;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 1rem;
            font-family: 'Playfair Display', serif;
        }

        .section-subtitle {
            text-align: center;
            color: rgba(255, 255, 255, 0.6);
            margin-bottom: 4rem;
            font-size: 1.1rem;
        }

        .feature-card {
            background: var(--card-bg);
            border-radius: 20px;
            padding: 2rem;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.4s ease;
            height: 100%;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            border-color: rgba(102, 126, 234, 0.5);
            box-shadow: 0 20px 40px rgba(102, 126, 234, 0.2);
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            background: var(--primary-gradient);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .feature-card h4 {
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .feature-card p {
            color: rgba(255, 255, 255, 0.6);
            line-height: 1.7;
        }

        /* Stats Section */
        .stats-section {
            padding: 4rem 0;
            background: rgba(255, 255, 255, 0.02);
        }

        .stat-item {
            text-align: center;
            padding: 2rem;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .stat-label {
            color: rgba(255, 255, 255, 0.6);
            font-size: 1.1rem;
            margin-top: 0.5rem;
        }

        /* Testimonials Section */
        .testimonials-section {
            padding: 6rem 0;
        }

        .testimonial-card {
            background: var(--card-bg);
            border-radius: 20px;
            padding: 2rem;
            border: 1px solid rgba(255, 255, 255, 0.1);
            margin: 1rem;
        }

        .testimonial-text {
            font-style: italic;
            color: rgba(255, 255, 255, 0.8);
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
            background: var(--primary-gradient);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            margin-right: 1rem;
        }

        .author-info h6 {
            margin-bottom: 0.25rem;
            font-weight: 600;
        }

        .author-info span {
            color: rgba(255, 255, 255, 0.5);
            font-size: 0.9rem;
        }

        /* CTA Section */
        .cta-section {
            padding: 6rem 0;
        }

        .cta-box {
            background: var(--primary-gradient);
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
        }

        .cta-box p {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 2rem;
            position: relative;
        }

        .btn-white {
            background: white;
            color: #667eea;
            padding: 1rem 2.5rem;
            border-radius: 50px;
            font-weight: 600;
            border: none;
            transition: all 0.3s ease;
            position: relative;
        }

        .btn-white:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            color: #764ba2;
        }

        /* Footer */
        .footer {
            background: rgba(0, 0, 0, 0.3);
            padding: 4rem 0 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .footer-brand {
            font-size: 1.5rem;
            font-weight: 700;
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1rem;
            display: inline-block;
        }

        .footer-text {
            color: rgba(255, 255, 255, 0.6);
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
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.6);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .footer-links a:hover {
            color: #667eea;
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
            background: var(--primary-gradient);
            transform: translateY(-3px);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            margin-top: 3rem;
            padding-top: 2rem;
            text-align: center;
            color: rgba(255, 255, 255, 0.5);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .hero-section {
                text-align: center;
            }

            .hero-image {
                margin-top: 3rem;
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
    <!-- Background Animation -->
    <div class="bg-animation"></div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">La Bella Cucina</a>
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
                <a href="#contact" class="btn btn-gradient">Reserve Table</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="hero-title">Experience <span>Authentic</span> Italian Cuisine</h1>
                    <p class="hero-subtitle">Indulge in a culinary journey with our chef's exquisite dishes, crafted from the finest ingredients and timeless recipes passed down through generations.</p>
                    <div class="d-flex gap-3 flex-wrap">
                        <a href="#menu" class="btn btn-gradient btn-lg">View Menu</a>
                        <a href="#contact" class="btn btn-outline-light btn-lg rounded-pill">Reserve Table</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image">
                        <div class="floating-card card-1">
                            <i class="bi bi-star-fill text-warning me-2"></i>
                            <span>5-Star Rated</span>
                        </div>
                        <div class="floating-card card-2">
                            <i class="bi bi-award text-success me-2"></i>
                            <span>Award Winning</span>
                        </div>
                        <div class="ratio ratio-16x9 rounded-4 overflow-hidden" style="background: var(--primary-gradient);">
                            <div class="d-flex align-items-center justify-content-center">
                                <i class="bi bi-cup-hot" style="font-size: 4rem; opacity: 0.8;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu Section -->
    <section class="features-section" id="menu">
        <div class="container">
            <h2 class="section-title">Our Signature Dishes</h2>
            <p class="section-subtitle">Discover our chef's handcrafted specialties</p>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-egg-fried"></i>
                        </div>
                        <h4>Truffle Risotto</h4>
                        <p>Creamy Arborio rice infused with black truffle, aged Parmigiano-Reggiano, and finished with truffle oil. A luxurious Italian classic.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-fire"></i>
                        </div>
                        <h4>Wagyu Filet Mignon</h4>
                        <p>Premium Japanese Wagyu beef, perfectly seared and served with roasted vegetables and our signature red wine reduction.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-droplet"></i>
                        </div>
                        <h4>Lobster Linguine</h4>
                        <p>Fresh Maine lobster tossed with al dente linguine in a rich tomato and white wine sauce with fresh herbs.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-flower1"></i>
                        </div>
                        <h4>Caprese Salad</h4>
                        <p>Heirloom tomatoes, fresh buffalo mozzarella, and basil drizzled with extra virgin olive oil and balsamic reduction.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-cup-hot"></i>
                        </div>
                        <h4>Tiramisu</h4>
                        <p>Classic Italian dessert with layers of espresso-soaked ladyfingers, mascarpone cream, and dusted with cocoa powder.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-cup-straw"></i>
                        </div>
                        <h4>Wine Selection</h4>
                        <p>Curated collection of fine wines from renowned Italian vineyards, perfectly paired with your meal by our sommelier.</p>
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
                        <div class="stat-number">15+</div>
                        <div class="stat-label">Years of Excellence</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-number">50K+</div>
                        <div class="stat-label">Happy Diners</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-number">120+</div>
                        <div class="stat-label">Menu Items</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-number">5</div>
                        <div class="stat-label">Star Rating</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section" id="about">
        <div class="container">
            <h2 class="section-title">What Our Guests Say</h2>
            <p class="section-subtitle">Reviews from our valued customers</p>
            <div class="row">
                <div class="col-lg-4">
                    <div class="testimonial-card">
                        <p class="testimonial-text">"An absolutely divine dining experience! The truffle risotto was heavenly, and the service was impeccable. This is now our go-to place for special occasions."</p>
                        <div class="testimonial-author">
                            <div class="author-avatar">MC</div>
                            <div class="author-info">
                                <h6>Maria Chen</h6>
                                <span>Food Critic</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-card">
                        <p class="testimonial-text">"The ambiance is elegant yet welcoming. Every dish tells a story of passion and tradition. The chef's attention to detail is remarkable."</p>
                        <div class="testimonial-author">
                            <div class="author-avatar">RB</div>
                            <div class="author-info">
                                <h6>Robert Brown</h6>
                                <span>Regular Guest</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-card">
                        <p class="testimonial-text">"Best Italian restaurant in the city! The wine pairing recommendations were spot on. We celebrated our anniversary here and it was magical."</p>
                        <div class="testimonial-author">
                            <div class="author-avatar">EW</div>
                            <div class="author-info">
                                <h6>Emily Watson</h6>
                                <span>Anniversary Dinner</span>
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
                <h2>Reserve Your Table Tonight</h2>
                <p>Experience an unforgettable evening of fine dining and exceptional service</p>
                <a href="tel:+1234567890" class="btn btn-white btn-lg">Call (123) 456-7890</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="footer-brand">La Bella Cucina</div>
                    <p class="footer-text">Experience authentic Italian cuisine in an elegant setting. Our passion for food and hospitality creates unforgettable dining moments.</p>
                    <div class="social-links">
                        <a href="#" aria-label="Follow us on Twitter" title="Twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" aria-label="Follow us on Facebook" title="Facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" aria-label="Follow us on Instagram" title="Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" aria-label="View our Yelp" title="Yelp"><i class="bi bi-yelp"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-4">
                    <h6>Quick Links</h6>
                    <ul class="footer-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#menu">Menu</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Reservations</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 mb-4">
                    <h6>Hours</h6>
                    <ul class="footer-links">
                        <li>Mon - Thu: 5pm - 10pm</li>
                        <li>Fri - Sat: 5pm - 11pm</li>
                        <li>Sunday: 4pm - 9pm</li>
                        <li>Brunch: Sat-Sun 10am-2pm</li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4 mb-4">
                    <h6>Newsletter</h6>
                    <p class="footer-text mb-3">Subscribe for special offers and events</p>
                    <form class="input-group" action="#" method="post" onsubmit="return validateEmail(this);">
                        <input type="email" name="email" class="form-control bg-transparent border-secondary text-white" placeholder="Enter your email" required aria-label="Email address for newsletter" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                        <button class="btn btn-gradient" type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> La Bella Cucina. All rights reserved. | 123 Gourmet Street, Culinary District</p>
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
                navbar.style.background = 'rgba(15, 15, 35, 0.95)';
            } else {
                navbar.style.background = 'rgba(15, 15, 35, 0.8)';
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
            alert('Thank you for subscribing!');
            form.reset();
            return false; // Prevent actual form submission for demo
        }
    </script>
</body>
</html>
