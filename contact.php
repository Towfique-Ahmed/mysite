<?php
$page_title = 'Contact';

$errors = [];
$success = false;
$name = $email = $message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if ($name === '') {
        $errors[] = 'Please enter your name.';
    }
    if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Please enter a valid email address.';
    }
    if ($message === '') {
        $errors[] = 'Please enter a message.';
    }

    if (empty($errors)) {
        // Wire this up to mail() or a form service when ready to send.
        $success = true;
        $name = $email = $message = '';
    }
}

require_once __DIR__ . '/includes/header.php';
?>

<section class="page-content">
    <h1>Contact Us</h1>

    <?php if ($success): ?>
        <p class="alert alert-success">Thanks for reaching out! We'll get back to you soon.</p>
    <?php endif; ?>

    <?php if (!empty($errors)): ?>
        <div class="alert alert-error">
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?= htmlspecialchars($error) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="contact.php" method="post" class="contact-form">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="<?= htmlspecialchars($name) ?>">

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?= htmlspecialchars($email) ?>">

        <label for="message">Message</label>
        <textarea id="message" name="message" rows="6"><?= htmlspecialchars($message) ?></textarea>

        <button type="submit" class="btn">Send Message</button>
    </form>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
