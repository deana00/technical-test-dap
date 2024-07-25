<?php

function mostFrequency($str) {
    $charFreq = array();

    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        if (array_key_exists($char, $charFreq)) {
            $charFreq[$char]++;
        } else {
            $charFreq[$char] = 1;
        }
    }

    $mostFreq = array_keys($charFreq, max($charFreq));
    $firstMostFreq = $mostFreq[0];

    echo "huruf {$firstMostFreq} muncul sebanyak {$charFreq[$firstMostFreq]} kali\n";
}

mostFrequency('giffari');

mostFrequency('gunung arjuno');