<?php
require_once '../config/config.php';
require_once 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        try {
            $db = new Database();
            $conn = $db->getConnection();
            
            // Check if email already exists
            $stmt = $conn->prepare("SELECT id FROM newsletter_subscribers WHERE email = ?");
            $stmt->execute([$email]);
            
            if ($stmt->rowCount() == 0) {
                // Insert new subscriber
                $stmt = $conn->prepare("INSERT INTO newsletter_subscribers (email, subscribed_at) VALUES (?, NOW())");
                $stmt->execute([$email]);
                
                $message = "Thank you for subscribing to our newsletter!";
                $type = "success";
            } else {
                $message = "You are already subscribed to our newsletter.";
                $type = "info";
            }
        } catch (Exception $e) {
            $message = "Sorry, there was an error processing your subscription. Please try again.";
            $type = "error";
        }
    } else {
        $message = "Please enter a valid email address.";
        $type = "error";
    }
    
    // Redirect back with message
    header("Location: ../index.php?newsletter=" . urlencode($type) . "&msg=" . urlencode($message) . "#newsletter");
    exit;
}

// If not POST request, redirect to home
header("Location: ../index.php");
exit;
?>
