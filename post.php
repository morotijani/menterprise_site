<?php
require_once __DIR__ . '/includes/db.php';
$slug = isset($_GET['slug']) ? $_GET['slug'] : '';
if (!$slug) { header('Location: blog.php'); exit; }
$stmt = $mysqli->prepare("SELECT id, title, content, image, created_at FROM posts WHERE slug = ? LIMIT 1");
$stmt->bind_param('s', $slug);
$stmt->execute();
$res = $stmt->get_result();
$post = $res->fetch_assoc();
if (!$post) { header('Location: blog.php'); exit; }
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo htmlspecialchars($post['title']); ?> - Menterprise</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
<?php include 'includes/header.php'; ?>
<main class="container my-5">
  <article>
    <h1><?php echo htmlspecialchars($post['title']); ?></h1>
    <p class="text-muted">Posted on <?php echo date('F j, Y', strtotime($post['created_at'])); ?></p>
    <?php if ($post['image']): ?>
      <img src="uploads/<?php echo htmlspecialchars($post['image']); ?>" alt="" class="img-fluid mb-3">
    <?php endif; ?>
    <div><?php echo $post['content']; ?></div>
  </article>
</main>
<?php include 'includes/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
