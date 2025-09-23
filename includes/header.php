<?php
// require config to get BASE_URL (and you already need config on many pages)
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
</head>
<body>
<nav>
  <a href="<?= BASE_URL ?>/index.php">Home</a> |
  <a href="<?= BASE_URL ?>/auth/login.php">Login</a> |
  <a href="<?= BASE_URL ?>/auth/register.php">Register</a>
</nav>
<main>
