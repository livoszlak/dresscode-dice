<!DOCTYPE html>
<html>

<head>
    <title>
        How to call PHP function
        on the click of a Button ?
    </title>
</head>

<body style="text-align:center;">



    <?php
    if (array_key_exists('button1', $_POST)) {
        userRoll();
        computerRoll();
    } else if (array_key_exists('button2', $_POST)) {
        clear();
    }
    function userRoll()
    {
        $rolls = array();
        $points = 0;

        for ($i = 0; $i < 3; $i++) {
            $rolls[$i] = rand(1, 6);
        }

        sort($rolls);

        if ($rolls[0] == $rolls[1] && $rolls[1] == $rolls[2]) {
            $points += 2;
        }

        if (array_sum($rolls) >= 14) {
            $points += 1;
        }

        if ($rolls[1] == $rolls[0] + 1 && $rolls[2] == $rolls[1] + 1) {
            $points += 3;
        }

        echo "You rolled $rolls[0], $rolls[1], $rolls[2] for a total of $points points.<br>";
    }

    function computerRoll()
    {
        $rolls = array();
        $points = 0;

        for ($i = 0; $i < 3; $i++) {
            $rolls[$i] = rand(1, 6);
        }

        sort($rolls);

        if ($rolls[0] == $rolls[1] && $rolls[1] == $rolls[2]) {
            $points += 2;
        }

        if (array_sum($rolls) >= 14) {
            $points += 1;
        }

        if ($rolls[1] == $rolls[0] + 1 && $rolls[2] == $rolls[1] + 1) {
            $points += 3;
        }

        echo "The computer rolled $rolls[0], $rolls[1], $rolls[2] for a total of $points points.";
    }

    ?>

    <form method="post">
        <input type="submit" name="button1" class="button" value="Roll" />

        <input type="submit" name="button2" class="button" value="Clear" />
    </form>
</body>

</html>