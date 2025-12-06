<?php
    require_once ('../system/DatabaseConnector.php');
    if (!isset($_SESSION['user_id'])) { header('Location: index.php'); exit; }

    // Handle Delete
    if (isset($_GET['delete'])) {
        $delete_id = $_GET['delete'];
        $stmt = $dbConnection->prepare("DELETE FROM contacts WHERE contact_id = ?");
        $stmt->execute([$delete_id]);
        header('Location: contacts.php?deleted=true');
        exit;
    }

    $stmt = $dbConnection->query("SELECT * FROM contacts ORDER BY created_at DESC");
    $contacts = $stmt->fetchAll();
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Contacts - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-4">
        <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom"> 
            <a href="dashboard.php" class="d-flex align-items-center link-body-emphasis text-decoration-none"> 
                <img src="<?= PROOT; ?>assets/media/logo/logo.png" width="40" height="32" class="me-2" /> <span class="fs-4">M.Enterprice</span> 
            </a>
            <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto"> 
                <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="blogs.php">Blog</a> 
                <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="contacts.php">Contacts</a> 
                <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="#">Sites</a> 
                <a class="py-2 link-body-emphasis text-decoration-none" href="logout.php">Logout</a> 
            </nav> 
        </div>

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3>Contact Submissions</h3>
        </div>

        <?php if (isset($_GET['deleted'])): ?>
            <div class="alert alert-success">Contact entry deleted successfully.</div>
        <?php endif; ?>

        <?php if (empty($contacts)): ?>
            <div class="alert alert-info">No contacts yet.</div>
        <?php else: ?>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Company</th>
                            <th>Phone</th>
                            <th>Message</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($contacts as $c): ?>
                        <tr>
                            <td><?=htmlspecialchars($c['fname'] . ' ' . $c['lname'])?></td>
                            <td><?=htmlspecialchars($c['email'])?></td>
                            <td><?=htmlspecialchars($c['compnay_name'])?></td>
                            <td><?=htmlspecialchars($c['phone_number'])?></td>
                            <td><?=nl2br(htmlspecialchars(substr($c['message'], 0, 50))) . (strlen($c['message']) > 50 ? '...' : '')?></td>
                            <td><?=htmlspecialchars($c['created_at'])?></td>
                            <td>
                                <a href="contacts.php?delete=<?=$c['contact_id']?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this entry?')">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>