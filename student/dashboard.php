<?php include __DIR__ . '/../includes/header.php'; ?>
<div class="dashboard-container">
  <h2>Available Books</h2>

  <?php
    $card_title = "Harry Potter";
    $card_text = "Author: J.K. Rowling | Copies: 5";
    $card_button_text = "Borrow";
    $card_button_link = "#";
    include __DIR__ . '/../includes/card.php';
  ?>

  <?php
    $card_title = "Learn PHP";
    $card_text = "Author: John Doe | Copies: 3";
    $card_button_text = "Borrow";
    $card_button_link = "#";
    include __DIR__ . '/../includes/card.php';
  ?>
</div>
<?php include __DIR__ . '/../includes/footer.php'; ?>
