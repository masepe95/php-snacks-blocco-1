<?php

$matches = [
    [
        'home' => [
            'team' => 'JuveCaserta',
            'points' => 83
        ],
        'guest' => [

            'team' => 'Olimpia Milano',
            'points' => 71
        ]
    ],
    [
        'home' => [
            'team' => 'Poggibonsi',
            'points' => 59
        ],
        'guest' => [

            'team' => 'Cantù',
            'points' => 61
        ]
    ],
    [
        'home' => [
            'team' => 'Longobarda',
            'points' => 42
        ],
        'guest' => [

            'team' => 'OronzoCanà',
            'points' => 90
        ]
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basket Matches</title>
</head>

<body>

    <main>
        <h1>Matches list:</h1>
        <ul>
            <?php foreach ($matches as $match) : ?>
                <li>
                    <?= $match['home']['team'] ?> - <?= $match['guest']['team'] ?> | <?= $match['home']['points'] ?>-<?= $match['guest']['points'] ?>
                </li>
            <?php endforeach ?>
        </ul>
    </main>

</body>

</html>