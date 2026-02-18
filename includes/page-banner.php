<?php
$bannerImage = isset($pageBannerImage) ? $pageBannerImage : 'assets/images/banner-pills-1.png';
$bannerTitle = isset($pageBannerTitle) ? $pageBannerTitle : 'Page';
?>
<div class="page-banner" style="background-image: url('<?php echo htmlspecialchars($bannerImage); ?>');">
    <div class="page-banner-content">
        <h1 class="page-banner-title"><?php echo htmlspecialchars($bannerTitle); ?></h1>
    </div>
</div>
