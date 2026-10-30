<?php
session_start();
require_once 'includes/db.php';

function uploadImage($fileKey) {
    if (isset($_FILES[$fileKey]) && $_FILES[$fileKey]['error'] == 0) {
        $allowed = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
        $filename = $_FILES[$fileKey]['name'];
        $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        if (in_array($ext, $allowed)) {
            $uploadPath = '../uploads/blogs/';
            if (!is_dir($uploadPath)) mkdir($uploadPath, 0777, true);
            $newFilename = uniqid('blog_') . '.' . $ext;
            if (move_uploaded_file($_FILES[$fileKey]['tmp_name'], $uploadPath . $newFilename)) {
                return 'uploads/blogs/' . $newFilename;
            }
        }
    }
    return null;
}

function generateSlug($title, $pdo, $id = null) {
    $slug = preg_replace('~[^\pL\d]+~u', '-', $title);
    $slug = @iconv('utf-8', 'us-ascii//TRANSLIT', $slug);
    $slug = preg_replace('~[^-\w]+~', '', $slug);
    $slug = trim($slug, '-');
    $slug = preg_replace('~-+~', '-', $slug);
    $slug = strtolower($slug);
    $slug = substr($slug, 0, 100);
    if (empty($slug)) {
        $slug = 'news-' . substr(md5(uniqid()), 0, 6);
    }
    
    $originalSlug = $slug;
    $count = 1;
    while (true) {
        if ($id) {
            $stmt = $pdo->prepare("SELECT id FROM blogs WHERE slug = ? AND id != ?");
            $stmt->execute([$slug, $id]);
        } else {
            $stmt = $pdo->prepare("SELECT id FROM blogs WHERE slug = ?");
            $stmt->execute([$slug]);
        }
        if ($stmt->fetch()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        } else {
            break;
        }
    }
    return $slug;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';

    try {
        if ($action === 'create') {
            $title = $_POST['title'] ?? '';
            $status = $_POST['status'] ?? 'draft';
            // Capture Event Date
            $event_date = !empty($_POST['event_date']) ? $_POST['event_date'] : null;
            $content = $_POST['content'] ?? '';
            $imagePath = uploadImage('image');
            $slug = generateSlug($title, $pdo);

            // Update INSERT query
            $stmt = $pdo->prepare("INSERT INTO blogs (title, slug, content, status, event_date, image) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->execute([$title, $slug, $content, $status, $event_date, $imagePath]);

            $_SESSION['success'] = "Blog created successfully!";
            header("Location: blogs.php");
            exit;

        } elseif ($action === 'update') {
            $id = (int)$_POST['id'];
            $title = $_POST['title'] ?? '';
            $status = $_POST['status'] ?? 'draft';
            // Capture Event Date
            $event_date = !empty($_POST['event_date']) ? $_POST['event_date'] : null;
            $content = $_POST['content'] ?? '';
            $slug = generateSlug($title, $pdo, $id);

            // Get current image
            $stmt = $pdo->prepare("SELECT image FROM blogs WHERE id = ?");
            $stmt->execute([$id]);
            $currentImage = $stmt->fetchColumn();

            $imagePath = uploadImage('image');
            if ($imagePath) { // New image uploaded
                if ($currentImage && file_exists('../' . $currentImage)) {
                    unlink('../' . $currentImage);
                }
            } else {
                $imagePath = $currentImage; // Keep existing image
            }

            // Update UPDATE query
            $stmt = $pdo->prepare("UPDATE blogs SET title = ?, slug = ?, content = ?, status = ?, event_date = ?, image = ? WHERE id = ?");
            $stmt->execute([$title, $slug, $content, $status, $event_date, $imagePath, $id]);

            $_SESSION['success'] = "Blog updated successfully!";
            header("Location: blogs.php");
            exit;

        } elseif ($action === 'delete') {
            $id = (int)$_POST['id'];
            
            // Delete associated image file
            $stmt = $pdo->prepare("SELECT image FROM blogs WHERE id = ?");
            $stmt->execute([$id]);
            $currentImage = $stmt->fetchColumn();
            if ($currentImage && file_exists('../' . $currentImage)) {
                unlink('../' . $currentImage);
            }

            $stmt = $pdo->prepare("DELETE FROM blogs WHERE id = ?");
            $stmt->execute([$id]);

            $_SESSION['success'] = "Blog deleted successfully!";
            header("Location: blogs.php");
            exit;
        }
    } catch (PDOException $e) {
        $_SESSION['error'] = "Database error: " . $e->getMessage();
        header("Location: blogs.php");
        exit;
    }
}
// Default fallback
header("Location: blogs.php");
exit;