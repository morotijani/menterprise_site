<?php
// Run this once to create the database tables and an admin user.
// Use same credentials as includes/db.php - keep in sync if you change credentials there
$db_host = '127.0.0.1';
$db_user = 'root';
$db_pass = '';
$db_name = 'menterprise_db';

$c = new mysqli($db_host, $db_user, $db_pass);
if ($c->connect_errno) {
    echo "Could not connect to MySQL: " . $c->connect_error; exit;
}
$c->query("CREATE DATABASE IF NOT EXISTS `" . $db_name . "` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
$c->close();

require_once __DIR__ . '/includes/db.php';

// create tables
$queries = [
    "CREATE TABLE IF NOT EXISTS users (id INT AUTO_INCREMENT PRIMARY KEY, username VARCHAR(100) UNIQUE, password VARCHAR(255), created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP)",
    "CREATE TABLE IF NOT EXISTS posts (id INT AUTO_INCREMENT PRIMARY KEY, title VARCHAR(255), slug VARCHAR(255) UNIQUE, content TEXT, image VARCHAR(255), created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, updated_at TIMESTAMP NULL)",
];
foreach ($queries as $q) { $mysqli->query($q); }

// create admin if not exists
$admin = 'admin';
$pass = 'admin123';
$stmt = $mysqli->prepare("SELECT id FROM users WHERE username = ? LIMIT 1");
$stmt->bind_param('s', $admin);
$stmt->execute();
$res = $stmt->get_result();
if ($res->num_rows === 0) {
    $hash = password_hash($pass, PASSWORD_DEFAULT);
    $ins = $mysqli->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $ins->bind_param('ss', $admin, $hash);
    $ins->execute();
    echo "Admin user created: username=admin password=admin123<br>";
} else {
    echo "Admin user already exists.<br>";
}

echo "Setup complete. Please remove or protect setup.php after use.";
