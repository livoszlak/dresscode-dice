<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">

    <title>Dice game</title>
</head>

<body>

    <header>ROLL<br>DICE<br>THRICE</header>

    <div class="game"> <?php require __DIR__ . "/functions.php";

                        if (array_key_exists('button1', $_POST)) {
                            userRoll();
                            computerRoll();
                        } else if (array_key_exists('button2', $_POST)) {
                            clear();
                        }

                        ?>

        <form method="post">
            <input type="submit" name="button1" class="button" value="Roll" />

            <input type="submit" name="button2" class="button" value="Clear" />
        </form>
    </div>
</body>

</html>