<?php
// Database connection - adjust credentials to your local setup
$db_host = '127.0.0.1';
$db_user = 'root';
$db_pass = '';
$db_name = 'menterprise_db';

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($mysqli->connect_errno) {
    http_response_code(500);
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    exit;
}

// simple helper for slug
function slugify($text) {
    $text = preg_replace('~[^\pL0-9]+~u', '-', $text);
    $text = trim($text, '-');
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    $text = strtolower($text);
    $text = preg_replace('~[^-a-z0-9]+~', '', $text);
    if (empty($text)) return 'n-a';
    return $text;
}

?>
