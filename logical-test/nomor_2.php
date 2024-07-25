<?php

// 2. Buatlah sebuah fungsi untuk mencari huruf terbanyak 
//    dalam sebuah kalimat
// 
// Contoh
// Input: "giffari"
// Output: huruf f muncul sebanyak 2 kali

// Input: "gunung arjuno"
// Output: huruf u muncul sebanyak 3 kali

function mostFrequency($str) {
    // variabel untuk simpan frekuensi huruf dalam string
    $charFreq = array();

    // lakukan looping untuk menghitung frekuensi huruf
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];

        // jika huruf sudah ada dalam array, maka frekuensi ditambah 1
        // jika tidak ada, maka frekuensi = 1
        if (array_key_exists($char, $charFreq)) {
            $charFreq[$char]++;
        } else {
            $charFreq[$char] = 1;
        }
    }

    // huruf dengan frekuensi muncul tertinggi disimpan
    $mostFreq = array_keys($charFreq, max($charFreq));

    // ambil huruf dengan frekuensi muncul tertinggi pertama
    $firstMostFreq = $mostFreq[0];

    echo "huruf {$firstMostFreq} muncul sebanyak {$charFreq[$firstMostFreq]} kali\n";
}

mostFrequency('giffari');

mostFrequency('gunung arjuno');