<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'librarian') {
  header("Location: ../auth/login.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Manage Books</title>
</head>
<body>
  <h1>Manage Books (Librarian)</h1>
  <p>Librarian can add, edit, or remove books.</p>
  <a href="../auth/logout.php">Logout</a>
</body>
</html>
