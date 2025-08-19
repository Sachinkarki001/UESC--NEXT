<?php
// Include configuration
require_once 'config/config.php';
?>

<header class="bg-white border-b border-gray-200 relative z-50">
    <!-- Top contact bar -->
    <div class="bg-primary text-white py-2">
        <div class="container mx-auto px-4 flex flex-col sm:flex-row justify-between items-center text-sm">
            <div class="flex items-center gap-4 mb-2 sm:mb-0">
                <div class="flex items-center gap-1">
                    <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                    </svg>
                    <span><?php echo SITE_PHONE; ?> / +977-1-5268592</span>
                </div>
                <div class="flex items-center gap-1">
                    <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                    </svg>
                    <span><?php echo SITE_EMAIL; ?></span>
                </div>
            </div>
            <div class="flex items-center gap-1">
                <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                </svg>
                <span>Chakupat, Patan, Lalitpur</span>
            </div>
        </div>
    </div>

    <!-- Main navigation -->
    <nav class="container mx-auto py-4 px-4">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center gap-3 mr-2">
                <img src="<?php echo IMAGES_PATH; ?>uesc-logo.png" alt="UESC Logo" class="w-16 h-16 object-contain">
            </div>

            <!-- Desktop Navigation -->
            <div class="desktop-nav hidden lg:flex items-center gap-6">
                <?php foreach ($menu_items as $menu_title => $menu_items_array): ?>
                    <div class="dropdown relative">
                        <button class="flex items-center gap-1 text-foreground hover-text-primary transition py-2 nav-link">
                            <?php echo $menu_title; ?>
                            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                        </button>

                        <?php if (is_array($menu_items_array)): ?>
                            <div class="dropdown-menu absolute top-full left-0 bg-white shadow-lg border border-gray-200 rounded-lg py-2 min-w-64 z-50">
                                <?php foreach ($menu_items_array as $item_key => $item_value): ?>
                                    <?php if (is_string($item_value)): ?>
                                        <!-- Simple menu item -->
                                        <a href="<?php echo $item_value; ?>" class="dropdown-item block px-4 py-2 text-sm text-foreground hover-bg-muted hover-text-primary transition">
                                            <?php echo $item_key; ?>
                                        </a>
                                    <?php elseif (is_array($item_value)): ?>
                                        <!-- Submenu item -->
                                        <div class="dropdown relative">
                                            <button class="dropdown-item flex items-center justify-between w-full px-4 py-2 text-sm text-foreground hover-bg-muted hover-text-primary transition">
                                                <?php echo $item_key; ?>
                                                <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                                                </svg>
                                            </button>

                                            <div class="dropdown-menu absolute top-0 left-full bg-white shadow-lg border border-gray-200 rounded-lg py-2 min-w-48 z-50">
                                                <?php foreach ($item_value as $sub_key => $sub_value): ?>
                                                    <?php if (is_string($sub_value)): ?>
                                                        <a href="<?php echo $sub_value; ?>" class="dropdown-item block px-4 py-2 text-sm text-foreground hover-bg-muted hover-text-primary transition">
                                                            <?php echo $sub_key; ?>
                                                        </a>
                                                    <?php elseif (is_array($sub_value)): ?>
                                                        <!-- Nested submenu -->
                                                        <div class="dropdown relative">
                                                            <button class="dropdown-item flex items-center justify-between w-full px-4 py-2 text-sm text-foreground hover-bg-muted hover-text-primary transition">
                                                                <?php echo $sub_key; ?>
                                                                <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                                                                </svg>
                                                            </button>

                                                            <div class="dropdown-menu absolute top-0 left-full bg-white shadow-lg border border-gray-200 rounded-lg py-2 min-w-64 z-50">
                                                                <?php foreach ($sub_value as $nested_key => $nested_value): ?>
                                                                    <a href="<?php echo $nested_value; ?>" class="dropdown-item block px-4 py-2 text-sm text-foreground hover-bg-muted hover-text-primary transition">
                                                                        <?php echo $nested_key; ?>
                                                                    </a>
                                                                <?php endforeach; ?>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>

                <a href="#gallery" class="text-foreground hover-text-primary transition">
                    Online Admission
                </a>
                <a href="#apply" class="btn btn-secondary">
                    Apply Now
                </a>
            </div>

            <!-- Mobile menu button -->
            <button id="mobile-menu-btn" class="mobile-menu-btn lg:hidden flex items-center px-3 py-2 border rounded text-foreground border-gray-400 hover-text-primary hover-border-primary">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20">
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                </svg>
            </button>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="lg:hidden hidden mt-4">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white border border-gray-200 rounded-lg shadow-lg">
                <?php foreach ($menu_items as $menu_title => $menu_items_array): ?>
                    <div class="mobile-dropdown">
                        <button class="mobile-dropdown-btn w-full text-left px-3 py-2 text-base font-medium text-foreground hover-text-primary hover-bg-muted rounded-md transition flex items-center justify-between">
                            <?php echo $menu_title; ?>
                            <svg class="h-4 w-4 transform transition-transform" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                        </button>
                        
                        <?php if (is_array($menu_items_array)): ?>
                            <div class="mobile-dropdown-content hidden pl-4 space-y-1">
                                <?php foreach ($menu_items_array as $item_key => $item_value): ?>
                                    <?php if (is_string($item_value)): ?>
                                        <a href="<?php echo $item_value; ?>" class="block px-3 py-2 text-sm text-muted-foreground hover-text-primary hover-bg-muted rounded-md transition">
                                            <?php echo $item_key; ?>
                                        </a>
                                    <?php elseif (is_array($item_value)): ?>
                                        <div class="mobile-sub-dropdown">
                                            <button class="mobile-sub-dropdown-btn w-full text-left px-3 py-2 text-sm text-muted-foreground hover-text-primary hover-bg-muted rounded-md transition flex items-center justify-between">
                                                <?php echo $item_key; ?>
                                                <svg class="h-3 w-3 transform transition-transform" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                                </svg>
                                            </button>
                                            <div class="mobile-sub-dropdown-content hidden pl-4 space-y-1">
                                                <?php foreach ($item_value as $sub_key => $sub_value): ?>
                                                    <?php if (is_string($sub_value)): ?>
                                                        <a href="<?php echo $sub_value; ?>" class="block px-3 py-1 text-xs text-muted-foreground hover-text-primary hover-bg-muted rounded-md transition">
                                                            <?php echo $sub_key; ?>
                                                        </a>
                                                    <?php elseif (is_array($sub_value)): ?>
                                                        <div class="mobile-nested-dropdown">
                                                            <button class="mobile-nested-dropdown-btn w-full text-left px-3 py-1 text-xs text-muted-foreground hover-text-primary hover-bg-muted rounded-md transition flex items-center justify-between">
                                                                <?php echo $sub_key; ?>
                                                                <svg class="h-3 w-3 transform transition-transform" fill="currentColor" viewBox="0 0 20 20">
                                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                                                </svg>
                                                            </button>
                                                            <div class="mobile-nested-dropdown-content hidden pl-4 space-y-1">
                                                                <?php foreach ($sub_value as $nested_key => $nested_value): ?>
                                                                    <a href="<?php echo $nested_value; ?>" class="block px-3 py-1 text-xs text-muted-foreground hover-text-primary hover-bg-muted rounded-md transition">
                                                                        <?php echo $nested_key; ?>
                                                                    </a>
                                                                <?php endforeach; ?>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
                
                <a href="#gallery" class="block px-3 py-2 text-base font-medium text-foreground hover-text-primary hover-bg-muted rounded-md transition">
                    Online Admission
                </a>
                <a href="#apply" class="block px-3 py-2 text-base font-medium bg-secondary text-white hover-bg-secondary rounded-md transition text-center">
                    Apply Now
                </a>
            </div>
        </div>
    </nav>
</header>

<script>
// Mobile menu functionality
document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
    }

    // Mobile dropdown functionality
    const mobileDropdownBtns = document.querySelectorAll('.mobile-dropdown-btn');
    mobileDropdownBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const content = this.nextElementSibling;
            const icon = this.querySelector('svg');
            
            if (content) {
                content.classList.toggle('hidden');
                icon.classList.toggle('rotate-180');
            }
        });
    });

    // Mobile sub-dropdown functionality
    const mobileSubDropdownBtns = document.querySelectorAll('.mobile-sub-dropdown-btn');
    mobileSubDropdownBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const content = this.nextElementSibling;
            const icon = this.querySelector('svg');
            
            if (content) {
                content.classList.toggle('hidden');
                icon.classList.toggle('rotate-180');
            }
        });
    });

    // Mobile nested dropdown functionality
    const mobileNestedDropdownBtns = document.querySelectorAll('.mobile-nested-dropdown-btn');
    mobileNestedDropdownBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const content = this.nextElementSibling;
            const icon = this.querySelector('svg');
            
            if (content) {
                content.classList.toggle('hidden');
                icon.classList.toggle('rotate-180');
            }
        });
    });
});
</script>
