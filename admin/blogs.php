<?php 
require_once 'includes/header.php'; 
require_once 'includes/sidebar.php'; 

// Fetch all blogs
try {
    $stmt = $pdo->query("SELECT * FROM blogs ORDER BY COALESCE(NULLIF(event_date, '0000-00-00'), created_at) DESC, created_at DESC, id DESC");
    $blogs = $stmt->fetchAll();
} catch (PDOException $e) {
    $blogs = [];
    $error = "Error fetching blogs (did you import schema.sql?): " . $e->getMessage();
}
?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="h4 fw-bold">Manage Blogs</h2>
    <a href="blog-add.php" class="btn btn-primary shadow-sm"><i class="fas fa-plus"></i> Add New Blog</a>
</div>

<?php if (isset($_SESSION['success'])): ?>
    <div class="alert alert-success alert-dismissible fade show shadow-sm">
        <i class="fas fa-check-circle me-2"></i> <?= htmlspecialchars($_SESSION['success']) ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    <?php unset($_SESSION['success']); ?>
<?php endif; ?>

<?php if (isset($_SESSION['error'])): ?>
    <div class="alert alert-danger alert-dismissible fade show shadow-sm">
        <i class="fas fa-exclamation-circle me-2"></i> <?= htmlspecialchars($_SESSION['error']) ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    <?php unset($_SESSION['error']); ?>
<?php endif; ?>

<?php if (isset($error)): ?>
    <div class="alert alert-warning shadow-sm"><i class="fas fa-exclamation-triangle me-2"></i> <?= htmlspecialchars($error) ?></div>
<?php endif; ?>

<div class="card card-custom overflow-hidden">
    <div class="card-body p-0 table-responsive">
        <table class="table table-hover mb-0 align-middle">
            <thead class="bg-light">
                <tr>
                    <th class="px-4 py-3 text-muted">ID</th>
                    <th class="px-4 py-3 text-muted">Image</th>
                    <th class="py-3 text-muted">Title</th>
                    <th class="py-3 text-muted">Status</th>
                    <th class="py-3 text-muted">Date</th>
                    <th class="px-4 py-3 text-end text-muted">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($blogs) > 0): ?>
                    <?php foreach ($blogs as $blog): ?>
                        <tr>
                            <td class="px-4 py-3">#<?= $blog['id'] ?></td>
                            <td class="px-4 py-3">
                                <?php if (!empty($blog['image'])): ?>
                                    <img src="../<?= htmlspecialchars($blog['image']) ?>" alt="Thumbnail" style="width: 50px; height: 50px; object-fit: cover; border-radius: 5px;">
                                <?php else: ?>
                                    <div style="width: 50px; height: 50px; background: #e9ecef; border-radius: 5px; display: flex; align-items: center; justify-content: center;">
                                        <i class="fas fa-image text-muted"></i>
                                    </div>
                                <?php endif; ?>
                            </td>
                            <td class="py-3 fw-bold text-dark"><?= htmlspecialchars($blog['title']) ?></td>
                            <td class="py-3">
                                <?php if ($blog['status'] == 'published'): ?>
                                    <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25 px-2 py-1">Published</span>
                                <?php else: ?>
                                    <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary border-opacity-25 px-2 py-1">Draft</span>
                                <?php endif; ?>
                            </td>
                            <td class="py-3">
                                <?php if (!empty($blog['event_date']) && $blog['event_date'] !== '0000-00-00'): ?>
                                    <div class="mb-1">
                                        <span class="badge bg-primary bg-opacity-10 text-primary border border-primary border-opacity-25 px-2 py-1">
                                            <i class="fas fa-calendar-alt me-1"></i> Event: <?= date('M d, Y', strtotime($blog['event_date'])) ?>
                                        </span>
                                    </div>
                                    <div class="text-muted small">Created: <?= date('M d, Y', strtotime($blog['created_at'])) ?></div>
                                <?php else: ?>
                                    <span class="text-muted small"><i class="fas fa-clock me-1"></i> Created: <?= date('M d, Y', strtotime($blog['created_at'])) ?></span>
                                <?php endif; ?>
                            </td>
                            <td class="px-4 py-3 text-end">
                                <a href="blog-edit.php?id=<?= $blog['id'] ?>" class="btn btn-sm btn-light border me-1 text-primary"><i class="fas fa-edit"></i> Edit</a>
                                <form action="blog-action.php" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this blog?');">
                                    <input type="hidden" name="action" value="delete">
                                    <input type="hidden" name="id" value="<?= $blog['id'] ?>">
                                    <button type="submit" class="btn btn-sm btn-light border text-danger"><i class="fas fa-trash"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center py-5 text-muted">
                            <i class="fas fa-folder-open fa-3x mb-3 text-light"></i>
                            <p class="mb-0">No blogs found. Click "Add New Blog" to create one.</p>
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
