<section class="py-16 bg-accent/5">
    <div class="container mx-auto px-4">
        <div class="max-w-2xl mx-auto">
            <div class="bg-white border border-accent/20 rounded-lg shadow-sm">
                <div class="p-8">
                    <div class="grid md:grid-cols-2 gap-8 items-center">
                        <div>
                            <h3 class="font-serif text-2xl font-bold text-primary mb-4">SUBSCRIBE TO UESC'S NEWSLETTER</h3>
                            <p class="text-muted-foreground mb-6">
                                Stay updated with the latest news, events, and announcements from UESC.
                            </p>
                            <form method="POST" action="includes/newsletter-handler.php" class="flex gap-2">
                                <input 
                                    type="email" 
                                    name="email"
                                    placeholder="Enter Your Email" 
                                    class="flex-1 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                                    required
                                />
                                <button 
                                    type="submit"
                                    class="px-6 py-2 bg-primary text-white rounded-md hover:bg-primary/90 transition-colors"
                                >
                                    SUBSCRIBE
                                </button>
                            </form>
                        </div>
                        <div class="text-center">
                            <img
                                src="<?php echo IMAGES_PATH; ?>man-red-shirt-newsletter.png"
                                alt="Newsletter Signup"
                                class="w-48 h-48 mx-auto rounded-lg object-cover"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
