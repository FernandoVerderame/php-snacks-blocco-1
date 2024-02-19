<?php 

// Basket teams array
$matches = [
    [
        'home_team' => 'Olimpia Milano',
        'away_team' => 'Brindisi',
        'home_score' => 58,
        'away_score' => 40
    ],
    [
        'home_team' => 'Napoli',
        'away_team' => 'Cremona',
        'home_score' => 73,
        'away_score' => 56
    ],
    [
        'home_team' => 'Virtus Bologna',
        'away_team' => 'Scafati',
        'home_score' => 61,
        'away_score' => 84
    ],
    [
        'home_team' => 'Brescia',
        'away_team' => 'Varese',
        'home_score' => 66,
        'away_score' => 59
    ]
];

var_dump($matches);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <ul>
        <!-- Generate dinamic matches --> 
        <?php for ($i = 0; $i < count($matches); $i++) : ?>
            <li><?= $matches[$i]['home_team'] . ' - ' . $matches[$i]['away_team'] . ' | ' . $matches[$i]['home_score'] . ' - ' . $matches[$i]['away_score']; ?></li>
        <?php endfor; ?>
    </ul>
</body>
</html>