<?php
// Gallery images data
$gallery_images = [
    [
        'src' => IMAGES_PATH . 'engineering-students-computer-lab.png',
        'alt' => 'Computer Lab'
    ],
    [
        'src' => IMAGES_PATH . 'civil-engineering-fieldwork.png',
        'alt' => 'Civil Engineering Field Work'
    ],
    [
        'src' => IMAGES_PATH . 'graduation-ceremony.png',
        'alt' => 'Graduation Ceremony'
    ],
    [
        'src' => IMAGES_PATH . 'campus-building.png',
        'alt' => 'Campus Building'
    ],
    [
        'src' => IMAGES_PATH . 'engineering-workshop.png',
        'alt' => 'Engineering Workshop'
    ],
    [
        'src' => IMAGES_PATH . 'college-seminar-hall.png',
        'alt' => 'Seminar Hall'
    ]
];
?>

<section id="gallery" class="section py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="font-serif text-3xl md:text-4xl font-bold text-primary mb-4">GALLERY</h2>
            <p class="text-muted-foreground">Glimpses of campus life and academic activities</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            <?php foreach ($gallery_images as $index => $image): ?>
                <!-- Converting React group hover effects to PHP with CSS classes -->
                <div class="gallery-item relative overflow-hidden rounded-lg cursor-pointer">
                    <img
                        src="<?php echo $image['src']; ?>"
                        alt="<?php echo $image['alt']; ?>"
                        class="w-full h-48 object-cover transition img-responsive"
                    />
                    <div class="gallery-overlay absolute inset-0 bg-primary-60 opacity-0 transition flex items-center justify-center">
                        <span class="text-white font-semibold"><?php echo $image['alt']; ?></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-8">
            <a href="#all-gallery" class="text-accent hover-text-accent font-semibold">SEE MORE →</a>
        </div>
    </div>
</section>

<style>
/* Gallery hover effects */
.gallery-item:hover img {
    transform: scale(1.1);
}

.gallery-item:hover .gallery-overlay {
    opacity: 1;
}

.bg-primary-60 {
    background-color: rgba(0, 56, 147, 0.6);
}

.bg-secondary-10 {
    background-color: rgba(220, 20, 60, 0.1);
}

.bg-black-50 {
    background: linear-gradient(to top, rgba(0, 0, 0, 0.5), transparent);
}

.hover-shadow-lg:hover {
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
}

.hover-text-accent:hover {
    color: var(--accent);
}

.hover-text-primary:hover {
    color: var(--primary-blue);
}

.space-y-4 > * + * {
    margin-top: 1rem;
}

.space-y-2 > * + * {
    margin-top: 0.5rem;
}

.leading-relaxed {
    line-height: 1.625;
}

.max-w-2xl {
    max-width: 42rem;
}

.transition {
    transition: all 0.3s ease;
}
</style>
