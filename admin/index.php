<?php 
require_once 'includes/header.php'; 
require_once 'includes/sidebar.php'; 

// Ensure table exists or fail gracefully
try {
    $blogCount = $pdo->query("SELECT COUNT(*) FROM blogs")->fetchColumn();
} catch (PDOException $e) {
    $blogCount = 0; // Table might not exist yet if schema.sql isn't imported
}

try {
    $careerCount = $pdo->query("SELECT COUNT(*) FROM careers")->fetchColumn();
} catch (PDOException $e) {
    $careerCount = 0;
}
?>

<div class="row g-4 mb-4">
    <div class="col-md-6">
        <div class="card card-custom bg-primary text-white h-100">
            <div class="card-body py-4">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-uppercase mb-2">Total Blogs</h6>
                        <h2 class="mb-0 display-4 fw-bold"><?= htmlspecialchars($blogCount) ?></h2>
                    </div>
                    <div>
                        <i class="fas fa-blog fa-4x opacity-50"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-transparent border-top border-light border-opacity-25 p-3">
                <a href="blogs.php" class="text-white text-decoration-none d-flex justify-content-between align-items-center">
                    <span>View All Blogs</span>
                    <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="card card-custom bg-success text-white h-100">
            <div class="card-body py-4">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-uppercase mb-2">Total Careers</h6>
                        <h2 class="mb-0 display-4 fw-bold"><?= htmlspecialchars($careerCount) ?></h2>
                    </div>
                    <div>
                        <i class="fas fa-briefcase fa-4x opacity-50"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-transparent border-top border-light border-opacity-25 p-3">
                <a href="careers.php" class="text-white text-decoration-none d-flex justify-content-between align-items-center">
                    <span>View All Careers</span>
                    <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card card-custom">
            <div class="card-header bg-white py-3">
                <h5 class="card-title mb-0 fw-bold">Welcome to Admin Panel</h5>
            </div>
            <div class="card-body">
                <p>Welcome to the Al Rasheed Admin Dashboard. Use the sidebar on the left to navigate through the modules.</p>
                <ul>
                    <li><strong>Blogs:</strong> Add, edit, and delete blog posts using the rich text editor.</li>
                    <li><strong>Careers:</strong> Manage job openings and their descriptions.</li>
                </ul>
                
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
