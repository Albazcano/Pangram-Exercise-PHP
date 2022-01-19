<?php

declare(strict_types=1);

    function isPangram(string $sentence): bool
    {
        $alphabet = range('a', 'z');
        $sentence = strtolower($sentence);
        $letters = str_split($sentence);
        $letters = array_unique($letters);

        if (count(array_intersect($alphabet, $letters)) === sizeof($alphabet)) {
            return true;
        } else {
            return false;
        }
    }


?>

