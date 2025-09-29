<?php
// Usage:
// include 'includes/card.php';
// with variables: $card_title, $card_text, $card_button_text, $card_button_link
?>

<div class="card">
  <?php if(isset($card_title)) : ?>
    <h3><?= htmlspecialchars($card_title) ?></h3>
  <?php endif; ?>

  <?php if(isset($card_text)) : ?>
    <p><?= htmlspecialchars($card_text) ?></p>
  <?php endif; ?>

  <?php if(isset($card_button_text) && isset($card_button_link)) : ?>
    <a href="<?= htmlspecialchars($card_button_link) ?>" class="btn"><?= htmlspecialchars($card_button_text) ?></a>
  <?php endif; ?>
</div>

