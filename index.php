<?php
$pageTitle = 'Invenza - Leading Pharmaceutical Solutions';
$pageDescription = 'Leading pharmaceutical company dedicated to improving healthcare through innovative solutions and quality products.';
$pageBannerTitle = 'Home';
include 'includes/header.php';
include 'includes/nav.php';
?>

<!-- Banner Slider (Home only) -->
<section class="banner-slider">
    <div class="banner-slider-inner">
        <div class="slide active" data-slide="0">
            <img src="assets/images/banner-slide-1.png" alt="Pharmaceutical tablets and capsules">
        </div>
        <div class="slide" data-slide="1">
            <img src="assets/images/banner-slide-2.png" alt="Medicine tablets in blister packs">
        </div>
        <div class="slide" data-slide="2">
            <img src="assets/images/banner-slide-3.png" alt="Quality healthcare products">
        </div>
    </div>
    <div class="banner-slider-overlay"></div>
    <div class="banner-slider-content">
        <span class="banner-pre-heading" data-aos="fade-down" data-aos-duration="800">Trusted Healthcare Partner</span>
        <h1 class="banner-slider-title" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            Advancing Health Through <span class="title-highlight-banner">Innovation</span>
        </h1>
        <p class="banner-slider-tagline" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
            Delivering quality pharmaceutical solutions that improve lives and build healthier communities worldwide
        </p>
        <div class="banner-cta-group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
            <a href="products.php" class="banner-slider-btn banner-btn-primary">Explore Products</a>
            <a href="contact.php" class="banner-slider-btn banner-btn-secondary">Get In Touch</a>
        </div>
    </div>
    <div class="banner-slider-dots" id="bannerSliderDots"></div>
    <div class="banner-slider-progress-bar">
        <div class="banner-slider-progress-fill"></div>
    </div>
</section>

<!-- Welcome/About Section -->
<section class="welcome-section">
    <div class="container">
        <div class="welcome-header" data-aos="fade-up">
            <span class="section-pre-heading">
                <span class="pre-heading-line"></span>
                <span class="pre-heading-text">About Us</span>
            </span>
            <h2 class="welcome-main-title">Welcome To <span class="title-highlight">Invenza</span></h2>
            <p class="welcome-subtitle">Leading Healthcare Solutions Since 2007</p>
        </div>
        <div class="welcome-content">
            <div class="welcome-text" data-aos="fade-right">
                <p>We are a healthcare company based at Kerala, since 2007, led by a group of professionals having more than two decades of experience in healthcare. We started our journey with a mission of ensuring quality healthcare products at affordable price to common man.</p>
                <a href="about.php" class="btn">Read More</a>
            </div>
            <div class="welcome-image" data-aos="fade-left">
                <img src="assets/images/banner-slide-2.png" alt="Pharmaceutical products">
            </div>
        </div>
    </div>
</section>

<!-- Manufacturing Section -->
<section class="manufacturing-section">
    <div class="container">
        <div class="manufacturing-content">
            <div class="manufacturing-image" data-aos="fade-left">
                <img src="assets/images/banner-slide-4.png" alt="Manufacturing facility">
            </div>
            <div class="manufacturing-text" data-aos="fade-right">
                <h2 class="section-title">Manufacturing</h2>
                <p>We believe in providing quality health care products affordable to common man hence we ensure quality raw materials by associating ourselves with high standard bulk drug manufacturers. We are getting products manufactured from reputed and top manufacturing houses like Akums Drugs & Pharmaceutical (WHO GMP), Theon Pharmaceutical (WHO GMP), MDC Pharmaceutical (WHO GMP). We, Invenza believes that quality and affordability are our basic responsibility...</p>
                <a href="about.php" class="btn">View Details</a>
            </div>
        </div>
    </div>
</section>

