// Banner Slider (home page only)
document.addEventListener('DOMContentLoaded', function() {
    const bannerSliderInner = document.querySelector('.banner-slider-inner');
    const bannerSliderDots = document.getElementById('bannerSliderDots');
    const bannerSlider = document.querySelector('.banner-slider');
    const bannerSliderContent = document.querySelector('.banner-slider-content');
    const bannerProgressFill = document.querySelector('.banner-slider-progress-fill');

    if (bannerSliderInner && bannerSliderDots) {
        const slides = bannerSliderInner.querySelectorAll('.slide');
        const totalSlides = slides.length;
        let bannerCurrentIndex = 0;
        let bannerInterval;
        let slideDirection = 'next';

        function goToBannerSlide(index, direction = 'next') {
            const prevIndex = bannerCurrentIndex;
            bannerCurrentIndex = (index + totalSlides) % totalSlides;
            slideDirection = direction;

            // Update slide classes with direction
            slides.forEach((s, i) => {
                s.classList.remove('active', 'prev-slide');
                if (i === bannerCurrentIndex) {
                    s.classList.add('active');
                } else if (i === prevIndex) {
                    s.classList.add('prev-slide');
                }
            });

            // Update dots
            const dots = bannerSliderDots.querySelectorAll('.dot');
            dots.forEach((d, i) => d.classList.toggle('active', i === bannerCurrentIndex));

            // Reset progress bar animation
            if (bannerProgressFill) {
                bannerProgressFill.style.animation = 'none';
                setTimeout(() => {
                    bannerProgressFill.style.animation = 'progressFill 5s linear infinite';
                }, 10);
            }
        }

        // Create dots
        for (let i = 0; i < totalSlides; i++) {
            const dot = document.createElement('button');
            dot.type = 'button';
            dot.className = 'dot' + (i === 0 ? ' active' : '');
            dot.setAttribute('aria-label', 'Slide ' + (i + 1));
            dot.addEventListener('click', () => {
                const direction = i > bannerCurrentIndex ? 'next' : 'prev';
                goToBannerSlide(i, direction);
                resetBannerInterval();
            });
            bannerSliderDots.appendChild(dot);
        }

        function nextBannerSlide() {
            goToBannerSlide(bannerCurrentIndex + 1, 'next');
        }

        function resetBannerInterval() {
            clearInterval(bannerInterval);
            bannerInterval = setInterval(nextBannerSlide, 5000);
        }

        // Pause on hover
        if (bannerSlider) {
            bannerSlider.addEventListener('mouseenter', () => {
                clearInterval(bannerInterval);
                if (bannerProgressFill) {
                    bannerProgressFill.style.animationPlayState = 'paused';
                }
            });

            bannerSlider.addEventListener('mouseleave', () => {
                resetBannerInterval();
                if (bannerProgressFill) {
                    bannerProgressFill.style.animationPlayState = 'running';
                }
            });
        }

        // Start auto-advance (auto-play)
        bannerInterval = setInterval(nextBannerSlide, 5000);
    }

    // Testimonials Slider
    const testimonialsTrack = document.querySelector('.testimonials-track');
    const testimonialsDotsEl = document.getElementById('testimonialsDots');
    if (testimonialsTrack && testimonialsDotsEl) {
        const cards = testimonialsTrack.querySelectorAll('.testimonial-card');
        const total = cards.length;
        let testimonialIndex = 0;
        let testimonialInterval;

        function goToTestimonial(index) {
            testimonialIndex = (index + total) % total;
            testimonialsTrack.style.transform = 'translateX(-' + testimonialIndex * 100 + '%)';
            cards.forEach(c => c.classList.remove('active'));
            cards[testimonialIndex].classList.add('active');
            const dots = testimonialsDotsEl.querySelectorAll('.dot');
            dots.forEach((d, i) => d.classList.toggle('active', i === testimonialIndex));
        }

        for (let i = 0; i < total; i++) {
            const dot = document.createElement('button');
            dot.type = 'button';
            dot.className = 'dot' + (i === 0 ? ' active' : '');
            dot.setAttribute('aria-label', 'Testimonial ' + (i + 1));
            dot.addEventListener('click', () => {
                goToTestimonial(i);
                clearInterval(testimonialInterval);
                testimonialInterval = setInterval(() => goToTestimonial(testimonialIndex + 1), 6000);
            });
            testimonialsDotsEl.appendChild(dot);
        }

        testimonialInterval = setInterval(() => goToTestimonial(testimonialIndex + 1), 6000);
    }
});

