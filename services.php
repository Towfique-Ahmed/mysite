<?php
$page_title = 'Services';
require_once __DIR__ . '/includes/header.php';

$services = [
    ['title' => 'Web Design', 'desc' => 'Clean, responsive layouts tailored to your brand.'],
    ['title' => 'Development', 'desc' => 'Custom PHP functionality built to your requirements.'],
    ['title' => 'Maintenance', 'desc' => 'Ongoing updates, fixes, and support.'],
];
?>

<section class="page-content">
    <h1>Our Services</h1>
    <div class="cards">
        <?php foreach ($services as $service): ?>
            <div class="card">
                <h2><?= htmlspecialchars($service['title']) ?></h2>
                <p><?= htmlspecialchars($service['desc']) ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
