<?php
// Programs data
$programs = [
    [
        'title' => 'BACHELOR IN CIVIL ENGINEERING',
        'icon' => 'building',
        'description' => 'Comprehensive civil engineering program focusing on infrastructure development and construction management.',
        'duration' => '4 Years',
        'affiliation' => 'Pokhara University'
    ],
    [
        'title' => 'BACHELOR IN COMPUTER ENGINEERING',
        'icon' => 'computer',
        'description' => 'Modern computer engineering curriculum covering software development, hardware systems, and emerging technologies.',
        'duration' => '4 Years',
        'affiliation' => 'Pokhara University'
    ],
    [
        'title' => 'MSc PROGRAMS',
        'icon' => 'graduation',
        'description' => 'Advanced postgraduate programs in Construction Management and Transportation Engineering & Management.',
        'duration' => '2 Years',
        'affiliation' => 'Pokhara University'
    ]
];
?>

<section id="academics" class="section py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="font-serif text-3xl md:text-4xl font-bold text-primary mb-4">ACADEMIC PROGRAMMES</h2>
            <p class="text-muted-foreground max-w-2xl mx-auto">
                Quality engineering education with modern curriculum and excellent faculty
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <?php foreach ($programs as $index => $program): ?>
                <div class="card hover-shadow-lg transition border-border">
                    <div class="card-header text-center pb-4">
                        <!-- Converting React Lucide icons to SVG icons -->
                        <div class="w-16 h-16 bg-secondary-10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <?php if ($program['icon'] === 'building'): ?>
                                <svg class="h-8 w-8 text-secondary" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-6a1 1 0 00-1-1H9a1 1 0 00-1 1v6a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z" clip-rule="evenodd"/>
                                </svg>
                            <?php elseif ($program['icon'] === 'computer'): ?>
                                <svg class="h-8 w-8 text-secondary" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M3 5a2 2 0 012-2h10a2 2 0 012 2v8a2 2 0 01-2 2h-2.22l.123.489.804.804A1 1 0 0113 18H7a1 1 0 01-.707-1.707l.804-.804L7.22 15H5a2 2 0 01-2-2V5zm5.771 7H5V5h10v7H8.771z" clip-rule="evenodd"/>
                                </svg>
                            <?php else: ?>
                                <svg class="h-8 w-8 text-secondary" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                                </svg>
                            <?php endif; ?>
                        </div>
                        <h3 class="font-serif text-lg text-primary"><?php echo $program['title']; ?></h3>
                    </div>
                    <div class="card-body text-center">
                        <p class="text-muted-foreground mb-4 text-sm leading-relaxed"><?php echo $program['description']; ?></p>
                        <div class="space-y-2 mb-6">
                            <div class="text-sm">
                                <span class="font-semibold">Duration:</span> <?php echo $program['duration']; ?>
                            </div>
                            <div class="text-sm">
                                <span class="font-semibold">Affiliation:</span> <?php echo $program['affiliation']; ?>
                            </div>
                        </div>
                        <a href="#program-<?php echo $index; ?>" class="btn btn-outline w-full">
                            See More →
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
