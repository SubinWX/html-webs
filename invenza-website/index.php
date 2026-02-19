<?php
$pageTitle = 'Invenza Life Sciences | Pharmaceutical Company Since 2019';
$pageDescription = 'Invenza Life Sciences – trusted pharmaceutical company since 2019. Quality medicines, WHO-GMP manufacturing, affordable healthcare. Kerala & Hyderabad.';
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
            <p class="welcome-subtitle">Leading Healthcare Solutions Since 2019</p>
        </div>
        <div class="welcome-content">
            <div class="welcome-text" data-aos="fade-right">
                <p>Invenza Life Sciences is a trusted pharmaceutical company headquartered in Kerala, driving healthcare innovation since 2019. Our leadership team brings decades of combined experience in pharma and life sciences. We are committed to making quality medicines and healthcare products accessible and affordable, so every patient can benefit from reliable, evidence-based treatments.</p>
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
                <p>Invenza partners with WHO-GMP certified manufacturers to deliver safe, effective pharmaceuticals at scale. Our products are manufactured by M Sea Pharmaceuticals (P) Ltd., a WHO, GMP, GLP & ISO certified company. We source quality raw materials from approved bulk drug suppliers and maintain strict quality control, regulatory compliance, and affordability in everything we manufacture.</p>
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
                            <img src="assets/images/banner-pills-1.png" alt="Inzamox CV 625">
                            <div class="product-overlay">
                                <button class="product-add-btn" aria-label="Add product">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M12 5v14M5 12h14"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3>Inzamox CV 625</h3>
                            <p>Amoxicillin 500mg + Clavulanic Acid 125mg Tablets</p>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/images/banner-pills-2.png" alt="Inzamox 500">
                            <div class="product-overlay">
                                <button class="product-add-btn" aria-label="Add product">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M12 5v14M5 12h14"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3>Inzamox 500</h3>
                            <p>Amoxicillin 500mg Capsules</p>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/images/banner-pills-1.png" alt="Mefza Forte">
                            <div class="product-overlay">
                                <button class="product-add-btn" aria-label="Add product">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M12 5v14M5 12h14"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3>Mefza Forte</h3>
                            <p>Mefenamic Acid Tablets</p>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/images/banner-pills-2.png" alt="ACLOVEN P">
                            <div class="product-overlay">
                                <button class="product-add-btn" aria-label="Add product">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M12 5v14M5 12h14"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3>ACLOVEN P</h3>
                            <p>Aceclofenac + Paracetamol Tablets</p>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/images/banner-pills-1.png" alt="Inzapan 40">
                            <div class="product-overlay">
                                <button class="product-add-btn" aria-label="Add product">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M12 5v14M5 12h14"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3>Inzapan 40</h3>
                            <p>Pantoprazole 40mg Gastro-Resistant Tablets</p>
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

<!-- Testimonials Section -->
<section class="testimonials-section">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">What Our Partners Say</h2>
        <p class="testimonials-intro" data-aos="fade-up">Trusted by healthcare professionals and partners across the industry.</p>
        <div class="testimonials-slider-wrapper" data-aos="fade-up">
            <div class="testimonials-slider">
                <div class="testimonials-track">
                    <div class="testimonial-card active" data-testimonial="0">
                        <div class="testimonial-quote">"Invenza’s commitment to quality and timely supply has made them our preferred partner. Their products meet the standards we expect for our patients."</div>
                        <div class="testimonial-author">
                            <span class="testimonial-name">Dr. Davis Mitchell</span>
                            <span class="testimonial-role">Clinical Director</span>
                        </div>
                    </div>
                    <div class="testimonial-card" data-testimonial="1">
                        <div class="testimonial-quote">"We have been working with Invenza since 2020. Their range of antibiotics and gastro products has been reliable and their team is always responsive."</div>
                        <div class="testimonial-author">
                            <span class="testimonial-name">Dr. Priya Sharma</span>
                            <span class="testimonial-role">Chief Pharmacist</span>
                        </div>
                    </div>
                    <div class="testimonial-card" data-testimonial="2">
                        <div class="testimonial-quote">"Quality and affordability matter in our practice. Invenza delivers on both. I recommend their products with confidence to my patients."</div>
                        <div class="testimonial-author">
                            <span class="testimonial-name">Dr. Rajesh Kumar</span>
                            <span class="testimonial-role">Consultant Physician</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonials-dots" id="testimonialsDots"></div>
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
                    <li><strong>Phone:</strong> +91 9207973906</li>
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
