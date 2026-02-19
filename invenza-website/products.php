<?php
$pageTitle = 'Products - Invenza';
$pageDescription = 'Browse Invenza pharmaceutical products: tablets, capsules, injections. Quality medicines including antibiotics, antacids, antidiabetics, and more. WHO-GMP compliant.';
$pageBannerTitle = 'Our Products';
$pageBannerImage = 'assets/images/banner-slide-2.png';
include 'includes/header.php';
include 'includes/nav.php';
include 'includes/page-banner.php';
?>

<section class="products-page-section">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Our Pharmaceutical Products</h2>
        <p style="text-align: center; max-width: 700px; margin: 0 auto 2rem; color: var(--text); line-height: 1.7;">Invenza offers a range of quality-assured pharmaceuticals including tablets, dispersible tablets, capsules, and injections. Our products are manufactured by WHO, GMP, GLP & ISO certified facilities and meet strict quality and regulatory standards.</p>
        <div class="products-page-grid" data-aos="fade-up" data-aos-delay="100">
            <div class="product-card" data-aos="fade-up" data-aos-delay="100">
                <div class="product-image">
                    <img src="assets/images/banner-pills-1.png" alt="Inzamox CV 625">
                    <div class="product-overlay">
                        <button class="product-add-btn" aria-label="View details">
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
            <div class="product-card" data-aos="fade-up" data-aos-delay="200">
                <div class="product-image">
                    <img src="assets/images/banner-pills-2.png" alt="Inzamox 500">
                    <div class="product-overlay">
                        <button class="product-add-btn" aria-label="View details">
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
            <div class="product-card" data-aos="fade-up" data-aos-delay="300">
                <div class="product-image">
                    <img src="assets/images/banner-pills-1.png" alt="Mefza Forte">
                    <div class="product-overlay">
                        <button class="product-add-btn" aria-label="View details">
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
            <div class="product-card" data-aos="fade-up" data-aos-delay="400">
                <div class="product-image">
                    <img src="assets/images/banner-pills-2.png" alt="ACLOVEN P">
                    <div class="product-overlay">
                        <button class="product-add-btn" aria-label="View details">
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
            <div class="product-card" data-aos="fade-up" data-aos-delay="500">
                <div class="product-image">
                    <img src="assets/images/banner-pills-1.png" alt="Inzapan 40">
                    <div class="product-overlay">
                        <button class="product-add-btn" aria-label="View details">
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
</section>

<?php include 'includes/cta-banner.php'; ?>
<?php include 'includes/footer.php'; ?>
