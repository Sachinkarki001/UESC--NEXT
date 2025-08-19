<?php
session_start();
require_once '../config/config.php';
require_once '../includes/database.php';

// Simple authentication (in production, use proper authentication)
if (!isset($_SESSION['admin_logged_in'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        // Simple hardcoded admin credentials (change in production)
        if ($username === 'admin' && $password === 'uesc2024') {
            $_SESSION['admin_logged_in'] = true;
            header('Location: index.php');
            exit;
        } else {
            $login_error = "Invalid credentials";
        }
    }
    
    // Show login form
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>UESC Admin Login</title>
        <link rel="stylesheet" href="../assets/css/style.css">
    </head>
    <body class="bg-muted min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full">
            <div class="text-center mb-6">
                <h1 class="text-2xl font-bold text-primary">UESC Admin</h1>
                <p class="text-muted-foreground">Please login to continue</p>
            </div>
            
            <?php if (isset($login_error)): ?>
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    <?php echo $login_error; ?>
                </div>
            <?php endif; ?>
            
            <form method="POST">
                <div class="mb-4">
                    <label for="username" class="block text-sm font-medium text-foreground mb-2">Username</label>
                    <input type="text" id="username" name="username" required 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                </div>
                
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-foreground mb-2">Password</label>
                    <input type="password" id="password" name="password" required 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                </div>
                
                <button type="submit" name="login" class="btn btn-primary w-full">
                    Login
                </button>
            </form>
        </div>
    </body>
    </html>
    <?php
    exit;
}

// Admin dashboard
$conn = getDBConnection();

// Get statistics
$stats = [];
try {
    $stmt = $conn->query("SELECT COUNT(*) as count FROM contact_inquiries");
    $stats['inquiries'] = $stmt->fetch()['count'];
} catch (Exception $e) {
    $stats['inquiries'] = 0;
}

try {
    $stmt = $conn->query("SELECT COUNT(*) as count FROM news WHERE status = 'published'");
    $stats['news'] = $stmt->fetch()['count'];
} catch (Exception $e) {
    $stats['news'] = 0;
}

try {
    $stmt = $conn->query("SELECT COUNT(*) as count FROM events WHERE status = 'published'");
    $stats['events'] = $stmt->fetch()['count'];
} catch (Exception $e) {
    $stats['events'] = 0;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UESC Admin Dashboard</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/components.css">
</head>
<body class="bg-muted">
    <div class="min-h-screen">
        <!-- Admin Header -->
        <header class="bg-primary text-white p-4">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-xl font-bold">UESC Admin Dashboard</h1>
                <div class="flex items-center gap-4">
                    <span>Welcome, Admin</span>
                    <a href="logout.php" class="btn btn-secondary btn-sm">Logout</a>
                </div>
            </div>
        </header>

        <div class="container mx-auto p-6">
            <!-- Statistics Cards -->
            <div class="grid md:grid-cols-3 gap-6 mb-8">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="text-2xl font-bold text-primary"><?php echo $stats['inquiries']; ?></h3>
                        <p class="text-muted-foreground">Contact Inquiries</p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="text-2xl font-bold text-primary"><?php echo $stats['news']; ?></h3>
                        <p class="text-muted-foreground">Published News</p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="text-2xl font-bold text-primary"><?php echo $stats['events']; ?></h3>
                        <p class="text-muted-foreground">Published Events</p>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
                <a href="inquiries.php" class="card hover-shadow-lg transition">
                    <div class="card-body text-center">
                        <h4 class="font-semibold text-primary mb-2">Manage Inquiries</h4>
                        <p class="text-sm text-muted-foreground">View and respond to contact inquiries</p>
                    </div>
                </a>
                
                <a href="news.php" class="card hover-shadow-lg transition">
                    <div class="card-body text-center">
                        <h4 class="font-semibold text-primary mb-2">Manage News</h4>
                        <p class="text-sm text-muted-foreground">Add, edit, and publish news articles</p>
                    </div>
                </a>
                
                <a href="events.php" class="card hover-shadow-lg transition">
                    <div class="card-body text-center">
                        <h4 class="font-semibold text-primary mb-2">Manage Events</h4>
                        <p class="text-sm text-muted-foreground">Create and manage college events</p>
                    </div>
                </a>
                
                <a href="gallery.php" class="card hover-shadow-lg transition">
                    <div class="card-body text-center">
                        <h4 class="font-semibold text-primary mb-2">Manage Gallery</h4>
                        <p class="text-sm text-muted-foreground">Upload and organize gallery images</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</body>
</html>
