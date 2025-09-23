<?php include __DIR__ . '/../includes/header.php'; ?>
<div class="card">
  <h2>Login</h2>
  <form method="POST" action="">
    <label>Email:</label>
    <input type="email" name="email" required>

    <label>Password:</label>
    <input type="password" name="password" required>

    <button type="submit" class="btn">Login</button>
  </form>
</div>
<?php include __DIR__ . '/../includes/footer.php'; ?>
