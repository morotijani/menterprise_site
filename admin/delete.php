<?php
session_start();
require_once __DIR__ . '/../includes/db.php';
if (!isset($_SESSION['user_id'])) { header('Location: login.php'); exit; }
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
if ($id) {
    $stmt = $mysqli->prepare("SELECT image FROM posts WHERE id = ? LIMIT 1");
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $r = $stmt->get_result()->fetch_assoc();
    if ($r && $r['image']) {
        @unlink(__DIR__ . '/../uploads/' . $r['image']);
    }
    $d = $mysqli->prepare("DELETE FROM posts WHERE id = ?");
    $d->bind_param('i', $id);
    $d->execute();
}
header('Location: posts.php'); exit;
