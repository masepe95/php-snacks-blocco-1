<?php

$name = $_GET['name'] ?? '';
$email = $_GET['email'] ?? '';
$age = $_GET['age'] ?? '';

$errors = [];

if (strlen($name) <= 3) {
    $errors['name'] = 'Name must be at least 3 characters long';
}

if (!str_contains($email, '@') || !str_contains($email, '.')) {
    $errors['email'] = 'Email must contain both \'@\' and \'.\'';
}

if (!is_numeric($age)) {
    $errors['age'] = 'Age must be a valid number';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>

<body>
    <?php if (empty($errors)) : ?>

        <h1>Access granted</h1>

    <?php else : ?>

        <h1>Unauthorized</h1>
        <ul>
            <?php foreach ($errors as $key => $value) : ?>
                <li><strong><?= $key ?>: </strong><?= $value ?></li>
            <?php endforeach; ?>
        </ul>

    <?php endif; ?>
</body>

</html>