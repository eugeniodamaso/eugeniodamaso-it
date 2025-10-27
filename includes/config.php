<?php
// Configuration File - Eugenio Damaso Website
// Realizzato e sviluppato da Eugenio Damaso
// Basato su framework Team Evoluto AI (6.0) © 2025

// Error Reporting (Development)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Site Configuration
define('SITE_NAME', 'Eugenio Damaso');
define('SITE_TITLE', 'Strategic Business Consultant & AI Innovation Expert');
define('SITE_URL', 'https://eugeniodamaso.it');
define('SITE_DESCRIPTION', 'Trasformo la Business Intelligence attraverso Frameworks AI Proprietari. Consulenza strategica in Cybersecurity, Analytics, Project Management.');
define('SITE_KEYWORDS', 'eugenio damaso, business consultant, ai framework, team evoluto ai, cybersecurity, business intelligence, project management, consulenza strategica');
define('SITE_AUTHOR', 'Eugenio Damaso');
define('SITE_EMAIL', 'eugenio.damaso01@gmail.com');

// Database Configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'eugeniodamaso_db');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHARSET', 'utf8mb4');

// Admin Configuration
define('ADMIN_USERNAME', 'admin');
define('ADMIN_EMAIL', 'eugenio.damaso01@gmail.com');

// Security Settings
define('SESSION_LIFETIME', 3600); // 1 hour
define('MAX_LOGIN_ATTEMPTS', 3);
define('LOCKOUT_TIME', 900); // 15 minutes

// File Upload Settings
define('MAX_FILE_SIZE', 5242880); // 5MB
define('ALLOWED_EXTENSIONS', 'jpg,jpeg,png,gif,webp,pdf,doc,docx');
define('UPLOAD_PATH', '/uploads/');

// SEO Settings
define('DEFAULT_OG_IMAGE', '/assets/images/og-default.jpg');
define('GOOGLE_ANALYTICS_ID', 'G-XXXXXXXXXX'); // Replace with your GA4 ID
define('GOOGLE_SITE_VERIFICATION', ''); // Google Search Console verification

// Social Media Links
define('LINKEDIN_URL', 'https://www.linkedin.com/in/eugenio-damaso-176476190');
define('GITHUB_URL', 'https://github.com/eugeniodamaso');

// Timezone
date_default_timezone_set('Europe/Rome');

// Start Session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
    
    // Session Security
    ini_set('session.cookie_httponly', 1);
    ini_set('session.cookie_secure', 1);
    ini_set('session.use_strict_mode', 1);
}

// Database Connection
try {
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET,
        DB_USER,
        DB_PASS,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ]
    );
} catch (PDOException $e) {
    // In production, log error instead of displaying
    die('Database connection failed: ' . $e->getMessage());
}

// Helper Functions
function sanitizeInput($input) {
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}

function generateCSRFToken() {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function validateCSRFToken($token) {
    return !empty($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

function isLoggedIn() {
    return isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true;
}

function requireLogin() {
    if (!isLoggedIn()) {
        header('Location: /admin/login.php');
        exit;
    }
}

function logActivity($action, $details = '') {
    global $pdo;
    
    try {
        $stmt = $pdo->prepare(
            "INSERT INTO activity_log (action, details, ip_address, user_agent, created_at) 
             VALUES (?, ?, ?, ?, NOW())"
        );
        
        $stmt->execute([
            $action,
            $details,
            $_SERVER['REMOTE_ADDR'] ?? '',
            $_SERVER['HTTP_USER_AGENT'] ?? ''
        ]);
    } catch (PDOException $e) {
        error_log('Failed to log activity: ' . $e->getMessage());
    }
}

// Security Headers
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: DENY');
header('X-XSS-Protection: 1; mode=block');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Permissions-Policy: geolocation=(), microphone=(), camera=()');

// Content Security Policy (adjust as needed)
header("Content-Security-Policy: default-src 'self'; script-src 'self' 'unsafe-inline' https://www.googletagmanager.com https://www.google-analytics.com; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com https://cdnjs.cloudflare.com; font-src 'self' https://fonts.gstatic.com https://cdnjs.cloudflare.com; img-src 'self' data: https:; connect-src 'self' https://www.google-analytics.com;");

?>