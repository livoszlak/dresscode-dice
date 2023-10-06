<?php

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

function clear()
{
    echo "Computer says NEVER DON'T GIVE UP.";
}

function winner()
{
}
