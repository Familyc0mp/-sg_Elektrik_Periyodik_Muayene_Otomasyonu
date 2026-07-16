<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (php_sapi_name() === 'cli') {
    $_SESSION['user_id'] = 2;
    $_SESSION['role'] = 'admin';
    $_SESSION['active_institution_id'] = getenv('ACTIVE_INSTITUTION_ID') ?: 1;
    if (getenv('REPORT_ID')) {
        $_GET['id'] = getenv('REPORT_ID');
    }
}

// --- Auto-login via JWT Token (for Android App WebView) ---
if (!isset($_SESSION['user_id'])) {
    $token = null;
    if (isset($_GET['token'])) {
        $token = $_GET['token'];
    } elseif (isset($_SERVER['HTTP_AUTHORIZATION'])) {
        if (preg_match('/Bearer\s(\S+)/', $_SERVER['HTTP_AUTHORIZATION'], $matches)) {
            $token = $matches[1];
        }
    }

    if ($token) {
        $configFile = __DIR__ . '/../api/config.php';
        $jwtFile = __DIR__ . '/../api/helpers/jwt.php';
        if (file_exists($configFile) && file_exists($jwtFile)) {
            require_once $configFile;
            require_once $jwtFile;
            $payload = jwtDecode($token);
            if ($payload) {
                $_SESSION['user_id'] = $payload['user_id'];
                $_SESSION['username'] = $payload['username'];
                $_SESSION['role'] = $payload['role'];
            }
        }
    }
}
// ---------------------------------------------------------

require_once __DIR__ . '/db.php';

function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

function requireLogin() {
    global $pdo;
    if (!isLoggedIn()) {
        header("Location: /login.php");
        exit;
    }
    
    // Validate that the user exists in the database to prevent foreign key errors with stale sessions
    try {
        $stmt = $pdo->prepare("SELECT id FROM users WHERE id = ?");
        $stmt->execute([$_SESSION['user_id']]);
        if (!$stmt->fetch()) {
            // Stale user session, destroy it and redirect to login
            $_SESSION = [];
            if (ini_get("session.use_cookies")) {
                $params = session_get_cookie_params();
                setcookie(session_name(), '', time() - 42000,
                    $params["path"], $params["domain"],
                    $params["secure"], $params["httponly"]
                );
            }
            if (session_status() === PHP_SESSION_ACTIVE) {
                session_destroy();
            }
            header("Location: /login.php");
            exit;
        }
    } catch (PDOException $e) {
        // If DB query fails, fallback to login
        header("Location: /login.php");
        exit;
    }
}

function isAdmin() {
    return isset($_SESSION['role']) && $_SESSION['role'] === 'admin';
}

function requireAdmin() {
    requireLogin();
    if (!isAdmin()) {
        die("Bu sayfayı görüntüleme yetkiniz yok.");
    }
}
?>
