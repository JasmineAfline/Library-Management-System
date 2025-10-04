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
  <h2>Manage Books</h2>
  <p>Here you can add, edit, or remove books from the library.</p>

  <table border="1" cellpadding="10" cellspacing="0" width="100%">
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Author</th>
      <th>Category</th>
      <th>Status</th>
      <th>Actions</th>
    </tr>
    <?php
    $result = $conn->query("SELECT id, title, author, category, status FROM books");
    while ($row = $result->fetch_assoc()):
    ?>
      <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo htmlspecialchars($row['title']); ?></td>
        <td><?php echo htmlspecialchars($row['author']); ?></td>
        <td><?php echo htmlspecialchars($row['category']); ?></td>
        <td><?php echo $row['status']; ?></td>
        <td>
          <a href="edit_book.php?id=<?php echo $row['id']; ?>">Edit</a> | 
          <a href="delete_book.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Delete this book?')">Delete</a>
        </td>
      </tr>
    <?php endwhile; ?>
  </table>
</div>

<?php include __DIR__ . '/../includes/footer.php'; ?>