// Scroll-reveal (Intersection Observer)
const revealTargets = document.querySelectorAll('.section-title, .card-grid, .about-content, .stats-grid, .contact-container, .gallery-grid, .cta-section, .testimonials-slider-wrapper');
if (revealTargets.length && 'IntersectionObserver' in window) {
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { rootMargin: '0px 0px -40px 0px', threshold: 0.1 });
    revealTargets.forEach(el => revealObserver.observe(el));
}

// Mobile Menu Toggle
const hamburger = document.getElementById('hamburger');
const navMenu = document.getElementById('navMenu');

if (hamburger && navMenu) {
    hamburger.addEventListener('click', () => {
        const isActive = navMenu.classList.toggle('active');
        hamburger.classList.toggle('active');
        
        // Toggle body overflow
        if (isActive) {
            document.body.classList.add('menu-open');
        } else {
            document.body.classList.remove('menu-open');
        }
    });

    // Close menu when clicking on a link
    const navLinks = navMenu.querySelectorAll('a');
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            navMenu.classList.remove('active');
            hamburger.classList.remove('active');
            document.body.classList.remove('menu-open');
        });
    });

    // Close menu when clicking outside
    document.addEventListener('click', (e) => {
        if (!hamburger.contains(e.target) && !navMenu.contains(e.target)) {
            navMenu.classList.remove('active');
            hamburger.classList.remove('active');
            document.body.classList.remove('menu-open');
        }
    });
}

// Form Validation
const contactForm = document.getElementById('contactForm');
if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const phone = document.getElementById('phone').value.trim();
        const message = document.getElementById('message').value.trim();

        let isValid = true;
        let errorMessage = '';

        // Validate name
        if (name === '') {
            isValid = false;
            errorMessage += 'Name is required.\n';
        }

        // Validate email
        if (email === '') {
            isValid = false;
            errorMessage += 'Email is required.\n';
        } else {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                isValid = false;
                errorMessage += 'Please enter a valid email address.\n';
            }
        }

        // Validate phone
        if (phone === '') {
            isValid = false;
            errorMessage += 'Phone number is required.\n';
        }

        // Validate message
        if (message === '') {
            isValid = false;
            errorMessage += 'Message is required.\n';
        }

        if (!isValid) {
            e.preventDefault();
            alert(errorMessage);
            return false;
        }
    });
}

// Gallery Lightbox
const galleryItems = document.querySelectorAll('.gallery-item');
const lightbox = document.getElementById('lightbox');
const lightboxImage = document.getElementById('lightboxImage');
const lightboxClose = document.getElementById('lightboxClose');
const lightboxPrev = document.getElementById('lightboxPrev');
const lightboxNext = document.getElementById('lightboxNext');

let currentImageIndex = 0;
const images = galleryItems.length ? Array.from(galleryItems).map(item => ({
    src: item.querySelector('img').src,
    alt: item.querySelector('img').alt
})) : [];

// Open lightbox
galleryItems.forEach((item, index) => {
    item.addEventListener('click', () => {
        currentImageIndex = index;
        updateLightboxImage();
        lightbox.classList.add('active');
        document.body.style.overflow = 'hidden';
    });
});

// Close lightbox
if (lightboxClose) {
    lightboxClose.addEventListener('click', closeLightbox);
}

if (lightbox) {
    lightbox.addEventListener('click', (e) => {
        if (e.target === lightbox) {
            closeLightbox();
        }
    });
}

// Keyboard navigation
document.addEventListener('keydown', (e) => {
    if (lightbox && lightbox.classList.contains('active')) {
        if (e.key === 'Escape') {
            closeLightbox();
        } else if (e.key === 'ArrowLeft') {
            prevImage();
        } else if (e.key === 'ArrowRight') {
            nextImage();
        }
    }
});

