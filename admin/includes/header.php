<?php
session_start();

// Authentication Check
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php");
    exit;
}

require_once 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Al Rasheed</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Summernote CSS -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f8f9fa; }
        .sidebar { min-height: 100vh; background-color: #343a40; }
        .sidebar a { color: #cfd8dc; text-decoration: none; padding: 12px 20px; display: block; border-bottom: 1px solid #454d55; transition: 0.3s; }
        .sidebar a:hover { background-color: #495057; color: #fff; padding-left: 25px; }
        .sidebar .active { background-color: #0d6efd; color: #fff; border-bottom: none; }
        .content-area { padding: 20px; }
        .card-custom { border: none; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); }
        .w-20px { width: 20px; text-align: center; }
    </style>
</head>
<body>
    <div class="container-fluid p-0">
        <div class="row g-0">
