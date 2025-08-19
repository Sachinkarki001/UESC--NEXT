<?php
// Utility functions for the website

// Get latest news from database
function getLatestNews($limit = 3) {
    try {
        $conn = getDBConnection();
        $stmt = $conn->prepare("SELECT * FROM news WHERE status = 'published' ORDER BY published_at DESC LIMIT ?");
        $stmt->execute([$limit]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        // Return fallback data if database is not available
        return [
            [
                'id' => 1,
                'title' => 'UESC Receives Excellence Award in Engineering Education',
                'excerpt' => 'Universal Engineering & Science College has been recognized for its outstanding contribution to engineering education in Nepal.',
                'published_at' => '2024-12-15',
                'featured_image' => 'assets/images/news-1.png'
            ],
            [
                'id' => 2,
                'title' => 'New Research Lab Inaugurated for Advanced Computing',
                'excerpt' => 'The college has inaugurated a state-of-the-art research laboratory equipped with latest computing facilities.',
                'published_at' => '2024-12-10',
                'featured_image' => 'assets/images/news-2.png'
            ],
            [
                'id' => 3,
                'title' => 'Industry Partnership Program Launched',
                'excerpt' => 'UESC announces new partnership program with leading engineering companies.',
                'published_at' => '2024-12-05',
                'featured_image' => 'assets/images/news-3.png'
            ]
        ];
    }
}

// Get latest events from database
function getLatestEvents($limit = 3) {
    try {
        $conn = getDBConnection();
        $stmt = $conn->prepare("SELECT * FROM events WHERE status = 'published' ORDER BY event_date DESC LIMIT ?");
        $stmt->execute([$limit]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        // Return fallback data if database is not available
        return [
            [
                'id' => 1,
                'title' => 'Student Leadership Election 2080',
                'description' => 'Annual student leadership election for academic year 2080',
                'event_date' => '2025-11-23',
                'featured_image' => 'assets/images/student-election.png'
            ],
            [
                'id' => 2,
                'title' => 'Parents Seminar 2078',
                'description' => 'Interactive seminar for parents and guardians',
                'event_date' => '2024-11-23',
                'featured_image' => 'assets/images/college-parents-meeting.png'
            ],
            [
                'id' => 3,
                'title' => 'Engineering Workshop',
                'description' => 'Hands-on engineering workshop for students',
                'event_date' => '2025-12-15',
                'featured_image' => 'assets/images/engineering-workshop.png'
            ]
        ];
    }
}

// Get gallery images from database
function getGalleryImages($limit = 6) {
    try {
        $conn = getDBConnection();
        $stmt = $conn->prepare("SELECT * FROM gallery WHERE status = 'active' ORDER BY sort_order ASC, created_at DESC LIMIT ?");
        $stmt->execute([$limit]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        // Return fallback data if database is not available
        return [
            ['image_path' => 'assets/images/engineering-students-computer-lab.png', 'alt_text' => 'Computer Lab'],
            ['image_path' => 'assets/images/civil-engineering-fieldwork.png', 'alt_text' => 'Civil Engineering Field Work'],
            ['image_path' => 'assets/images/graduation-ceremony.png', 'alt_text' => 'Graduation Ceremony'],
            ['image_path' => 'assets/images/campus-building.png', 'alt_text' => 'Campus Building'],
            ['image_path' => 'assets/images/engineering-workshop.png', 'alt_text' => 'Engineering Workshop'],
            ['image_path' => 'assets/images/college-seminar-hall.png', 'alt_text' => 'Seminar Hall']
        ];
    }
}

// Format date for display
function formatDate($date, $format = 'M d, Y') {
    return date($format, strtotime($date));
}

// Generate slug from title
function generateSlug($title) {
    $slug = strtolower(trim($title));
    $slug = preg_replace('/[^a-z0-9-]/', '-', $slug);
    $slug = preg_replace('/-+/', '-', $slug);
    return trim($slug, '-');
}

// Sanitize input
function sanitizeInput($input) {
    return htmlspecialchars(strip_tags(trim($input)));
}

// Check if user is admin
function isAdmin() {
    return isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true;
}
?>
