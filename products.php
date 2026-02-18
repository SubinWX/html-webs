<?php
$pageTitle = 'Products - Invenza';
$pageDescription = 'Explore our wide range of pharmaceutical products including tablets, capsules, and injections.';
$pageBannerTitle = 'Our Products';
$pageBannerImage = 'assets/images/banner-slide-2.png';
include 'includes/header.php';
include 'includes/nav.php';
include 'includes/page-banner.php';
?>

<section class="products-page-section">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">All Products</h2>
        <div class="products-page-grid" data-aos="fade-up" data-aos-delay="100">
            <div class="product-card" data-aos="fade-up" data-aos-delay="100">
                <div class="product-image">
                    <img src="assets/images/banner-pills-1.png" alt="SMICEF 200 DT">
                    <div class="product-overlay">
                        <button class="product-add-btn" aria-label="View details">
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
            <div class="product-card" data-aos="fade-up" data-aos-delay="200">
                <div class="product-image">
                    <img src="assets/images/banner-pills-2.png" alt="Peptizol">
                    <div class="product-overlay">
                        <button class="product-add-btn" aria-label="View details">
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
            <div class="product-card" data-aos="fade-up" data-aos-delay="300">
                <div class="product-image">
                    <img src="assets/images/banner-pills-1.png" alt="VILDACRAFT M">
                    <div class="product-overlay">
                        <button class="product-add-btn" aria-label="View details">
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
            <div class="product-card" data-aos="fade-up" data-aos-delay="400">
                <div class="product-image">
                    <img src="assets/images/banner-pills-2.png" alt="UPGRAD G">
                    <div class="product-overlay">
                        <button class="product-add-btn" aria-label="View details">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 5v14M5 12h14"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="product-info">
                    <h3>UPGRAD G</h3>
                    <p>Calcium And Vitamin D3 Tablets IP</p>
                </div>
            </div>
            <div class="product-card" data-aos="fade-up" data-aos-delay="500">
                <div class="product-image">
                    <img src="assets/images/banner-pills-1.png" alt="Sterocort">
                    <div class="product-overlay">
                        <button class="product-add-btn" aria-label="View details">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 5v14M5 12h14"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="product-info">
                    <h3>Sterocort</h3>
                    <p>Deflazacort Tablets 6 mg</p>
                </div>
            </div>
            <div class="product-card" data-aos="fade-up" data-aos-delay="600">
                <div class="product-image">
                    <img src="assets/images/banner-pills-2.png" alt="POLOBACT Injection">
                    <div class="product-overlay">
                        <button class="product-add-btn" aria-label="View details">
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
        </div>
    </div>
</section>

<?php include 'includes/cta-banner.php'; ?>
<?php include 'includes/footer.php'; ?>
