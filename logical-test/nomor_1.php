<?php

// 1. Buatlah sebuah fungsi untuk memeriksa kalimat yang sama
//    Membandingkan 2 kalimat apakah terdiri dari huruf yang sama
//    dan jumlah huruf yang sama (panjang string)

function isSameSentence($str1, $str2) {
    // variabel untuk menyimpan String yang akan ditampilkan sebagai output
    $result = "True";

    // Cek apakah panjang string1 sama dengan string2
    if (strlen($str1) == strlen($str2)) {
        // Buat variabel str untuk menampung setiap huruf yang ada pada str1
        $charr1 = str_split($str1);
        $charr2 = str_split($str2);
        $charCount1 = array();

        for ($i = 0; $i < strlen($str1); $i++) {

        }

        foreach ($str as $char) {
            if (stripos($str2, $char) === false) {
                $result = "False";
                break;
            } else {
                if (!array_key_exists($char, $charCount)) {
                    $charCount[$char] = 1;
                } else {
                    $charCount[$char]++;
                    if ($charCount[$char] > 1) {
                        $result = "False";
                        break;
                    } 
                }
            } 
        }
    } 
    echo $result;
}

isSameSentence('Race', 'Care');
isSameSentence('Robert', 'Terobs');
