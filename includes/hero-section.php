<?php
// Include configuration for hero slides
require_once 'config/config.php';
?>

<section class="hero relative overflow-hidden" style="height: 600px;">
    <?php foreach ($hero_slides as $index => $slide): ?>
        <div class="hero-slide absolute inset-0 transition-opacity duration-1000 <?php echo $index === 0 ? 'opacity-100' : 'opacity-0'; ?>" 
             style="background-image: url('<?php echo $slide['image']; ?>');">
            
            <!-- Background overlay -->
            <div class="hero-overlay absolute inset-0"></div>

            <!-- Converting React overlapping text content to PHP with backdrop blur effect -->
            <div class="hero-content relative h-full flex items-center">
                <div class="container mx-auto px-4">
                    <div class="max-w-3xl text-white">
                        <div class="bg-overlay backdrop-blur-sm rounded-lg p-8 border border-white-20">
                            <h1 class="font-serif text-4xl md:text-6xl font-bold mb-4 leading-tight">
                                <?php echo $slide['title']; ?>
                            </h1>
                            <h2 class="text-xl md:text-2xl font-semibold mb-6 text-white">
                                <?php echo $slide['subtitle']; ?>
                            </h2>
                            <p class="text-lg md:text-xl mb-8 leading-relaxed opacity-90">
                                <?php echo $slide['description']; ?>
                            </p>
                            <div class="flex flex-col sm:flex-row gap-4">
                                <a href="<?php echo $slide['button_link']; ?>" class="btn btn-secondary text-lg px-8 py-3">
                                    <?php echo $slide['button_text']; ?>
                                </a>
                                <a href="#enquiry" class="btn btn-outline-white text-lg px-8 py-3">
                                    Online Enquiry
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <!-- Converting React navigation arrows to PHP with SVG icons -->
    <button id="prev-slide" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white-20 hover-bg-white-30 backdrop-blur-sm rounded-full p-2 transition">
        <svg class="h-6 w-6 text-white" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"/>
        </svg>
    </button>
    <button id="next-slide" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white-20 hover-bg-white-30 backdrop-blur-sm rounded-full p-2 transition">
        <svg class="h-6 w-6 text-white" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
        </svg>
    </button>

    <!-- Converting React slide indicators to PHP -->
    <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex gap-2">
        <?php foreach ($hero_slides as $index => $slide): ?>
            <button class="slide-indicator w-3 h-3 rounded-full transition <?php echo $index === 0 ? 'bg-white' : 'bg-white-50'; ?>" 
                    data-slide="<?php echo $index; ?>">
            </button>
        <?php endforeach; ?>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('.hero-slide');
    const indicators = document.querySelectorAll('.slide-indicator');
    const prevBtn = document.getElementById('prev-slide');
    const nextBtn = document.getElementById('next-slide');
    let currentSlide = 0;
    const totalSlides = slides.length;

    function showSlide(index) {
        // Hide all slides
        slides.forEach((slide, i) => {
            if (i === index) {
                slide.style.opacity = '1';
                slide.style.zIndex = '1';
            } else {
                slide.style.opacity = '0';
                slide.style.zIndex = '0';
            }
        });

        // Update indicators
        indicators.forEach((indicator, i) => {
            if (i === index) {
                indicator.classList.remove('bg-white-50');
                indicator.classList.add('bg-white');
            } else {
                indicator.classList.remove('bg-white');
                indicator.classList.add('bg-white-50');
            }
        });
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        showSlide(currentSlide);
    }

    function prevSlide() {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        showSlide(currentSlide);
    }

    // Auto-advance slides every 5 seconds
    let autoSlideTimer = setInterval(nextSlide, 5000);

    // Navigation button event listeners
    if (nextBtn) {
        nextBtn.addEventListener('click', function() {
            clearInterval(autoSlideTimer);
            nextSlide();
            autoSlideTimer = setInterval(nextSlide, 5000);
        });
    }

    if (prevBtn) {
        prevBtn.addEventListener('click', function() {
            clearInterval(autoSlideTimer);
            prevSlide();
            autoSlideTimer = setInterval(nextSlide, 5000);
        });
    }

    // Indicator click event listeners
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', function() {
            clearInterval(autoSlideTimer);
            currentSlide = index;
            showSlide(currentSlide);
            autoSlideTimer = setInterval(nextSlide, 5000);
        });
    });

    // Initialize first slide
    showSlide(0);

    // Pause auto-slide on hover
    const heroSection = document.querySelector('.hero');
    if (heroSection) {
        heroSection.addEventListener('mouseenter', function() {
            clearInterval(autoSlideTimer);
        });

        heroSection.addEventListener('mouseleave', function() {
            autoSlideTimer = setInterval(nextSlide, 5000);
        });
    }
});
</script>
