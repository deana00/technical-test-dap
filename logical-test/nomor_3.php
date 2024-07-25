<?php

// 3. Buatlah sebuah fungsi untuk membuat array 2 dimensi
//    dengan total yang diinput (n x n) sehingga menghasilkan
//    seperti contoh di bawah ini

// Contoh
// Input: 4
// Output:
//  4000
//  0400
//  0040
//  0004

// Contoh
// Input: 9
// Output:
//  900000000
//  090000000
//  009000000
//  000900000
//  000090000
//  000009000
//  000000900
//  000000090
//  000000009

function createArray2D($n) {
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            if ($i == $j) echo $n;
            else echo 0;
        }
        echo "\n";
    }
}

// Contoh 1
createArray2D(4);

// Contoh 2
createArray2D(9);