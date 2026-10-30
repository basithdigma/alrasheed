<?php
session_start();
require_once 'includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';

    try {
        if ($action === 'create') {
            $job_title = $_POST['job_title'] ?? '';
            $location = $_POST['location'] ?? '';
            $job_type = $_POST['job_type'] ?? 'Full Time';
            $description = $_POST['description'] ?? '';
            $requirements = $_POST['requirements'] ?? '';
            $status = $_POST['status'] ?? 'open';

            $stmt = $pdo->prepare("INSERT INTO careers (job_title, location, job_type, description, requirements, status) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->execute([$job_title, $location, $job_type, $description, $requirements, $status]);

            $_SESSION['success'] = "Job posted successfully!";
            header("Location: careers.php");
            exit;

        } elseif ($action === 'update') {
            $id = (int)$_POST['id'];
            $job_title = $_POST['job_title'] ?? '';
            $location = $_POST['location'] ?? '';
            $job_type = $_POST['job_type'] ?? 'Full Time';
            $description = $_POST['description'] ?? '';
            $requirements = $_POST['requirements'] ?? '';
            $status = $_POST['status'] ?? 'open';

            $stmt = $pdo->prepare("UPDATE careers SET job_title = ?, location = ?, job_type = ?, description = ?, requirements = ?, status = ? WHERE id = ?");
            $stmt->execute([$job_title, $location, $job_type, $description, $requirements, $status, $id]);

            $_SESSION['success'] = "Job updated successfully!";
            header("Location: careers.php");
            exit;

        } elseif ($action === 'delete') {
            $id = (int)$_POST['id'];
            $stmt = $pdo->prepare("DELETE FROM careers WHERE id = ?");
            $stmt->execute([$id]);

            $_SESSION['success'] = "Job posting deleted successfully!";
            header("Location: careers.php");
            exit;
        }
    } catch (PDOException $e) {
        $_SESSION['error'] = "Database error: " . $e->getMessage();
        header("Location: careers.php");
        exit;
    }
}
// Default fallback
header("Location: careers.php");
exit;
