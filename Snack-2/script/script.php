<?php

// Username
$username = $_GET['firstname'] ?? '';

// User email
$user_email = $_GET['email'] ?? '';

// User age
$user_age = $_GET['age'] ?? '';

// Validation
$is_name_valid = mb_strlen(trim($username)) > 3;
$is_email_valid = str_contains($user_email, '@') && str_contains($user_email, '.');
$is_age_valid = is_numeric($user_age) && $user_age > 0;

$is_form_invalid = !$is_name_valid || !$is_email_valid || !$is_age_valid;

$message = $is_form_invalid ? 'Accesso Negato' : 'Accesso Riuscito';

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