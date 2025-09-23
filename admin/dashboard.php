<?php include __DIR__ . '/../includes/header.php'; ?>
<div class="dashboard-container">
  <h2>Admin Dashboard</h2>

  <?php
    $card_title = "Manage Books";
    $card_text = "Add, edit or remove books in the library.";
    $card_button_text = "Go";
    $card_button_link = "#";  // replace with actual page
    include __DIR__ . '/../includes/card.php';
  ?>

  <?php
    $card_title = "Manage Users";
    $card_text = "View and edit all users.";
    $card_button_text = "Go";
    $card_button_link = "#";
    include __DIR__ . '/../includes/card.php';
  ?>

  <?php
    $card_title = "Reports";
    $card_text = "View borrowing and return reports.";
    $card_button_text = "Go";
    $card_button_link = "#";
    include __DIR__ . '/../includes/card.php';
  ?>
</div>
<?php include __DIR__ . '/../includes/footer.php'; ?>
