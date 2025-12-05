<?php
require_once __DIR__ . '/includes/db.php';
$posts = [];
$stmt = $mysqli->prepare("SELECT id, title, slug, content, image, created_at FROM posts ORDER BY created_at DESC");
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) { $posts[] = $row; }
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>News - Menterprise</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
<?php include 'includes/header.php'; ?>
<main class="container my-5">
  <h1 class="mb-4">News &amp; Updates</h1>
  <div class="row">
    <?php if (empty($posts)): ?>
      <div class="col-12 text-muted">No posts yet.</div>
    <?php endif; ?>
    <?php foreach ($posts as $p): ?>
      <div class="col-md-6 mb-4">
        <div class="card">
          <?php if ($p['image']): ?>
            <img src="uploads/<?php echo htmlspecialchars($p['image']); ?>" class="card-img-top" alt="">
          <?php endif; ?>
          <div class="card-body">
            <h5 class="card-title"><?php echo htmlspecialchars($p['title']); ?></h5>
            <p class="card-text"><?php echo htmlspecialchars(substr(strip_tags($p['content']),0,200)); ?>...</p>
            <a href="post.php?slug=<?php echo urlencode($p['slug']); ?>" class="btn btn-sm btn-primary">Read</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</main>
<?php include 'includes/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
