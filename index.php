<?php
$page_title = 'Home';
require_once __DIR__ . '/includes/header.php';
?>

<section class="hero">
    <h1>Welcome to <?= SITE_NAME ?></h1>
    <p>A simple PHP website built with reusable includes and clean layout.</p>
    <a href="contact.php" class="btn">Get in Touch</a>
</section>

<section class="cards">
    <div class="card">
        <h2>Fast</h2>
        <p>Lightweight pages with no unnecessary bloat.</p>
    </div>
    <div class="card">
        <h2>Simple</h2>
        <p>Plain PHP includes, easy to read and extend.</p>
    </div>
    <div class="card">
        <h2>Flexible</h2>
        <p>Add new pages by copying the pattern used here.</p>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
