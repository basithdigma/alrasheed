<?php 
require_once 'includes/header.php'; 
require_once 'includes/sidebar.php'; 

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

try {
    $stmt = $pdo->prepare("SELECT * FROM careers WHERE id = ?");
    $stmt->execute([$id]);
    $job = $stmt->fetch();
} catch (PDOException $e) {
    $job = null;
    $error = "Error fetching job: " . $e->getMessage();
}

if (!$job) {
    echo "<div class='container mt-5'><div class='alert alert-danger shadow-sm'><i class='fas fa-exclamation-triangle me-2'></i> Job posting not found or database error.</div><a href='careers.php' class='btn btn-primary'>Return to Careers</a></div>";
    require_once 'includes/footer.php';
    exit;
}
?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="h4 fw-bold">Edit Job Posting</h2>
    <a href="careers.php" class="btn btn-light shadow-sm border"><i class="fas fa-arrow-left"></i> Back to Careers</a>
</div>

<div class="card card-custom">
    <div class="card-body p-4">
        <form action="career-action.php" method="POST">
            <input type="hidden" name="action" value="update">
            <input type="hidden" name="id" value="<?= $job['id'] ?>">
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="job_title" class="form-label fw-bold">Job Title</label>
                    <input type="text" class="form-control form-control-lg" id="job_title" name="job_title" value="<?= htmlspecialchars($job['job_title']) ?>" required>
                </div>
                
                <div class="col-md-6 mb-3">
                    <label for="location" class="form-label fw-bold">Location</label>
                    <input type="text" class="form-control form-control-lg" id="location" name="location" value="<?= htmlspecialchars($job['location']) ?>">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="job_type" class="form-label fw-bold">Job Type</label>
                    <select class="form-select form-select-lg" id="job_type" name="job_type">
                        <option value="Full Time" <?= $job['job_type'] == 'Full Time' ? 'selected' : '' ?>>Full Time</option>
                        <option value="Part Time" <?= $job['job_type'] == 'Part Time' ? 'selected' : '' ?>>Part Time</option>
                        <option value="Contract" <?= $job['job_type'] == 'Contract' ? 'selected' : '' ?>>Contract</option>
                        <option value="Internship" <?= $job['job_type'] == 'Internship' ? 'selected' : '' ?>>Internship</option>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="status" class="form-label fw-bold">Status</label>
                    <select class="form-select form-select-lg" id="status" name="status">
                        <option value="open" <?= $job['status'] == 'open' ? 'selected' : '' ?>>Open (Accepting Applications)</option>
                        <option value="closed" <?= $job['status'] == 'closed' ? 'selected' : '' ?>>Closed</option>
                    </select>
                </div>
            </div>

            <div class="mb-4 editor-container">
                <label for="description" class="form-label fw-bold">Job Description</label>
                <textarea class="form-control rich-text-editor" id="description" name="description"><?= htmlspecialchars($job['description']) ?></textarea>
            </div>

            <div class="mb-4 editor-container">
                <label for="requirements" class="form-label fw-bold">Requirements / Qualifications</label>
                <textarea class="form-control rich-text-editor" id="requirements" name="requirements"><?= htmlspecialchars($job['requirements']) ?></textarea>
            </div>
            
            <hr class="text-muted">
            <div class="text-end">
                <a href="careers.php" class="btn btn-light border me-2 px-4">Cancel</a>
                <button type="submit" class="btn btn-primary px-4"><i class="fas fa-check-circle me-2"></i> Update Job Posting</button>
            </div>
        </form>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
