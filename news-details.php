<?php
require_once 'admin/includes/db.php';

$slug = isset($_GET['slug']) ? trim($_GET['slug']) : (isset($_GET['post']) ? trim($_GET['post']) : '');
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$blog = null;

if (!empty($slug)) {
    $stmt = $pdo->prepare("SELECT * FROM blogs WHERE slug = ? AND status = 'published' LIMIT 1");
    $stmt->execute([$slug]);
    $blog = $stmt->fetch();

    if (!$blog) {
        // Fallback: match by slugified title in case of slight variance
        $allStmt = $pdo->query("SELECT * FROM blogs WHERE status = 'published'");
        while ($candidate = $allStmt->fetch()) {
            $cSlug = !empty($candidate['slug']) ? $candidate['slug'] : preg_replace('/[^a-z0-9]+/i', '-', strtolower(trim($candidate['title'])));
            if ($cSlug === $slug) {
                $blog = $candidate;
                break;
            }
        }
    }
} elseif ($id > 0) {
    // Old ?id=12 accessed: Look up and 301 permanently redirect to secure slug URL
    $stmt = $pdo->prepare("SELECT * FROM blogs WHERE id = ? AND status = 'published' LIMIT 1");
    $stmt->execute([$id]);
    $blog = $stmt->fetch();

    if ($blog) {
        $postSlug = !empty($blog['slug']) ? $blog['slug'] : preg_replace('/[^a-z0-9]+/i', '-', strtolower(trim($blog['title'])));
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: news-details?slug=" . urlencode($postSlug));
        exit;
    }
}

if (!$blog) {
    header("Location: news");
    exit;
}

$id = (int)$blog['id'];
$blog_date = (!empty($blog['event_date']) && $blog['event_date'] !== '0000-00-00') ? $blog['event_date'] : $blog['created_at'];

// Find adjacent posts based on event_date / created_at ordering
try {
    // Newer post (Next)
    $nextStmt = $pdo->prepare("SELECT id, title, slug FROM blogs WHERE status = 'published' AND (COALESCE(NULLIF(event_date, '0000-00-00'), created_at) > ? OR (COALESCE(NULLIF(event_date, '0000-00-00'), created_at) = ? AND id > ?)) ORDER BY COALESCE(NULLIF(event_date, '0000-00-00'), created_at) ASC, id ASC LIMIT 1");
    $nextStmt->execute([$blog_date, $blog_date, $id]);
    $nextBlog = $nextStmt->fetch();

    // Older post (Previous)
    $prevStmt = $pdo->prepare("SELECT id, title, slug FROM blogs WHERE status = 'published' AND (COALESCE(NULLIF(event_date, '0000-00-00'), created_at) < ? OR (COALESCE(NULLIF(event_date, '0000-00-00'), created_at) = ? AND id < ?)) ORDER BY COALESCE(NULLIF(event_date, '0000-00-00'), created_at) DESC, id DESC LIMIT 1");
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

    <style>
        .popular-item-thumb a {
            display: block;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        .popular-item-thumb a img {
            transition: transform 0.3s ease;
        }
        .popular-item-thumb a:hover img {
            transform: scale(1.08);
        }
    </style>

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
                                                <?php if ($prevBlog): 
                                                    $prevSlug = !empty($prevBlog['slug']) ? $prevBlog['slug'] : (string)$prevBlog['id'];
                                                ?>
                                                    <li class="page-item prev">
                                                        <a class="page-link" href="news-details?slug=<?= urlencode($prevSlug) ?>" rel="prev" title="<?= htmlspecialchars($prevBlog['title']) ?>"><i class="icon-arrow-right-01 mr-2"></i> Previous Post</a>
                                                    </li>
                                                <?php else: ?>
                                                    <li class="page-item prev disabled">
                                                        <span class="page-link"><i class="icon-arrow-right-01 mr-2"></i> Previous Post</span>
                                                    </li>
                                                <?php endif; ?>
                                                <li class="page-item tags"><a class="page-link" href="news" title="All News"><i class="icon-Tags_menu"></i></a></li>
                                                <?php if ($nextBlog): 
                                                    $nextSlug = !empty($nextBlog['slug']) ? $nextBlog['slug'] : (string)$nextBlog['id'];
                                                ?>
                                                    <li class="page-item next">
                                                        <a class="page-link" href="news-details?slug=<?= urlencode($nextSlug) ?>" rel="next" title="<?= htmlspecialchars($nextBlog['title']) ?>">Next Post <i class="icon-Group-2361 ml-2"></i></a>
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
                                    <form class="search-form" action="news" method="GET">
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
                                        $recentStmt = $pdo->prepare("SELECT id, title, slug, image, event_date, created_at FROM blogs WHERE status = 'published' AND id != ? ORDER BY COALESCE(NULLIF(event_date, '0000-00-00'), created_at) DESC, created_at DESC, id DESC LIMIT 4");
                                        $recentStmt->execute([$id]);
                                        while ($recent = $recentStmt->fetch()):
                                            $recent_date = (!empty($recent['event_date']) && $recent['event_date'] !== '0000-00-00') ? $recent['event_date'] : $recent['created_at'];
                                            $recentSlug = !empty($recent['slug']) ? $recent['slug'] : (string)$recent['id'];
                                            $recentUrl = "news-details?slug=" . urlencode($recentSlug);
                                    ?>
                                    <div class="single-popular-item d-flex flex-wrap align-items-center">
                                        <?php if (!empty($recent['image'])): ?>
                                        <div class="popular-item-thumb" style="width: 80px; height: 80px; overflow: hidden; border-radius: 5px;">
                                            <a href="<?= $recentUrl ?>">
                                                <img src="<?= htmlspecialchars($recent['image']) ?>" alt="<?= htmlspecialchars($recent['title']) ?>" style="width: 100%; height: 100%; object-fit: cover;">
                                            </a>
                                        </div>
                                        <?php endif; ?>
                                        <div class="popular-item-content">
                                            <span class="blog-date"><?= date('M d, Y', strtotime($recent_date)) ?></span>
                                            <h5 class="title"><a href="<?= $recentUrl ?>"><?= htmlspecialchars($recent['title']) ?></a></h5>
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