<!-- Products Section -->
<section class="products-section">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Invenza Products</h2>
        <div class="products-slider-wrapper" data-aos="fade-up" data-aos-delay="100">
            <div class="products-slider" id="productsSlider">
                <div class="products-slider-track" id="productsSliderTrack">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/images/banner-pills-1.png" alt="SMICEF 200 DT">
                            <div class="product-overlay">
                                <button class="product-add-btn" aria-label="Add product">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M12 5v14M5 12h14"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3>SMICEF 200 DT</h3>
                            <p>Cefixime Dispersible Tablets IP</p>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/images/banner-pills-2.png" alt="POLOBACT Injection">
                            <div class="product-overlay">
                                <button class="product-add-btn" aria-label="Add product">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M12 5v14M5 12h14"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3>POLOBACT Injection</h3>
                            <p>Piperacillin & Tazobactam Injection I.P</p>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/images/banner-pills-1.png" alt="SMICEF 200 DT">
                            <div class="product-overlay">
                                <button class="product-add-btn" aria-label="Add product">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M12 5v14M5 12h14"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3>SMICEF 200 DT</h3>
                            <p>Cefixime Dispersible Tablets IP</p>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/images/banner-pills-2.png" alt="Peptizol">
                            <div class="product-overlay">
                                <button class="product-add-btn" aria-label="Add product">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M12 5v14M5 12h14"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3>Peptizol</h3>
                            <p>Pantoprazole Gastro-Resistant Tablets IP</p>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/images/banner-pills-1.png" alt="VILDACRAFT M">
                            <div class="product-overlay">
                                <button class="product-add-btn" aria-label="Add product">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M12 5v14M5 12h14"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3>VILDACRAFT M</h3>
                            <p>Vildagliptin and Metformin HCI Tablets</p>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/images/banner-pills-2.png" alt="Additional Product">
                            <div class="product-overlay">
                                <button class="product-add-btn" aria-label="Add product">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M12 5v14M5 12h14"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3>Product 6</h3>
                            <p>Additional Pharmaceutical Product</p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="products-slider-prev" id="productsSliderPrev" aria-label="Previous products">‹</button>
            <button class="products-slider-next" id="productsSliderNext" aria-label="Next products">›</button>
        </div>
        <div class="products-more" data-aos="fade-up" data-aos-delay="200">
            <a href="products.php" class="btn btn-more-products">
                More Products
                <svg class="btn-arrow-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Contact Info Section -->
<section class="contact-info-section">
    <div class="container">
        <div class="contact-info-grid">
            <div class="contact-info-card" data-aos="fade-up">
                <h3>Our Contacts</h3>
                <ul>
                    <li><strong>Email:</strong> <a href="mailto:invenzalifesciences@gmail.com">invenzalifesciences@gmail.com</a></li>
                    <li><strong>Phone:</strong> +1 (555) 123-4567, +1 (555) 987-6543</li>
                    <li><strong>Address:</strong> 123 Medical Drive, Health City, HC 12345</li>
                </ul>
            </div>
            <div class="contact-info-card" data-aos="fade-up" data-aos-delay="100">
                <h3>Working Time</h3>
                <table>
                    <tr>
                        <td><strong>Mon-Sat</strong></td>
                        <td>09:30 am - 05:30 pm</td>
                    </tr>
                    <tr>
                        <td><strong>Sunday</strong></td>
                        <td>Closed</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- Get In Touch Section -->
<section class="get-in-touch-section">
    <div class="container">
        <div class="get-in-touch-content">
            <div class="get-in-touch-text" data-aos="fade-right">
                <div class="section-pre-heading">
                    <div class="pre-heading-line"></div>
                    <span class="pre-heading-text">QUESTION ANSWER</span>
                </div>
                <h2 class="get-in-touch-title">Get In Touch For <span class="highlight">Further</span> Details</h2>
                <p class="get-in-touch-description">Have questions or need more information? Our team is here to help! Feel free to reach out to us.</p>
                <a href="contact.php" class="get-in-touch-btn">
                    GET A QUOTE
                    <span class="btn-arrow">→</span>
                </a>
            </div>
            <div class="get-in-touch-image" data-aos="fade-left">
                <img src="assets/images/get-in-touch-image.png" alt="Pharmaceutical consultation">
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
