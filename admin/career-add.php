<?php 
require_once 'includes/header.php'; 
require_once 'includes/sidebar.php'; 
?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="h4 fw-bold">Post New Job</h2>
    <a href="careers.php" class="btn btn-light shadow-sm border"><i class="fas fa-arrow-left"></i> Back to Careers</a>
</div>

<div class="card card-custom">
    <div class="card-body p-4">
        <form action="career-action.php" method="POST">
            <input type="hidden" name="action" value="create">
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="job_title" class="form-label fw-bold">Job Title</label>
                    <input type="text" class="form-control form-control-lg" id="job_title" name="job_title" required placeholder="e.g. Senior Aviation Manager">
                </div>
                
                <div class="col-md-6 mb-3">
                    <label for="location" class="form-label fw-bold">Location</label>
                    <input type="text" class="form-control form-control-lg" id="location" name="location" placeholder="e.g. Dubai, UAE">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="job_type" class="form-label fw-bold">Job Type</label>
                    <select class="form-select form-select-lg" id="job_type" name="job_type">
                        <option value="Full Time">Full Time</option>
                        <option value="Part Time">Part Time</option>
                        <option value="Contract">Contract</option>
                        <option value="Internship">Internship</option>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="status" class="form-label fw-bold">Status</label>
                    <select class="form-select form-select-lg" id="status" name="status">
                        <option value="open">Open (Accepting Applications)</option>
                        <option value="closed">Closed</option>
                    </select>
                </div>
            </div>

            <div class="mb-4 editor-container">
                <label for="description" class="form-label fw-bold">Job Description</label>
                <textarea class="form-control rich-text-editor" id="description" name="description"></textarea>
            </div>

            <div class="mb-4 editor-container">
                <label for="requirements" class="form-label fw-bold">Requirements / Qualifications</label>
                <textarea class="form-control rich-text-editor" id="requirements" name="requirements"></textarea>
            </div>
            
            <hr class="text-muted">
            <div class="text-end">
                <a href="careers.php" class="btn btn-light border me-2 px-4">Cancel</a>
                <button type="submit" class="btn btn-primary px-4"><i class="fas fa-check-circle me-2"></i> Publish Job Posting</button>
            </div>
        </form>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
