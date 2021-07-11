<?php

namespace Amundi\Exercises;

class PalindromeChecker
{
    /**
     * Function that takes one word as an argument and returns true if it is a palindrome (word that is the same if you
     * read it from left to right or from right to left) and false otherwise.
     */
    public function check(string $w): bool {
        $tab = str_split($w);
        $n = strlen($w);

        for ($i = 0; $i <= floor($n/2); $i++) {
            if ($tab[$i] == $tab[$n-$i-1]) {
                continue;
            } else {
                return false;
            }
        }

        return true;
    }
}
