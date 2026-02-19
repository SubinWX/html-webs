<?php
$pageTitle = 'Gallery - Invenza';
$pageDescription = 'View Invenza Life Sciences gallery: pharmaceutical facilities, quality control labs, manufacturing, and product imagery. See how we deliver quality medicines.';
$pageBannerTitle = 'Our Gallery';
$pageBannerImage = 'assets/images/banner-slide-3.png';
include 'includes/header.php';
include 'includes/nav.php';
include 'includes/page-banner.php';
?>

<section>
    <div class="container">
        <h1 class="section-title">Our Gallery</h1>
        <p style="text-align: center; margin-bottom: 2rem; color: var(--text); max-width: 720px; margin-left: auto; margin-right: auto;">Discover Invenza’s facilities, quality control labs, and manufacturing processes. Our gallery highlights the standards and practices behind our pharmaceutical products and commitment to healthcare excellence.</p>
        
        <div class="gallery-grid" id="galleryGrid">
            <div class="gallery-item" data-index="0">
                <img src="assets/images/gallery-1.png" alt="Pharmaceutical tablets and capsules">
            </div>
            <div class="gallery-item" data-index="1">
                <img src="assets/images/gallery-2.png" alt="Pharmaceutical pills and capsules">
            </div>
            <div class="gallery-item" data-index="2">
                <img src="assets/images/gallery-3.png" alt="Pharmaceutical blister packs">
            </div>
            <div class="gallery-item" data-index="3">
                <img src="assets/images/gallery-4.png" alt="Pharmaceutical tablets">
            </div>
            <div class="gallery-item" data-index="4">
                <img src="assets/images/gallery-5.png" alt="Pharmaceutical blister pack">
            </div>
            <div class="gallery-item" data-index="5">
                <img src="assets/images/gallery-6.png" alt="Pharmaceutical pills and capsules collection">
            </div>
        </div>
    </div>
</section>

<!-- Lightbox -->
<div class="lightbox" id="lightbox">
    <button class="lightbox-close" id="lightboxClose">&times;</button>
    <button class="lightbox-nav lightbox-prev" id="lightboxPrev">‹</button>
    <div class="lightbox-content">
        <img id="lightboxImage" src="" alt="">
    </div>
    <button class="lightbox-nav lightbox-next" id="lightboxNext">›</button>
</div>

<?php include 'includes/cta-banner.php'; ?>
<?php include 'includes/footer.php'; ?>
