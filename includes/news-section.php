<?php
// Include news data from config
require_once 'config/config.php';
?>

<section class="section py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-primary mb-4">Latest News</h2>
            <div class="w-24 h-1 bg-secondary mx-auto"></div>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($latest_news as $news): ?>
                <div class="card overflow-hidden hover-shadow-lg transition bg-white border-0 shadow-md">
                    <div class="relative">
                        <img src="<?php echo $news['image']; ?>" alt="<?php echo $news['title']; ?>" class="w-full h-48 object-cover img-responsive">
                        <!-- Converting React absolute positioning to PHP -->
                        <div class="absolute top-4 right-4 bg-secondary text-white px-3 py-1 rounded-full text-sm font-medium">
                            <?php echo $news['date']; ?>
                        </div>
                    </div>
                    <div class="card-body p-6">
                        <h3 class="text-xl font-semibold text-primary mb-3"><?php echo $news['title']; ?></h3>
                        <p class="text-gray-600 text-sm leading-relaxed"><?php echo $news['description']; ?></p>
                        <div class="mt-4">
                            <a href="#news-<?php echo $news['title']; ?>" class="text-secondary font-medium text-sm hover-text-primary transition">
                                Read More →
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-8">
            <a href="#all-news" class="btn btn-primary">
                View All News
            </a>
        </div>
    </div>
</section>
