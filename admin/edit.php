<?php
session_start();
    require_once ('../system/DatabaseConnector.php');
if (!isset($_SESSION['user_id'])) { header('Location: login.php'); exit; }
$id = $_GET['id'] ?? null;
if (!$id) { header('Location: posts.php'); exit; }
$stmt = $dbConnection->prepare("SELECT id, title, slug, content, image FROM posts WHERE id = ? LIMIT 1");
$stmt->bind_param('i', $id);
$stmt->execute();
$post = $stmt->get_result()->fetch_assoc();
if (!$post) { header('Location: posts.php'); exit; }
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'] ?? '';
    $content = $_POST['content'] ?? '';
    $slug = $_POST['slug'] ? $_POST['slug'] : slugify($title);
    $imageName = $post['image'];
    if (!empty($_FILES['image']['name'])) {
        $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $imageName = uniqid() . '.' . $ext;
        move_uploaded_file($_FILES['image']['tmp_name'], __DIR__ . '/../uploads/' . $imageName);
    }
    if (empty($title) || empty($content)) { $errors[] = 'Title and content required'; }
    if (empty($errors)) {
        $u = $mysqli->prepare("UPDATE posts SET title=?, slug=?, content=?, image=?, updated_at=NOW() WHERE id = ?");
        $u->bind_param('ssssi', $title, $slug, $content, $imageName, $id);
        $u->execute();
        header('Location: posts.php'); exit;
    }
}
?>
<!doctype html><html><head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Edit Post</title>
<link href="/assets/css/style.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head><body>
<div class="container py-4">
  <h3>Edit Post</h3>
  <?php if ($errors): ?><div class="alert alert-danger"><?php echo implode('<br>', $errors); ?></div><?php endif; ?>
  <form method="post" enctype="multipart/form-data">
    <div class="mb-2"><input name="title" value="<?php echo htmlspecialchars($post['title']); ?>" class="form-control" required></div>
    <div class="mb-2"><input name="slug" value="<?php echo htmlspecialchars($post['slug']); ?>" class="form-control"></div>
    <?php if ($post['image']): ?>
      <div class="mb-2"><img src="/uploads/<?php echo htmlspecialchars($post['image']); ?>" style="max-width:200px" alt=""></div>
    <?php endif; ?>
    <div class="mb-2"><input name="image" type="file" class="form-control"></div>
    <div class="mb-2"><textarea name="content" rows="8" class="form-control" required><?php echo htmlspecialchars($post['content']); ?></textarea></div>
    <div><button class="btn btn-primary">Save</button> <a href="posts.php" class="btn btn-secondary">Cancel</a></div>
  </form>
</div>
</body></html>
