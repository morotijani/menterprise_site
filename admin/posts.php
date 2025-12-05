<?php
session_start();
require_once __DIR__ . '/../includes/db.php';
if (!isset($_SESSION['user_id'])) { header('Location: login.php'); exit; }
$posts = [];
$stmt = $mysqli->prepare("SELECT id, title, slug, created_at FROM posts ORDER BY created_at DESC");
$stmt->execute();
$res = $stmt->get_result();
while ($r = $res->fetch_assoc()) $posts[] = $r;
?>
<!doctype html>
<html><head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Manage Posts</title>
<link href="/assets/css/style.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head><body>
<div class="container py-4">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h3>Posts</h3>
    <div>
      <a class="btn btn-success" href="create.php">New Post</a>
      <a class="btn btn-outline-secondary" href="logout.php">Logout</a>
    </div>
  </div>
  <?php if (empty($posts)): ?>
    <div class="alert alert-info">No posts yet.</div>
  <?php else: ?>
    <table class="table table-striped">
      <thead><tr><th>Title</th><th>Slug</th><th>Created</th><th>Actions</th></tr></thead>
      <tbody>
        <?php foreach ($posts as $p): ?>
        <tr>
          <td><?php echo htmlspecialchars($p['title']); ?></td>
          <td><?php echo htmlspecialchars($p['slug']); ?></td>
          <td><?php echo htmlspecialchars($p['created_at']); ?></td>
          <td>
            <a class="btn btn-sm btn-primary" href="edit.php?id=<?php echo $p['id']; ?>">Edit</a>
            <a class="btn btn-sm btn-danger" href="delete.php?id=<?php echo $p['id']; ?>" onclick="return confirm('Delete this post?')">Delete</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  <?php endif; ?>
</div>
</body></html>
