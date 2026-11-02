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
        /* Section Spacing */
        .blog-detail-section {
            padding: 50px 0 100px;
        }

        /* Modern Breadcrumbs */
        .news-detail-breadcrumb {
            display: inline-flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 8px;
            font-size: 13px;
            margin-bottom: 25px;
            padding: 10px 22px;
            background: #ffffff;
            border-radius: 30px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.04);
        }
        .news-detail-breadcrumb a {
            color: #0f2560;
            font-weight: 600;
            transition: color 0.2s;
            display: inline-flex;
            align-items: center;
        }
        .news-detail-breadcrumb a:hover {
            color: #c99850;
        }
        .news-detail-breadcrumb .sep {
            color: #94a3b8;
            font-size: 12px;
        }
        .news-detail-breadcrumb .active-crumb {
            color: #64748b;
            font-weight: 500;
            max-width: 480px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* Main Article Card */
        .blog-detail-card {
            background: #ffffff;
            border-radius: 18px;
            box-shadow: 0 12px 40px rgba(15, 37, 96, 0.08);
            border: 1px solid #edf2f7;
            overflow: hidden;
            margin-bottom: 30px;
        }

        /* Hero / Featured Image */
        .blog-detail-hero {
            width: 100%;
            max-height: 500px;
            overflow: hidden;
            background: #0f2560;
            position: relative;
        }
        .blog-detail-hero img {
            width: 100%;
            height: auto;
            max-height: 500px;
            object-fit: cover;
            display: block;
        }

        /* Article Body & Padding */
        .blog-detail-body {
            padding: 45px 50px;
        }
        @media (max-width: 991px) {
            .blog-detail-body {
                padding: 35px 25px;
            }
        }
        @media (max-width: 575px) {
            .blog-detail-body {
                padding: 25px 18px;
            }
        }

        /* Header & Meta */
        .blog-detail-meta {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 12px;
            margin-bottom: 18px;
        }
        .meta-date-pill {
            display: inline-flex;
            align-items: center;
            background: rgba(201, 152, 80, 0.12);
            color: #b38234;
            font-weight: 700;
            font-size: 13px;
            padding: 6px 16px;
            border-radius: 20px;
            letter-spacing: 0.3px;
        }
        .meta-category-pill {
            display: inline-flex;
            align-items: center;
            background: rgba(15, 37, 96, 0.07);
            color: #0f2560;
            font-weight: 600;
            font-size: 13px;
            padding: 6px 14px;
            border-radius: 20px;
        }

        /* Main Title */
        .blog-detail-title {
            font-size: 30px;
            font-weight: 800;
            color: #0f2560;
            line-height: 1.35;
            margin: 0 0 25px;
            font-family: "Poppins", sans-serif;
        }
        @media (max-width: 991px) {
            .blog-detail-title {
                font-size: 24px;
                line-height: 1.35;
            }
        }
        @media (max-width: 575px) {
            .blog-detail-title {
                font-size: 20px;
            }
        }

        /* Divider */
        .blog-detail-divider {
            height: 1px;
            background: linear-gradient(90deg, #c99850 0%, #e2e8f0 40%, transparent 100%);
            margin-bottom: 35px;
        }

        /* Article Content & Critical Fixes for Images */
        .blog-detail-content {
            font-size: 16px;
            line-height: 1.85;
            color: #334155;
            word-break: break-word;
        }
        .blog-detail-content p {
            font-size: 16px;
            line-height: 1.85;
            color: #334155;
            margin-bottom: 22px;
        }
        /* FIX FOR SUMMERNOTE/INLINE HARDCODED WIDTHS */
        .blog-detail-content img {
            max-width: 100% !important;
            height: auto !important;
            width: auto !important;
            border-radius: 12px !important;
            display: block !important;
            margin: 28px auto !important;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08) !important;
            border: 1px solid #edf2f7 !important;
        }
        .blog-detail-content h1,
        .blog-detail-content h2,
        .blog-detail-content h3,
        .blog-detail-content h4 {
            color: #0f2560;
            font-weight: 700;
            margin-top: 35px;
            margin-bottom: 18px;
            line-height: 1.4;
        }
        .blog-detail-content ul,
        .blog-detail-content ol {
            margin: 20px 0 25px 25px;
            color: #334155;
            line-height: 1.8;
        }
        .blog-detail-content li {
            margin-bottom: 8px;
        }

        /* Post Navigation */
        .blog-detail-nav-box {
            margin-top: 45px;
            padding-top: 30px;
            border-top: 1px solid #edf2f7;
        }
        .nav-post-card {
            display: block;
            padding: 16px 20px;
            background: #f8fafc;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            text-decoration: none !important;
            transition: all 0.3s ease;
            height: 100%;
        }
        .nav-post-card:hover {
            background: #ffffff;
            border-color: #c99850;
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(15, 37, 96, 0.08);
        }
        .nav-post-card .direction {
            display: block;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            color: #c99850;
            letter-spacing: 0.5px;
            margin-bottom: 5px;
        }
        .nav-post-card .nav-post-title {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            font-size: 14px;
            font-weight: 700;
            color: #0f2560;
            line-height: 1.4;
        }
        .nav-all-icon-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 46px;
            height: 46px;
            background: #0f2560;
            color: #ffffff !important;
            border-radius: 50%;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(15, 37, 96, 0.2);
            font-size: 16px;
        }
        .nav-all-icon-btn:hover {
            background: #c99850;
            transform: scale(1.08);
            box-shadow: 0 6px 20px rgba(201, 152, 80, 0.3);
        }

        /* Sidebar Styling */
        .blog-sidebar .widget-box {
            background: #ffffff;
            border-radius: 18px;
            box-shadow: 0 10px 35px rgba(15, 37, 96, 0.06);
            border: 1px solid #edf2f7;
            padding: 30px 25px;
            margin-bottom: 30px;
        }
        .blog-sidebar .widget-title {
            font-size: 19px;
            font-weight: 700;
            color: #0f2560;
            margin-bottom: 22px;
            padding-bottom: 12px;
            border-bottom: 2px solid #f1f5f9;
            position: relative;
        }
        .blog-sidebar .widget-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -2px;
            width: 45px;
            height: 2px;
            background: #c99850;
        }
        .blog-sidebar .widget-title::before {
            display: none !important;
        }

        /* Search Form */
        .blog-sidebar .search-form {
            position: relative;
        }
        .blog-sidebar .search-form input {
            width: 100%;
            padding: 13px 48px 13px 20px;
            border-radius: 30px;
            border: 1px solid #e2e8f0;
            background: #f8fafc;
            font-size: 14px;
            transition: all 0.3s;
        }
        .blog-sidebar .search-form input:focus {
            border-color: #c99850;
            background: #ffffff;
            box-shadow: 0 0 0 3px rgba(201, 152, 80, 0.15);
            outline: none;
        }
        .blog-sidebar .search-form button {
            position: absolute;
            right: 6px;
            top: 6px;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: #0f2560;
            color: #ffffff;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
        }
        .blog-sidebar .search-form button:hover {
            background: #c99850;
        }

        /* Recent Posts */
        .blog-sidebar .single-popular-item {
            padding: 14px 0;
            border-bottom: 1px solid #f1f5f9;
            transition: all 0.2s;
        }
        .blog-sidebar .single-popular-item:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }
        .blog-sidebar .popular-item-thumb {
            width: 80px;
            height: 80px;
            border-radius: 12px;
            overflow: hidden;
            flex-shrink: 0;
            margin-right: 16px;
            border: 1px solid #edf2f7;
        }
        .blog-sidebar .popular-item-thumb a {
            display: block;
            width: 100%;
            height: 100%;
        }
        .blog-sidebar .popular-item-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }
        .blog-sidebar .single-popular-item:hover .popular-item-thumb img {
            transform: scale(1.08);
        }
        .blog-sidebar .popular-item-content {
            flex: 1;
        }
        .blog-sidebar .popular-item-content .blog-date {
            font-size: 12px;
            color: #94a3b8;
            font-weight: 600;
            display: block;
            margin-bottom: 4px;
        }
        .blog-sidebar .popular-item-content .title {
            font-size: 14px;
            font-weight: 700;
            line-height: 1.4;
            margin: 0;
        }
        .blog-sidebar .popular-item-content .title a {
            color: #0f2560;
            transition: color 0.2s;
        }
        .blog-sidebar .popular-item-content .title a:hover {
            color: #c99850;
        }
    </style>

