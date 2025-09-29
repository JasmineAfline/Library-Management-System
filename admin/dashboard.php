<?php include __DIR__ . '/../includes/header.php'; ?>

<h1>Admin Dashboard</h1>

<?php
// Card 1
$card_title = "Manage Users";
$card_text = "Add, edit, or remove library users.";
$card_button_text = "Go to Users";
$card_button_link = "users.php";
include __DIR__ . '/../includes/card.php';

// Card 2
$card_title = "Manage Books";
$card_text = "Add, edit, or remove books in the library.";
$card_button_text = "Go to Books";
$card_button_link = "books.php";
include __DIR__ . '/../includes/card.php';

// Card 3
$card_title = "Reports";
$card_text = "View reports of borrowed books and users.";
$card_button_text = "View Reports";
$card_button_link = "reports.php";
include __DIR__ . '/../includes/card.php';
?>

<?php include __DIR__ . '/../includes/footer.php'; ?>
