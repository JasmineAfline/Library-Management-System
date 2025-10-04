<?php
require_once __DIR__ . '/../config.php';
if (session_status() === PHP_SESSION_NONE) session_start();
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Library System</title>
  <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>

<header class="header">
  <div class="logo">
    <img src="<?= BASE_URL ?>/assets/images/logo.png" alt="Library Logo">
    <h1>My Library</h1>
  </div>
  <nav class="navbar">
    <a href="<?= BASE_URL ?>/index.php">Home</a>
    <a href="<?= BASE_URL ?>/auth/login.php">Login</a>
    <a href="<?= BASE_URL ?>/auth/register.php">Register</a>
  </nav>
</header>

<main class="content">
