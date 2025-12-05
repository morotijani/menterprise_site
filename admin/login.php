<?php
session_start();
require_once __DIR__ . '/../includes/db.php';
if (isset($_SESSION['user_id'])) { header('Location: posts.php'); exit; }
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $u = $_POST['username'] ?? '';
    $p = $_POST['password'] ?? '';
    $stmt = $mysqli->prepare("SELECT id, password FROM users WHERE username = ? LIMIT 1");
    $stmt->bind_param('s', $u);
    $stmt->execute();
    $res = $stmt->get_result();
    $row = $res->fetch_assoc();
    if ($row && password_verify($p, $row['password'])) {
        $_SESSION['user_id'] = $row['id'];
        header('Location: posts.php'); exit;
    } else { $error = 'Invalid credentials'; }
}
?>
<!doctype html>
<html><head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Admin Login</title>
<link href="/assets/css/style.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head><body>
<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-5">
      <h3 class="mb-3">Admin Login</h3>
      <?php if ($error): ?><div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div><?php endif; ?>
      <form method="post">
        <div class="mb-2"><input name="username" class="form-control" placeholder="Username" required></div>
        <div class="mb-2"><input name="password" type="password" class="form-control" placeholder="Password" required></div>
        <div><button class="btn btn-primary">Login</button></div>
      </form>
    </div>
  </div>
</div>
</body></html>
