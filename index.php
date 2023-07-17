<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-snacks-blocco-1</title>
</head>

<body>
    <main>
        <section id="basket">
            <h2>Basket games</h2>
            <a href="games.php">Check basket games</a>
        </section>

        <!-- VERIFY FORM -->
        <section id="verify-form">
            <h2>Verify:</h2>
            <form action="verify.php" method="get" novalidate>
                <!-- name -->
                <label for="name">Name: </label>
                <input type="text" name="name" id="name">
                <!-- mail -->
                <label for="email">Email: </label>
                <input type="text" name="email" id="email">
                <!-- age -->
                <label for="age">Age: </label>
                <input type="text" name="age" id="age">
            </form>
        </section>
    </main>
</body>

</html>