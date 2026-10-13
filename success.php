<?php
// Only accept form submissions sent via POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

// Collect and sanitize the submitted data
$firstName = htmlspecialchars(trim($_POST['first_name'] ?? ''), ENT_QUOTES, 'UTF-8');
$lastName  = htmlspecialchars(trim($_POST['last_name'] ?? ''), ENT_QUOTES, 'UTF-8');
$dob       = htmlspecialchars(trim($_POST['dob'] ?? ''), ENT_QUOTES, 'UTF-8');
$gender    = htmlspecialchars(trim($_POST['gender'] ?? ''), ENT_QUOTES, 'UTF-8');

// Basic validation
$errors = [];
if ($firstName === '') $errors[] = 'First name is required.';
if ($lastName === '')  $errors[] = 'Last name is required.';
if ($dob === '')       $errors[] = 'Date of birth is required.';
if ($gender === '')    $errors[] = 'Gender is required.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Success</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; }
        .box { max-width: 400px; margin: 40px auto; padding: 20px; background: #fff; border: 1px solid #ccc; border-radius: 6px; }
        .error { color: #b00020; }
    </style>
</head>
<body>
    <div class="box">
        <?php if (!empty($errors)): ?>
            <h2 class="error">Submission failed</h2>
            <ul class="error">
                <?php foreach ($errors as $error): ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
            <a href="index.php">Go back</a>
        <?php else: ?>
            <h2>Form submitted successfully!</h2>
            <p><strong>First Name:</strong> <?= $firstName ?></p>
            <p><strong>Last Name:</strong> <?= $lastName ?></p>
            <p><strong>Date of Birth:</strong> <?= $dob ?></p>
            <p><strong>Gender:</strong> <?= $gender ?></p>
            <a href="index.php">Submit another response</a>
        <?php endif; ?>
    </div>
</body>
</html>
