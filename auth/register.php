<?php include __DIR__ . '/../includes/header.php'; ?>
<div class="card">
  <h2>Register</h2>
  <form method="POST" action="">
    <label>Name:</label>
    <input type="text" name="name" required>

    <label>Email:</label>
    <input type="email" name="email" required>

    <label>Password:</label>
    <input type="password" name="password" required>

    <button type="submit" class="btn">Register</button>
  </form>
</div>
<?php include __DIR__ . '/../includes/footer.php'; ?>
