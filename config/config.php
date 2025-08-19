<?php
// Database configuration (if needed later)
define('DB_HOST', 'localhost');
define('DB_NAME', 'uesc_website');
define('DB_USER', 'root');
define('DB_PASS', '');

// Site configuration
define('SITE_NAME', 'Universal Engineering & Science College');
define('SITE_URL', 'http://localhost/uesc');
define('SITE_EMAIL', 'info@uesc.edu.np');
define('SITE_PHONE', '+977-1-5268419');
define('SITE_ADDRESS', '137/20, Manido Marg, Chakupat, Ward 11, Lalitpur Metropolitan City, Nepal');

// Image paths
define('IMAGES_PATH', 'assets/images/');
define('UPLOADS_PATH', 'uploads/');

// Menu items configuration
$menu_items = [
    'About UESC' => [
        'Facts and Figure' => '#',
        'Policies' => '#',
        'IQAC' => [
            'RMC' => '#',
            'ECC' => '#'
        ],
        'Organizational Chart' => '#',
        'Board of Directors' => '#',
        'Advisory Board' => '#'
    ],
    'Academics' => [
        'Notifications' => '#',
        'Programs' => '#',
        'Faculty' => '#',
        'Departments' => [
            'Civil Engineering' => [
                'UG' => '#',
                'Graduate Construction Management' => '#',
                'Graduate Transportation Engineering and Management' => '#'
            ],
            'Computer Engineering' => '#'
        ],
        'Academic Calendar' => '#',
        'Examination' => '#',
        'Library' => '#'
    ],
    'Research & Publication' => [
        'Research Activities' => '#',
        'Publications' => '#',
        'Journals' => '#'
    ],
    'Students Development Programs' => [
        'Extra Curricular' => '#',
        'Sports' => '#',
        'Cultural Activities' => '#'
    ],
    'Career Support' => [
        'Career Counselling & Placements' => '#',
        'Student Support & Counselling' => '#',
        'Alumni' => '#'
    ],
    'News' => [
        'Latest News' => '#',
        'Announcements' => '#',
        'Press Releases' => '#'
    ],
    'Gallery' => '#',
    'Contact' => '#'
];

// Sample data for sections
$hero_slides = [
    [
        'image' => 'assets/images/hero-slide-1.jpg',
        'title' => 'Welcome to Universal Engineering & Science College',
        'subtitle' => 'Established in 2000 A.D. and located in Chakupat, Patan at the heart of Kathmandu Valley.',
        'button_text' => 'Learn More',
        'button_link' => '#about'
    ],
    [
        'image' => 'assets/images/hero-slide-2.jpg',
        'title' => 'Quality Engineering Education',
        'subtitle' => 'UESC runs B.E. Civil, B.E. Computer under the affiliation of Pokhara University.',
        'button_text' => 'Our Programs',
        'button_link' => '#programs'
    ],
    [
        'image' => 'assets/images/hero-slide-3.jpg',
        'title' => 'Fostering Higher Education in Nepal',
        'subtitle' => 'With the aim to foster higher education in Nepal with quality output.',
        'button_text' => 'Contact Us',
        'button_link' => '#contact'
    ]
];

$programs = [
    [
        'title' => 'Bachelor in Civil Engineering',
        'description' => 'Comprehensive civil engineering program focusing on construction, infrastructure, and sustainable development.',
        'image' => 'assets/images/civil-engineering.jpg',
        'link' => '#civil-engineering'
    ],
    [
        'title' => 'Bachelor in Computer Engineering',
        'description' => 'Modern computer engineering curriculum covering software development, hardware design, and emerging technologies.',
        'image' => 'assets/images/computer-engineering.jpg',
        'link' => '#computer-engineering'
    ],
    [
        'title' => 'MSc in Construction Management',
        'description' => 'Advanced graduate program in construction project management and leadership.',
        'image' => 'assets/images/construction-management.jpg',
        'link' => '#construction-management'
    ]
];

$latest_events = [
    [
        'title' => 'Student Leadership Election 2080',
        'date' => '23 Nov 2025',
        'image' => 'assets/images/student-election.jpg',
        'description' => 'Annual student leadership election for academic year 2080.'
    ],
    [
        'title' => 'Parents Seminar 2078',
        'date' => '23 Nov 2024',
        'image' => 'assets/images/parents-seminar.jpg',
        'description' => 'Interactive seminar for parents and guardians.'
    ]
];

$latest_news = [
    [
        'title' => 'New Computer Lab Inauguration',
        'date' => '15 Dec 2024',
        'image' => 'assets/images/computer-lab.jpg',
        'description' => 'State-of-the-art computer laboratory with latest technology equipment has been inaugurated for students.'
    ],
    [
        'title' => 'Industry Partnership Announcement',
        'date' => '10 Dec 2024',
        'image' => 'assets/images/partnership.jpg',
        'description' => 'UESC announces new partnerships with leading engineering firms for student internships and placements.'
    ],
    [
        'title' => 'Research Publication Achievement',
        'date' => '5 Dec 2024',
        'image' => 'assets/images/research.jpg',
        'description' => 'Faculty members publish groundbreaking research in international engineering journals.'
    ]
];
?>
