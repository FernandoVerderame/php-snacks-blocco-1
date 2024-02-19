<?php

// Username
$username = $_GET['firstname'];

// User email
$user_email = $_GET['email'];

// User age
$user_age = $_GET['age'];

if (strlen($username) > 3 && str_contains($user_email, '.') && str_contains($user_email, '@') && is_numeric($user_age)) {
    $message = 'Accesso riuscito';
} else {
    $message = 'Accesso negato';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    <h2><?= $message ?></h2>
</body>
</html>