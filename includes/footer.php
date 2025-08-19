<?php
// Include configuration for footer data
require_once 'config/config.php';

// Footer data
$courses = [
    'Bachelor in Civil Engineering',
    'Bachelor in Computer Engineering',
    'MSc in Construction Management',
    'MSc in Transportation Engineering & Management'
];

$quick_links = [
    'Alumni' => '#alumni',
    'Publication' => '#publication',
    'Library' => '#library',
    'Extra Curricular' => '#extra-curricular',
    'Career Counselling' => '#career-counselling'
];

$social_links = [
    'facebook' => '#',
    'twitter' => '#',
    'instagram' => '#',
    'linkedin' => '#'
];
?>

<footer class="bg-sidebar text-sidebar-foreground">
    <div class="container mx-auto px-4 py-12">
        <div class="grid md:grid-cols-4 gap-8">
            <!-- College Info -->
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <img src="<?php echo IMAGES_PATH; ?>uesc-logo.png" alt="UESC Logo" class="w-12 h-12 object-contain">
                    <div>
                        <h3 class="font-serif font-bold text-lg text-primary">UESC</h3>
                        <p class="text-xs text-muted-foreground">Engineering Excellence</p>
                    </div>
                </div>
                <p class="text-sm text-muted-foreground leading-relaxed">
                    Fostering higher education in Nepal with quality output since 2000 A.D.
                </p>
            </div>

            <!-- Courses -->
            <div>
                <h4 class="font-semibold mb-4 text-primary">Courses</h4>
                <ul class="space-y-2 text-sm text-muted-foreground">
                    <?php foreach ($courses as $course): ?>
                        <li><?php echo $course; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="font-semibold mb-4 text-primary">Quick Links</h4>
                <ul class="space-y-2 text-sm text-muted-foreground">
                    <?php foreach ($quick_links as $link_text => $link_url): ?>
                        <li>
                            <a href="<?php echo $link_url; ?>" class="hover-text-primary transition">
                                <?php echo $link_text; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h4 class="font-semibold mb-4 text-primary">Get in Touch</h4>
                <div class="space-y-3 text-sm">
                    <!-- Phone -->
                    <div class="flex items-start gap-2">
                        <!-- Converting React Lucide Phone icon to SVG -->
                        <svg class="h-4 w-4 text-primary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                        </svg>
                        <div>
                            <div><?php echo SITE_PHONE; ?>/5268592</div>
                            <div>+977 9869055176</div>
                        </div>
                    </div>
                    
                    <!-- Address -->
                    <div class="flex items-start gap-2">
                        <!-- Converting React Lucide MapPin icon to SVG -->
                        <svg class="h-4 w-4 text-primary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                        </svg>
                        <div><?php echo SITE_ADDRESS; ?></div>
                    </div>
                    
                    <!-- Email -->
                    <div class="flex items-center gap-2">
                        <!-- Converting React Lucide Mail icon to SVG -->
                        <svg class="h-4 w-4 text-primary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                        </svg>
                        <div><?php echo SITE_EMAIL; ?></div>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="mt-6">
                    <h5 class="font-semibold mb-3 text-primary">Follow Us</h5>
                    <div class="flex gap-3">
                        <!-- Converting React Lucide social icons to SVG -->
                        <a href="<?php echo $social_links['facebook']; ?>" class="social-icon">
                            <svg class="h-5 w-5 text-muted-foreground hover-text-primary cursor-pointer transition" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M20 10C20 4.477 15.523 0 10 0S0 4.477 0 10c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V10h2.54V7.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V10h2.773l-.443 2.89h-2.33v6.988C16.343 19.128 20 14.991 20 10z" clip-rule="evenodd"/>
                            </svg>
                        </a>
                        
                        <a href="<?php echo $social_links['twitter']; ?>" class="social-icon">
                            <svg class="h-5 w-5 text-muted-foreground hover-text-primary cursor-pointer transition" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"/>
                            </svg>
                        </a>
                        
                        <a href="<?php echo $social_links['instagram']; ?>" class="social-icon">
                            <svg class="h-5 w-5 text-muted-foreground hover-text-secondary cursor-pointer transition" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 0C4.477 0 0 4.477 0 10s4.477 10 10 10 10-4.477 10-10S15.523 0 10 0zm4.5 6.5h-9v7h9v-7zM10 7.5a2.5 2.5 0 100 5 2.5 2.5 0 000-5zm4.5-2.5a.5.5 0 11-1 0 .5.5 0 011 0z" clip-rule="evenodd"/>
                            </svg>
                        </a>
                        
                        <a href="<?php echo $social_links['linkedin']; ?>" class="social-icon">
                            <svg class="h-5 w-5 text-muted-foreground hover-text-primary cursor-pointer transition" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="border-t border-sidebar-border mt-8 pt-6 text-center text-sm text-muted-foreground">
            <p>© <?php echo date('Y'); ?> Universal Engineering & Science College | Powered by InGrails</p>
        </div>
    </div>
</footer>
