<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>
            <div class="col-md-2 sidebar d-flex flex-column">
                <div class="p-4 text-white text-center border-bottom border-secondary mb-3">
                    <h5 class="mb-0 fw-bold">Al Rasheed</h5>
                    <small class="text-muted">Admin Panel</small>
                </div>
                <ul class="nav flex-column mb-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link <?= ($currentPage == 'index.php') ? 'active' : '' ?>">
                            <i class="fas fa-tachometer-alt me-2 w-20px"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="blogs.php" class="nav-link <?= (strpos($currentPage, 'blog') !== false) ? 'active' : '' ?>">
                            <i class="fas fa-blog me-2 w-20px"></i> Blogs
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="careers.php" class="nav-link <?= (strpos($currentPage, 'career') !== false) ? 'active' : '' ?>">
                            <i class="fas fa-briefcase me-2 w-20px"></i> Careers
                        </a>
                    </li>
                    <li class="nav-item mt-4">
                        <a href="../index.php" target="_blank" class="nav-link text-info border-top border-secondary pt-3">
                            <i class="fas fa-external-link-alt me-2 w-20px"></i> View Website
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link text-danger border-top border-secondary pt-3 mt-3">
                            <i class="fas fa-sign-out-alt me-2 w-20px"></i> Log Out
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-10 content-area bg-light min-vh-100">
                <!-- Top Navbar -->
                <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom mb-4 shadow-sm px-4 py-3 rounded">
                    <div class="container-fluid">
                        <span class="navbar-brand mb-0 h4 fw-bold text-dark">
                            <?= ucfirst(str_replace(['.php', '-'], ['', ' '], $currentPage)) ?: 'Dashboard' ?>
                        </span>
                        <div class="d-flex">
                            <span class="navbar-text">
                                <i class="fas fa-user-circle me-1"></i> Admin
                            </span>
                        </div>
                    </div>
                </nav>
                <!-- Main Content Starts Here -->
