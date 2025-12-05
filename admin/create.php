<?php
session_start();
require_once __DIR__ . '/../includes/db.php';
if (!isset($_SESSION['user_id'])) { header('Location: login.php'); exit; }
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'] ?? '';
    $content = $_POST['content'] ?? '';
    $slug = $_POST['slug'] ? $_POST['slug'] : slugify($title);
    // handle image upload
    $imageName = null;
    if (!empty($_FILES['image']['name'])) {
        $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $imageName = uniqid() . '.' . $ext;
        move_uploaded_file($_FILES['image']['tmp_name'], __DIR__ . '/../uploads/' . $imageName);
    }
    if (empty($title) || empty($content)) { $errors[] = 'Title and content required'; }
    if (empty($errors)) {
        $stmt = $mysqli->prepare("INSERT INTO posts (title, slug, content, image) VALUES (?, ?, ?, ?)");
        $stmt->bind_param('ssss', $title, $slug, $content, $imageName);
        $stmt->execute();
        header('Location: posts.php'); exit;
    }
}
?>
<!doctype html><html><head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>New Post</title>
<link href="/assets/css/style.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head><body>
<div class="container py-4">
  <h3>Create Post</h3>
  <?php if ($errors): ?><div class="alert alert-danger"><?php echo implode('<br>', $errors); ?></div><?php endif; ?>
  <form method="post" enctype="multipart/form-data">
    <div class="mb-2"><input name="title" class="form-control" placeholder="Title" required></div>
    <div class="mb-2"><input name="slug" class="form-control" placeholder="Slug (optional)"></div>
    <div class="mb-2"><input name="image" type="file" class="form-control"></div>
    <div class="mb-2"><textarea name="content" rows="8" class="form-control" placeholder="Content (HTML allowed)" required></textarea></div>
    <div><button class="btn btn-success">Create</button> <a href="posts.php" class="btn btn-secondary">Cancel</a></div>
  </form>
</div>
</body></html>