// Navigation buttons
if (lightboxPrev) {
    lightboxPrev.addEventListener('click', (e) => {
        e.stopPropagation();
        prevImage();
    });
}

if (lightboxNext) {
    lightboxNext.addEventListener('click', (e) => {
        e.stopPropagation();
        nextImage();
    });
}

function updateLightboxImage() {
    if (lightboxImage && images[currentImageIndex]) {
        lightboxImage.src = images[currentImageIndex].src;
        lightboxImage.alt = images[currentImageIndex].alt;
    }
}

function prevImage() {
    currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
    updateLightboxImage();
}

function nextImage() {
    currentImageIndex = (currentImageIndex + 1) % images.length;
    updateLightboxImage();
}

function closeLightbox() {
    if (lightbox) {
        lightbox.classList.remove('active');
        document.body.style.overflow = '';
    }
}

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        const href = this.getAttribute('href');
        if (href !== '#' && href.length > 1) {
            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        }
    });
});

// Scroll to top button
const scrollToTopBtn = document.getElementById('scrollToTop');
if (scrollToTopBtn) {
    window.addEventListener('scroll', () => {
        if (window.pageYOffset > 300) {
            scrollToTopBtn.classList.add('visible');
        } else {
            scrollToTopBtn.classList.remove('visible');
        }
    });

    scrollToTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

// Products Slider (homepage)
document.addEventListener('DOMContentLoaded', function() {
    const productsSliderTrack = document.getElementById('productsSliderTrack');
    const productsSliderPrev = document.getElementById('productsSliderPrev');
    const productsSliderNext = document.getElementById('productsSliderNext');

    if (productsSliderTrack && productsSliderPrev && productsSliderNext) {
        const productCards = productsSliderTrack.querySelectorAll('.product-card');
        let currentProductIndex = 0;
        const visibleProducts = 4;
        const totalProducts = productCards.length;

        function getCardWidth() {
            if (productCards.length === 0) return 0;
            const firstCard = productCards[0];
            const trackStyle = window.getComputedStyle(productsSliderTrack);
            const cardWidth = firstCard.offsetWidth;
            // Get gap from CSS (2rem = 32px)
            const gap = parseFloat(trackStyle.gap) || 32;
            return cardWidth + gap;
        }

        function updateProductsSlider() {
            const cardWidth = getCardWidth();
            const maxIndex = Math.max(0, totalProducts - visibleProducts);
            const translateX = -currentProductIndex * cardWidth;
            
            productsSliderTrack.style.transform = `translateX(${translateX}px)`;
            
            // Update button states
            if (currentProductIndex > 0) {
                productsSliderPrev.style.opacity = '1';
                productsSliderPrev.style.pointerEvents = 'auto';
                productsSliderPrev.style.cursor = 'pointer';
            } else {
                productsSliderPrev.style.opacity = '0.5';
                productsSliderPrev.style.pointerEvents = 'none';
                productsSliderPrev.style.cursor = 'not-allowed';
            }
            
            if (currentProductIndex < maxIndex && totalProducts > visibleProducts) {
                productsSliderNext.style.opacity = '1';
                productsSliderNext.style.pointerEvents = 'auto';
                productsSliderNext.style.cursor = 'pointer';
            } else {
                productsSliderNext.style.opacity = '0.5';
                productsSliderNext.style.pointerEvents = 'none';
                productsSliderNext.style.cursor = 'not-allowed';
            }
        }

        productsSliderPrev.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            if (currentProductIndex > 0) {
                currentProductIndex--;
                updateProductsSlider();
            }
        });

        productsSliderNext.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            const maxIndex = Math.max(0, totalProducts - visibleProducts);
            if (currentProductIndex < maxIndex && totalProducts > visibleProducts) {
                currentProductIndex++;
                updateProductsSlider();
            }
        });

        // Handle window resize
        let resizeTimer;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(() => {
                updateProductsSlider();
            }, 250);
        });

        // Initialize slider
        const initProductsSlider = () => {
            updateProductsSlider();
        };

        // Initialize after a short delay to ensure layout is calculated
        setTimeout(initProductsSlider, 100);
    }
});
