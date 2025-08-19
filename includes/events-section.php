<?php
// Events data
$events = [
    [
        'title' => 'Student Leadership Election 2080',
        'date' => '23 Nov 2025',
        'icon' => 'users',
        'description' => 'Annual student leadership election for academic year 2080',
        'image' => IMAGES_PATH . 'student-election.png'
    ],
    [
        'title' => 'Parents Seminar 2078',
        'date' => '23 Nov 2024',
        'icon' => 'award',
        'description' => 'Interactive seminar for parents and guardians',
        'image' => IMAGES_PATH . 'college-parents-meeting.png'
    ],
    [
        'title' => 'Engineering Workshop',
        'date' => '15 Dec 2025',
        'icon' => 'calendar',
        'description' => 'Hands-on engineering workshop for students',
        'image' => IMAGES_PATH . 'engineering-workshop.png'
    ]
];
?>

<section id="events" class="section py-16 bg-muted">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="font-serif text-3xl md:text-4xl font-bold text-primary mb-4">LATEST EVENTS</h2>
            <p class="text-muted-foreground">Stay updated with our college activities and programs</p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            <?php foreach ($events as $index => $event): ?>
                <div class="card hover-shadow-lg transition overflow-hidden">
                    <!-- Converting React background image style to PHP -->
                    <div class="h-48 bg-cover bg-center relative" style="background-image: url('<?php echo $event['image']; ?>');">
                        <div class="h-full bg-gradient-to-t from-black-50 to-transparent flex items-end p-4">
                            <div class="text-white text-sm font-medium"><?php echo $event['date']; ?></div>
                        </div>
                    </div>
                    <div class="card-header pb-3">
                        <div class="flex items-center gap-3 mb-2">
                            <div class="w-10 h-10 bg-secondary-10 rounded-full flex items-center justify-center">
                                <!-- Converting React Lucide icons to SVG -->
                                <?php if ($event['icon'] === 'users'): ?>
                                    <svg class="h-5 w-5 text-secondary" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
                                    </svg>
                                <?php elseif ($event['icon'] === 'award'): ?>
                                    <svg class="h-5 w-5 text-secondary" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5 2a1 1 0 011 1v1h1a1 1 0 010 2H6v1a1 1 0 01-2 0V6H3a1 1 0 010-2h1V3a1 1 0 011-1zm0 10a1 1 0 011 1v1h1a1 1 0 110 2H6v1a1 1 0 11-2 0v-1H3a1 1 0 110-2h1v-1a1 1 0 011-1zM12 2a1 1 0 01.967.744L14.146 7.2 17.5 9.134a1 1 0 010 1.732L14.146 12.8l-1.179 4.456a1 1 0 01-1.856.048l-1.85-3.7-1.85 3.7a1 1 0 01-1.856-.048L5.854 12.8 2.5 10.866a1 1 0 010-1.732L5.854 7.2l1.179-4.456A1 1 0 018 2h4z" clip-rule="evenodd"/>
                                    </svg>
                                <?php else: ?>
                                    <svg class="h-5 w-5 text-secondary" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                                    </svg>
                                <?php endif; ?>
                            </div>
                        </div>
                        <h3 class="text-lg font-semibold text-primary"><?php echo $event['title']; ?></h3>
                    </div>
                    <div class="card-body">
                        <p class="text-muted-foreground text-sm mb-4"><?php echo $event['description']; ?></p>
                        <a href="#event-<?php echo $index; ?>" class="btn btn-outline btn-sm">
                            Learn More
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-8">
            <a href="#all-events" class="btn btn-secondary">VIEW ALL EVENTS</a>
        </div>
    </div>
</section>
