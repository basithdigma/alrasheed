<?php
require_once 'admin/includes/db.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$stmt = $pdo->prepare("SELECT * FROM blogs WHERE id = ? AND status = 'published'");
$stmt->execute([$id]);
$blog = $stmt->fetch();

if (!$blog) {
    header("Location: news.php");
    exit;
}

// Determine effective date for this blog
$blog_date = (!empty($blog['event_date']) && $blog['event_date'] !== '0000-00-00') ? $blog['event_date'] : $blog['created_at'];

// Find adjacent posts based on event_date / created_at ordering
try {
    // Newer post (Next)
    $nextStmt = $pdo->prepare("SELECT id, title FROM blogs WHERE status = 'published' AND (COALESCE(NULLIF(event_date, '0000-00-00'), created_at) > ? OR (COALESCE(NULLIF(event_date, '0000-00-00'), created_at) = ? AND id > ?)) ORDER BY COALESCE(NULLIF(event_date, '0000-00-00'), created_at) ASC, id ASC LIMIT 1");
    $nextStmt->execute([$blog_date, $blog_date, $id]);
    $nextBlog = $nextStmt->fetch();

    // Older post (Previous)
    $prevStmt = $pdo->prepare("SELECT id, title FROM blogs WHERE status = 'published' AND (COALESCE(NULLIF(event_date, '0000-00-00'), created_at) < ? OR (COALESCE(NULLIF(event_date, '0000-00-00'), created_at) = ? AND id < ?)) ORDER BY COALESCE(NULLIF(event_date, '0000-00-00'), created_at) DESC, id DESC LIMIT 1");
    $prevStmt->execute([$blog_date, $blog_date, $id]);
    $prevBlog = $prevStmt->fetch();
} catch (PDOException $e) {
    $nextBlog = null;
    $prevBlog = null;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>


    <?php include('meta.php'); ?>

    <?php include('links.php'); ?>

</head>

<body>


    <div class="page-wrapper">


        <?php include('header.php'); ?>

 <section class="blog-section blog-classic blog-details ptb-120">
            <div class="container">
                <div class="row justify-content-center mb-30-none">
                    <div class="col-xl-8 col-lg-8 mb-30">
                        <div class="row justify-content-center mb-30-none">
                            <div class="col-xl-12 mb-30">
                                <div class="blog-item">
                                    <?php if (!empty($blog['image'])): ?>
                                    <div class="blog-thumb">
                                        <img src="<?= htmlspecialchars($blog['image']) ?>" alt="<?= htmlspecialchars($blog['title']) ?>" style="width: 100%; height: auto; border-radius: 8px;">
                                    </div>
                                    <?php endif; ?>
                                    <div class="blog-content">
                                        <span class="sub-title"><?= date('d F Y', strtotime($blog_date)) ?></span>
                                        <h3 class="title"><?= htmlspecialchars($blog['title']) ?></h3>
                                        <div class="blog-description pt-4">
                                            <?= $blog['content'] ?>
                                        </div>
                                        
                                        <nav>
                                            <ul class="pagination">
                                                <?php if ($prevBlog): ?>
                                                    <li class="page-item prev">
                                                        <a class="page-link" href="news-details.php?id=<?= $prevBlog['id'] ?>" rel="prev" title="<?= htmlspecialchars($prevBlog['title']) ?>"><i class="icon-arrow-right-01 mr-2"></i> Previous Post</a>
                                                    </li>
                                                <?php else: ?>
                                                    <li class="page-item prev disabled">
                                                        <span class="page-link"><i class="icon-arrow-right-01 mr-2"></i> Previous Post</span>
                                                    </li>
                                                <?php endif; ?>
                                                <li class="page-item tags"><a class="page-link" href="news.php" title="All News"><i class="icon-Tags_menu"></i></a></li>
                                                <?php if ($nextBlog): ?>
                                                    <li class="page-item next">
                                                        <a class="page-link" href="news-details.php?id=<?= $nextBlog['id'] ?>" rel="next" title="<?= htmlspecialchars($nextBlog['title']) ?>">Next Post <i class="icon-Group-2361 ml-2"></i></a>
                                                    </li>
                                                <?php else: ?>
                                                    <li class="page-item next disabled">
                                                        <span class="page-link">Next Post <i class="icon-Group-2361 ml-2"></i></span>
                                                    </li>
                                                <?php endif; ?>
                                            </ul>
                                        </nav>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 mb-30">
                        <div class="sidebar">
                            <div class="widget-box mb-30">
                                <h4 class="widget-title">Search</h4>
                                <div class="search-widget-box">
                                    <form class="search-form">
                                        <input type="text" name="search" class="form--control" placeholder="Search">
                                        <button type="submit"><i class="las la-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="widget-box mb-30">
                                <h4 class="widget-title">Recent Posts</h4>
                                <div class="popular-widget-box">
                                    <?php
                                    try {
                                        $recentStmt = $pdo->prepare("SELECT id, title, image, event_date, created_at FROM blogs WHERE status = 'published' AND id != ? ORDER BY COALESCE(NULLIF(event_date, '0000-00-00'), created_at) DESC, created_at DESC, id DESC LIMIT 4");
                                        $recentStmt->execute([$id]);
                                        while ($recent = $recentStmt->fetch()):
                                            $recent_date = (!empty($recent['event_date']) && $recent['event_date'] !== '0000-00-00') ? $recent['event_date'] : $recent['created_at'];
                                    ?>
                                    <div class="single-popular-item d-flex flex-wrap align-items-center">
                                        <?php if (!empty($recent['image'])): ?>
                                        <div class="popular-item-thumb" style="width: 80px; height: 80px; overflow: hidden; border-radius: 5px;">
                                            <img src="<?= htmlspecialchars($recent['image']) ?>" alt="<?= htmlspecialchars($recent['title']) ?>" style="width: 100%; height: 100%; object-fit: cover;">
                                        </div>
                                        <?php endif; ?>
                                        <div class="popular-item-content">
                                            <span class="blog-date"><?= date('M d, Y', strtotime($recent_date)) ?></span>
                                            <h5 class="title"><a href="news-details.php?id=<?= $recent['id'] ?>"><?= htmlspecialchars($recent['title']) ?></a></h5>
                                        </div>
                                    </div>
                                    <?php 
                                        endwhile;
                                    } catch (PDOException $e) {}
                                    ?>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <?php include('footer.php'); ?>

    </div>



    <?php include('scripts.php'); ?>




</body>

</html>