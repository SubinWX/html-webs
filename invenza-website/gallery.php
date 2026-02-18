<?php
$pageTitle = 'Gallery - Invenza';
$pageDescription = 'Explore our gallery showcasing our pharmaceutical facilities, research laboratories, and manufacturing processes.';
$pageBannerTitle = 'Our Gallery';
$pageBannerImage = 'assets/images/banner-slide-3.png';
include 'includes/header.php';
include 'includes/nav.php';
include 'includes/page-banner.php';
?>

<section>
    <div class="container">
        <h1 class="section-title">Our Gallery</h1>
        <p style="text-align: center; margin-bottom: 2rem; color: var(--text);">Explore our state-of-the-art facilities, research laboratories, and manufacturing processes that drive our commitment to pharmaceutical excellence.</p>
        
        <div class="gallery-grid" id="galleryGrid">
            <!-- AI images of medicine tablets -->
            <div class="gallery-item" data-index="0">
                <img src="assets/images/banner-pills-1.png" alt="Pharmaceutical tablets and capsules">
            </div>
            <div class="gallery-item" data-index="1">
                <img src="assets/images/banner-pills-2.png" alt="Medicine tablets in blister packs">
            </div>
            <div class="gallery-item" data-index="2">
                <img src="https://via.placeholder.com/400x400/1e5d3f/ffffff?text=Quality+Control" alt="Quality Control Lab">
            </div>
            <div class="gallery-item" data-index="3">
                <img src="https://via.placeholder.com/400x400/2d8659/ffffff?text=Pharmaceutical+Products" alt="Pharmaceutical Products">
            </div>
            <div class="gallery-item" data-index="4">
                <img src="https://via.placeholder.com/400x400/34ce57/ffffff?text=Research+Team" alt="Research Team">
            </div>
            <div class="gallery-item" data-index="5">
                <img src="https://via.placeholder.com/400x400/1e5d3f/ffffff?text=Lab+Equipment" alt="Laboratory Equipment">
            </div>
            <div class="gallery-item" data-index="6">
                <img src="https://via.placeholder.com/400x400/2d8659/ffffff?text=Production+Line" alt="Production Line">
            </div>
            <div class="gallery-item" data-index="7">
                <img src="https://via.placeholder.com/400x400/34ce57/ffffff?text=Packaging+Facility" alt="Packaging Facility">
            </div>
            <div class="gallery-item" data-index="8">
                <img src="https://via.placeholder.com/400x400/1e5d3f/ffffff?text=Medical+Research" alt="Medical Research">
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
