<?php include __DIR__ . '/../includes/header.php'; ?>

<div class="dashboard-container">
  <h2>Librarian Dashboard</h2>

  <?php
    $card_title = "Pending Borrow Requests";
    $card_text = "View and approve books that students want to borrow.";
    $card_button_text = "View Requests";
    $card_button_link = "#"; // replace with actual page
    include __DIR__ . '/../includes/card.php';
  ?>

  <?php
    $card_title = "Return Books";
    $card_text = "Check and process returned books.";
    $card_button_text = "Process Returns";
    $card_button_link = "#"; // replace with actual page
    include __DIR__ . '/../includes/card.php';
  ?>

  <?php
    $card_title = "Manage Inventory";
    $card_text = "Add or update book quantities and availability.";
    $card_button_text = "Manage Books";
    $card_button_link = "#"; // replace with actual page
    include __DIR__ . '/../includes/card.php';
  ?>
</div>

<?php include __DIR__ . '/../includes/footer.php'; ?>
