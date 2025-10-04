<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../auth/login.php");
    exit();
}
include __DIR__ . '/../config.php';
include __DIR__ . '/../includes/header.php';
?>

<div class="card">
  <h2>Reports</h2>
  <p>Overview of system activity:</p>

  <ul>
    <li>Total Users: 
      <?php
      $res = $conn->query("SELECT COUNT(*) AS total FROM users");
      $row = $res->fetch_assoc();
      echo $row['total'];
      ?>
    </li>
    <li>Total Books: 
      <?php
      $res = $conn->query("SELECT COUNT(*) AS total FROM books");
      $row = $res->fetch_assoc();
      echo $row['total'];
      ?>
    </li>
    <li>Total Borrowed Books: 
      <?php
      $res = $conn->query("SELECT COUNT(*) AS total FROM borrow_records WHERE status='borrowed'");
      $row = $res->fetch_assoc();
      echo $row['total'];
      ?>
    </li>
  </ul>
</div>

<?php include __DIR__ . '/../includes/footer.php'; ?>
