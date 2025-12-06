<?php
    require_once ('../system/DatabaseConnector.php');
    if (!isset($_SESSION['user_id'])) { header('Location: login.php'); exit; }
    $errors = [];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $title = $_POST['title'] ?? '';
        $content = $_POST['content'] ?? '';
        $slug = php_url_slug($title);
        $category_id = $_POST['category_id'] ?? null;
        $date =  $_POST['date'] ?? '';
        $date = date('Y-m-d H:i:s', strtotime($date));

        // handle image upload
        $imageName = null;

        if (!empty($_FILES['image']['name'])) {
            $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
            $imageName = uniqid() . '.' . $ext;
            $location = BASEURL . 'assets/media/blog/' . $imageName;
            move_uploaded_file($_FILES['image']['tmp_name'], $location);
        }
        if (empty($title) || empty($content)) { $errors[] = 'Title and content required'; }

        if (empty($errors)) {
            $stmt = $dbConnection->prepare("INSERT INTO posts (title, slug, content, image, category_id, created_at) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->execute([$title, $slug, $content, $imageName, $category_id, $date]);
            redirect(PROOT . 'admin/blogs'); exit;
        }
    }

    $categoriesStmt = $dbConnection->query("SELECT * FROM categories ORDER BY name ASC");
    $categories = $categoriesStmt->fetchAll();
?>
<!doctype html>
<html>
    <head>
    <meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
    <title>New Post</title>
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-4">
        <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom"> 
            <a href="dashboard" class="d-flex align-items-center link-body-emphasis text-decoration-none"> 
                <img src="<?= PROOT; ?>assets/media/logo/logo.png" width="40" height="32" class="me-2" /> <span class="fs-4">M.Enterprice</span> 
            </a>
            <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto"> 
                <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="blogs">Blog</a> 
                <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="contacts">Contacts</a> 
                <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="#">Sites</a> 
                <a class="py-2 link-body-emphasis text-decoration-none" href="logout">Logout</a> 
            </nav> 
        </div>
        <h3>Create Post</h3>
        <?php if ($errors): ?>
        <div class="alert alert-danger">
            <?php echo implode('<br>', $errors); ?>
        </div>
        <?php endif; ?>
        <form method="POST" enctype="multipart/form-data">
            <div class="mb-2">
                <input name="title" class="form-control" placeholder="Title" required>
            </div>
            <div class="mb-2">
                <input name="image" type="file" class="form-control" accept="image/*" required>
            </div>
             <div class="mb-2">
                <label for="category_id" class="form-label">Category</label>
                <select name="category_id" id="category_id" class="form-control" required>
                    <option value="">-- Select Category --</option>
                    <?php foreach ($categories as $cat): ?>
                        <option value="<?= htmlspecialchars($cat['id']) ?>"><?= htmlspecialchars($cat['name']) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-2">
                <textarea name="content" rows="8" class="form-control" placeholder="Content (HTML allowed)" required></textarea>
            </div>
            <div class="mb-2">
                <input name="date" type="datetime-local" value="<?= date('Y-m-d\TH:i'); ?>" class="form-control" required>
            </div>
            <div>
                <button type="submit" class="btn btn-success">Create</button> 
                <a href="blogs" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>
