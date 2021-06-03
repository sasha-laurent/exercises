<?php

namespace Amundi\Exercises;

class Anagram
{
    /**
     * Function that takes two words as an argument and returns true if they are anagrams (contain the exact same letters) and false otherwise.
     */
    public function compareByJunior(string $w1, string $w2): bool {
	    if (strlen($w1) == strlen($w2)) {
	        $tb1 = str_split($w1);
	        $tb2 = str_split($w2);
	        sort($tb1);
	        sort($tb2);

	        for ($n = 0; $n < strlen($w1); $n++) {
	            if ($tb1[$n] != $tb2[$n]) {
	                return false;
                }
	            else {
	                // do nothing
                }

	            if ($n == strlen($w1)-1) {
	                return true;
                }
            }
        } else {
	        return false;
        }
    }

    /**
     * Function that takes two words as an argument and returns true if they are anagrams (contain the exact same letters) and false otherwise.
     */
    public function compareSort(string $word1, string $word2): bool {
        if (strlen($word1) !== strlen($word2)) {
            return false;
        }

        $explodedWord1 = str_split($word1);
        $explodedWord2 = str_split($word2);
        sort($explodedWord1);
        sort($explodedWord2);

        foreach ($explodedWord1 as $key => $currentLetter) {
            if ($explodedWord1[$key] !== $explodedWord2[$key]) {
                return false;
            }
        }

        return true;
    }

    public function compareUnset(string $word1, string $word2)
    {
        $explodedWord1 = str_split($word1);
        $explodedWord2 = str_split($word2);

        foreach ($explodedWord1 as $currentLetter1) {
            if (false === $positionInWord2 = array_search($currentLetter1, $explodedWord2)) {
                return false;
            }
            unset($explodedWord2[$positionInWord2]);
        }

        return empty($explodedWord2);
    }

}
