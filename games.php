<?php

$matches = [
    [
        'home' => [
            'name' => 'JuveCaserta',
            'points' => 83
        ],
        'guest' => [

            'name' => 'Olimpia Milano',
            'points' => 71
        ]
    ],
    [
        'home' => [
            'name' => 'Poggibonsi',
            'points' => 59
        ],
        'guest' => [

            'name' => 'Cantù',
            'points' => 61
        ]
    ],
    [
        'home' => [
            'name' => 'Longobarda',
            'points' => 42
        ],
        'guest' => [

            'name' => 'OronzoCanà',
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
        <ul></ul>
        <?php foreach ($matches as $match) : ?>

        <?php endforeach ?>

        </ul>
    </main>

</body>

</html>