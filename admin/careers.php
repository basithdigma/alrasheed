<?php 
require_once 'includes/header.php'; 
require_once 'includes/sidebar.php'; 

// Fetch all careers
try {
    $stmt = $pdo->query("SELECT * FROM careers ORDER BY created_at DESC");
    $careers = $stmt->fetchAll();
} catch (PDOException $e) {
    $careers = [];
    $error = "Error fetching careers: " . $e->getMessage();
}
?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="h4 fw-bold">Manage Careers</h2>
    <a href="career-add.php" class="btn btn-primary shadow-sm"><i class="fas fa-plus"></i> Post New Job</a>
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
                    <th class="py-3 text-muted">Job Title</th>
                    <th class="py-3 text-muted">Location</th>
                    <th class="py-3 text-muted">Type</th>
                    <th class="py-3 text-muted">Status</th>
                    <th class="px-4 py-3 text-end text-muted">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($careers) > 0): ?>
                    <?php foreach ($careers as $job): ?>
                        <tr>
                            <td class="px-4 py-3">#<?= $job['id'] ?></td>
                            <td class="py-3 fw-bold text-dark"><?= htmlspecialchars($job['job_title']) ?></td>
                            <td class="py-3 text-muted"><i class="fas fa-map-marker-alt me-1 text-danger"></i> <?= htmlspecialchars($job['location']) ?></td>
                            <td class="py-3 text-muted"><?= htmlspecialchars($job['job_type']) ?></td>
                            <td class="py-3">
                                <?php if ($job['status'] == 'open'): ?>
                                    <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25 px-2 py-1">Open</span>
                                <?php else: ?>
                                    <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1">Closed</span>
                                <?php endif; ?>
                            </td>
                            <td class="px-4 py-3 text-end">
                                <a href="career-edit.php?id=<?= $job['id'] ?>" class="btn btn-sm btn-light border me-1 text-primary"><i class="fas fa-edit"></i> Edit</a>
                                <form action="career-action.php" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this job posting?');">
                                    <input type="hidden" name="action" value="delete">
                                    <input type="hidden" name="id" value="<?= $job['id'] ?>">
                                    <button type="submit" class="btn btn-sm btn-light border text-danger"><i class="fas fa-trash"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center py-5 text-muted">
                            <i class="fas fa-briefcase fa-3x mb-3 text-light"></i>
                            <p class="mb-0">No job postings found. Click "Post New Job" to create one.</p>
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
