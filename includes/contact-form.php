<?php
// Contact form handling
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_form'])) {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    
    $errors = [];
    
    // Validation
    if (empty($name)) {
        $errors[] = "Name is required";
    }
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid email is required";
    }
    
    if (empty($message)) {
        $errors[] = "Message is required";
    }
    
    if (empty($errors)) {
        try {
            $conn = getDBConnection();
            $stmt = $conn->prepare("INSERT INTO contact_inquiries (name, email, phone, subject, message, created_at) VALUES (?, ?, ?, ?, ?, NOW())");
            $stmt->execute([$name, $email, $phone, $subject, $message]);
            
            $success_message = "Thank you for your inquiry. We will get back to you soon!";
            
            // Send email notification (optional)
            $to = SITE_EMAIL;
            $email_subject = "New Contact Inquiry from " . $name;
            $email_body = "Name: $name\nEmail: $email\nPhone: $phone\nSubject: $subject\n\nMessage:\n$message";
            $headers = "From: $email\r\nReply-To: $email\r\n";
            
            mail($to, $email_subject, $email_body, $headers);
            
        } catch (Exception $e) {
            $errors[] = "There was an error processing your request. Please try again.";
        }
    }
}
?>

<!-- Contact Form HTML -->
<section id="contact" class="section py-16 bg-muted">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="font-serif text-3xl md:text-4xl font-bold text-primary mb-4">ONLINE ENQUIRY</h2>
            <p class="text-muted-foreground">Get in touch with us for admissions and general inquiries</p>
        </div>

        <div class="max-w-2xl mx-auto">
            <?php if (isset($success_message)): ?>
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                    <?php echo $success_message; ?>
                </div>
            <?php endif; ?>

            <?php if (!empty($errors)): ?>
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li><?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <form method="POST" class="space-y-6">
                <input type="hidden" name="contact_form" value="1">
                
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-foreground mb-2">Full Name *</label>
                        <input type="text" id="name" name="name" required 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                               value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
                    </div>
                    
                    <div>
                        <label for="email" class="block text-sm font-medium text-foreground mb-2">Email Address *</label>
                        <input type="email" id="email" name="email" required 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                               value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="phone" class="block text-sm font-medium text-foreground mb-2">Phone Number</label>
                        <input type="tel" id="phone" name="phone" 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                               value="<?php echo isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : ''; ?>">
                    </div>
                    
                    <div>
                        <label for="subject" class="block text-sm font-medium text-foreground mb-2">Subject</label>
                        <select id="subject" name="subject" 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                            <option value="">Select Subject</option>
                            <option value="Admission Inquiry" <?php echo (isset($_POST['subject']) && $_POST['subject'] == 'Admission Inquiry') ? 'selected' : ''; ?>>Admission Inquiry</option>
                            <option value="Course Information" <?php echo (isset($_POST['subject']) && $_POST['subject'] == 'Course Information') ? 'selected' : ''; ?>>Course Information</option>
                            <option value="General Inquiry" <?php echo (isset($_POST['subject']) && $_POST['subject'] == 'General Inquiry') ? 'selected' : ''; ?>>General Inquiry</option>
                            <option value="Other" <?php echo (isset($_POST['subject']) && $_POST['subject'] == 'Other') ? 'selected' : ''; ?>>Other</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label for="message" class="block text-sm font-medium text-foreground mb-2">Message *</label>
                    <textarea id="message" name="message" rows="5" required 
                              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                              placeholder="Please describe your inquiry..."><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary px-8 py-3">
                        Send Message
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
