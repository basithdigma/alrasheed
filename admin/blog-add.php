<?php 
require_once 'includes/header.php'; 
require_once 'includes/sidebar.php'; 
?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="h4 fw-bold">Add New Blog</h2>
    <a href="blogs.php" class="btn btn-light shadow-sm border"><i class="fas fa-arrow-left"></i> Back to Blogs</a>
</div>

<div class="card card-custom">
    <div class="card-body p-4">
        <form action="blog-action.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="action" value="create">
            
            <div class="row">
                <!-- Adjusted size to col-md-6 -->
                <div class="col-md-6 mb-3">
                    <label for="title" class="form-label fw-bold">Blog Title</label>
                    <input type="text" class="form-control form-control-lg" id="title" name="title" required placeholder="Enter blog title">
                </div>
                
                <!-- New Event Date Field -->
                <div class="col-md-3 mb-3">
                    <label for="event_date" class="form-label fw-bold">Event Date</label>
                    <input type="date" class="form-control form-control-lg" id="event_date" name="event_date">
                    <small class="text-muted">Optional (defaults to created date)</small>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="status" class="form-label fw-bold">Status</label>
                    <select class="form-select form-select-lg" id="status" name="status">
                        <option value="published">Published</option>
                        <option value="draft">Draft</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="image" class="form-label fw-bold">Main Image</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*" onchange="previewImage(this, 'image-preview')">
                </div>
                <div class="col-md-6" id="image-preview-wrapper" style="display: none;">
                    <label class="form-label fw-bold">Image Preview</label>
                    <div>
                        <img id="image-preview" src="#" alt="Image Preview" style="max-height: 150px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                    </div>
                </div>
            </div>

            <div class="mb-4 editor-container">
                <label for="content" class="form-label fw-bold">Content</label>
                <textarea class="form-control rich-text-editor" id="content" name="content"></textarea>
            </div>
            
            <hr class="text-muted">
            <div class="text-end">
                <a href="blogs.php" class="btn btn-light border me-2 px-4">Cancel</a>
                <button type="submit" class="btn btn-primary px-4"><i class="fas fa-save me-2"></i> Save Blog Post</button>
            </div>
        </form>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>