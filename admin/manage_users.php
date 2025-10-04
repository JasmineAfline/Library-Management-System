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
  <h2>Manage Users</h2>
  <p>Here you can add, edit, or remove users.</p>

  <table border="1" cellpadding="10" cellspacing="0" width="100%">
    <tr>
      <th>ID</th>
      <th>Username</th>
      <th>Email</th>
      <th>Role</th>
      <th>Actions</th>
    </tr>
    <?php
    $result = $conn->query("SELECT id, username, email, role FROM users");
    while ($row = $result->fetch_assoc()):
    ?>
      <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo htmlspecialchars($row['username']); ?></td>
        <td><?php echo htmlspecialchars($row['email']); ?></td>
        <td><?php echo $row['role']; ?></td>
        <td>
          <a href="edit_user.php?id=<?php echo $row['id']; ?>">Edit</a> | 
          <a href="delete_user.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Delete this user?')">Delete</a>
        </td>
      </tr>
    <?php endwhile; ?>
  </table>
</div>

<?php include __DIR__ . '/../includes/footer.php'; ?>
