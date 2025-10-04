<?php
session_start();
include __DIR__ . '/../config.php'; // database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Prepare query
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify password (supports both md5 legacy and password_hash)
        if ($user && ($user['password'] === md5($password) || password_verify($password, $user['password']))) {
            // Store session data
            $_SESSION['user_id']   = $user['id'];
            $_SESSION['role']      = $user['role'];
            $_SESSION['username']  = $user['username'];

            // Redirect based on role
            if ($user['role'] === 'admin') {
                header("Location: /library/admin/dashboard.php");
            } elseif ($user['role'] === 'librarian') {
                header("Location: /library/librarian/dashboard.php");
            } else {
                header("Location: /library/student/dashboard.php");
            }
            exit;
        } else {
            $error = "Invalid password.";
        }
    } else {
        $error = "User not found.";
    }
}
?>
<?php include __DIR__ . '/../includes/header.php'; ?>
<div class="card">
  <h2>Login</h2>

  <?php if (!empty($error)): ?>
    <p style="color:red;"><?php echo $error; ?></p>
  <?php endif; ?>

  <form method="POST" action="">
    <label>Email:</label>
    <input type="email" name="email" required>

    <label>Password:</label>
    <input type="password" name="password" required>

    <button type="submit" class="btn">Login</button>
  </form>
</div>
<?php include __DIR__ . '/../includes/footer.php'; ?>
