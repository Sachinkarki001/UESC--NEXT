<?php
$page_title = "Universal Engineering & Science College - UESC";
$page_description = "Established in 2000 A.D., UESC offers quality engineering education in Civil and Computer Engineering under Pokhara University affiliation.";

// Include necessary files
require_once 'config/config.php';
require_once 'includes/database.php';
require_once 'includes/functions.php';

$latest_news = getLatestNews(3);
$latest_events = getLatestEvents(3);
$gallery_images = getGalleryImages(6);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta name="generator" content="PHP">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
    
    <!-- JavaScript -->
    <script src="assets/js/main.js" defer></script>
</head>
<body>
    <main class="min-h-screen">
        <?php include 'includes/header.php'; ?>
        <?php include 'includes/hero-section.php'; ?>
        <?php include 'includes/about-section.php'; ?>
        <?php include 'includes/programs-section.php'; ?>
        <?php include 'includes/events-section.php'; ?>
        <?php include 'includes/news-section.php'; ?>
        <?php include 'includes/gallery-section.php'; ?>
        <?php include 'includes/contact-form.php'; ?>
        <?php include 'includes/footer.php'; ?>
    </main>
</body>
</html>