</head>

<body>

    <div class="page-wrapper">

        <?php include('header.php'); ?>

        <section class="blog-detail-section">
            <div class="container">

                <!-- Breadcrumb Bar -->
                <div class="news-detail-breadcrumb">
                    <a href="./"><i class="fas fa-home mr-1"></i> Home</a>
                    <span class="sep">/</span>
                    <a href="news">News & Media</a>
                    <span class="sep">/</span>
                    <span class="active-crumb"><?= htmlspecialchars($blog['title']) ?></span>
                </div>

                <div class="row justify-content-center mb-30-none">
                    <!-- Main Article Column -->
                    <div class="col-xl-8 col-lg-8 mb-30">
                        <article class="blog-detail-card">
                            <?php if (!empty($blog['image'])): ?>
                            <div class="blog-detail-hero">
                                <img src="<?= htmlspecialchars($blog['image']) ?>" alt="<?= htmlspecialchars($blog['title']) ?>">
                            </div>
                            <?php endif; ?>

                            <div class="blog-detail-body">
                                <div class="blog-detail-meta">
                                    <span class="meta-date-pill">
                                        <i class="far fa-calendar-alt mr-2"></i><?= date('d F Y', strtotime($blog_date)) ?>
                                    </span>
                                    <span class="meta-category-pill">
                                        <i class="fas fa-newspaper mr-2"></i>Official News
                                    </span>
                                </div>

                                <h1 class="blog-detail-title"><?= htmlspecialchars($blog['title']) ?></h1>

                                <div class="blog-detail-divider"></div>

                                <div class="blog-detail-content">
                                    <?= $blog['content'] ?>
                                </div>

                                <!-- Post Navigation Footer -->
                                <div class="blog-detail-nav-box">
                                    <div class="row align-items-center">
                                        <div class="col-sm-5 text-left mb-3 mb-sm-0">
                                            <?php if ($prevBlog): 
                                                $prevSlug = !empty($prevBlog['slug']) ? $prevBlog['slug'] : (string)$prevBlog['id'];
                                            ?>
                                            <a href="news-details?slug=<?= urlencode($prevSlug) ?>" class="nav-post-card">
                                                <span class="direction"><i class="fas fa-arrow-left mr-1"></i> Previous Story</span>
                                                <span class="nav-post-title"><?= htmlspecialchars($prevBlog['title']) ?></span>
                                            </a>
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-sm-2 text-center mb-3 mb-sm-0">
                                            <a href="news" class="nav-all-icon-btn" title="Back to All News">
                                                <i class="fas fa-th-large"></i>
                                            </a>
                                        </div>
                                        <div class="col-sm-5 text-right">
                                            <?php if ($nextBlog): 
                                                $nextSlug = !empty($nextBlog['slug']) ? $nextBlog['slug'] : (string)$nextBlog['id'];
                                            ?>
                                            <a href="news-details?slug=<?= urlencode($nextSlug) ?>" class="nav-post-card text-right">
                                                <span class="direction">Next Story <i class="fas fa-arrow-right ml-1"></i></span>
                                                <span class="nav-post-title"><?= htmlspecialchars($nextBlog['title']) ?></span>
                                            </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </article>
                    </div>

                    <!-- Sidebar Column -->
                    <div class="col-xl-4 col-lg-4 mb-30">
                        <aside class="sidebar blog-sidebar">
                            <div class="widget-box mb-30">
                                <h4 class="widget-title">Search News</h4>
                                <div class="search-widget-box">
                                    <form class="search-form" action="news" method="GET">
                                        <input type="text" name="search" class="form--control" placeholder="Search keywords...">
                                        <button type="submit" aria-label="Search"><i class="las la-search"></i></button>
                                    </form>
                                </div>
                            </div>

                            <div class="widget-box mb-30">
                                <h4 class="widget-title">Recent Stories</h4>
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
                                        <div class="popular-item-thumb">
                                            <a href="<?= $recentUrl ?>">
                                                <img src="<?= htmlspecialchars($recent['image']) ?>" alt="<?= htmlspecialchars($recent['title']) ?>">
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
                        </aside>
                    </div>
                </div>
            </div>
        </section>

        <?php include('footer.php'); ?>

    </div>

    <?php include('scripts.php'); ?>

</body>

</html>