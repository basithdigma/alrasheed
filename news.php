<?php require_once 'admin/includes/db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('meta.php'); ?>
    <?php include('links.php'); ?>
</head>

<body>
    <div class="page-wrapper">
        <?php include('header.php'); ?>

        <section class="blog-section ptb-120">
            <div class="container">
                <div class="row justify-content-center mb-30-none">
                    <div class="col-12 mb-30">
                        <div class="row justify-content-center mb-30-none">
                            <?php
                            $perPage = 9;
                            $page = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;

                            try {
                                // Total count for pagination
                                $totalCount = (int)$pdo->query("SELECT COUNT(*) FROM blogs WHERE status = 'published'")->fetchColumn();
                                $totalPages = (int)ceil($totalCount / $perPage);
                                if ($totalPages > 0 && $page > $totalPages) {
                                    $page = $totalPages;
                                }
                                $offset = ($page - 1) * $perPage;

                                // Fetch published blogs sorted by event date if present, otherwise creation date
                                $stmt = $pdo->prepare("SELECT * FROM blogs WHERE status = 'published' ORDER BY COALESCE(NULLIF(event_date, '0000-00-00'), created_at) DESC, created_at DESC, id DESC LIMIT :limit OFFSET :offset");
                                $stmt->bindValue(':limit', (int)$perPage, PDO::PARAM_INT);
                                $stmt->bindValue(':offset', (int)$offset, PDO::PARAM_INT);
                                $stmt->execute();
                                $blogs = $stmt->fetchAll();

                                if (!empty($blogs)):
                                    foreach ($blogs as $row):
                                        // Determine which date to display: event date if provided, otherwise created_at
                                        $display_date = (!empty($row['event_date']) && $row['event_date'] !== '0000-00-00') ? $row['event_date'] : $row['created_at'];
                            ?>
                             <div class="col-lg-4 col-md-6 col-sm-6 mb-30">
                                <div class="blog-item">
                                    <?php if(!empty($row['image'])): ?>
                                    <div class="blog-thumb" style="height: 250px; overflow: hidden;">
                                        <img src="<?= htmlspecialchars($row['image']) ?>" alt="<?= htmlspecialchars($row['title']) ?>" style="width: 100%; height: 100%; object-fit: cover;">
                                    </div>
                                    <?php endif; ?>
                                    <div class="blog-content">
                                        <div class="blog-post-meta">
                                            <!-- Output the dynamically chosen date (event date if given, else created date) -->
                                            <span class="date"><?= date('d F Y', strtotime($display_date)) ?></span>
                                            <span class="comment">Admin</span>
                                        </div>
                                        <h3 class="title"><a href="news-details.php?id=<?= $row['id'] ?>"><?= htmlspecialchars($row['title']) ?></a></h3>
                                        <p><?= htmlspecialchars(mb_substr(strip_tags($row['content']), 0, 100)) ?>...</p>
                                        <div class="blog-btn">
                                            <a href="news-details.php?id=<?= $row['id'] ?>">Read More <i class="icon-Group-2361 ml-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                                    endforeach;
                                else:
                            ?>
                            <div class="col-12 text-center py-5">
                                <p class="text-muted">No news or events found at the moment.</p>
                            </div>
                            <?php
                                endif;
                            } catch (PDOException $e) {
                                echo '<div class="col-12 text-center text-danger py-4">Unable to load news updates at this time.</div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
                
                <?php if (isset($totalPages) && $totalPages > 1): ?>
                <nav>
                    <ul class="pagination justify-content-center">
                        <?php if ($page > 1): ?>
                            <li class="page-item prev">
                                <a class="page-link" href="?page=<?= $page - 1 ?>" rel="prev" aria-label="Prev &raquo;">PREV</a>
                            </li>
                        <?php else: ?>
                            <li class="page-item prev disabled">
                                <span class="page-link">PREV</span>
                            </li>
                        <?php endif; ?>

                        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                            <li class="page-item <?= ($i === $page) ? 'active' : '' ?>" <?= ($i === $page) ? 'aria-current="page"' : '' ?>>
                                <?php if ($i === $page): ?>
                                    <span class="page-link"><?= sprintf('%02d', $i) ?></span>
                                <?php else: ?>
                                    <a class="page-link" href="?page=<?= $i ?>"><?= sprintf('%02d', $i) ?></a>
                                <?php endif; ?>
                            </li>
                        <?php endfor; ?>

                        <?php if ($page < $totalPages): ?>
                            <li class="page-item next">
                                <a class="page-link" href="?page=<?= $page + 1 ?>" rel="next" aria-label="Next &raquo;">NEXT</a>
                            </li>
                        <?php else: ?>
                            <li class="page-item next disabled">
                                <span class="page-link">NEXT</span>
                            </li>
                        <?php endif; ?>
                    </ul>
                </nav>
                <?php endif; ?>
            </div>
        </section>

        <?php include('footer.php'); ?>
    </div>

    <?php include('scripts.php'); ?>
</body>

</html>