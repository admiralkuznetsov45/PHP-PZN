<?php

//// Tipe Data Number

// Menampilkan nilai desimal (basis 10)
echo "Decimal : ";
var_dump(1234); // var_dump() menampilkan tipe data dan nilai dari variabel atau ekspresi. Output: int(1234)

// Menampilkan nilai oktal (basis 8), diawali dengan 0
echo "Octal : ";
var_dump(0123); // var_dump() menampilkan tipe data dan nilai. Nilai oktal 0123 dikonversi ke desimal: (1 * 8^2) + (2 * 8^1) + (3 * 8^0) = 64 + 16 + 3 = 83. Output: int(83)

// Menampilkan nilai heksadesimal (basis 16), diawali dengan 0x
echo "Hexadecimal : ";
var_dump(0x1A); // Nilai heksadesimal 0x1A dikonversi ke desimal: (1 * 16^1) + (10 * 16^0) = 16 + 10 = 26. Output: int(26)

// Menampilkan nilai biner (basis 2), diawali dengan 0b
echo "Binary : ";
var_dump(0b11111111); // Nilai biner 0b11111111 dikonversi ke desimal: 255. Output: int(255)

// Menampilkan nilai desimal dengan underscore sebagai pemisah ribuan (fitur PHP 7.4 ke atas)
echo "Underscore di Number : ";
var_dump(1_234_567); // Underscore diabaikan dan digunakan hanya untuk meningkatkan keterbacaan. Output: int(1234567)


//// Tipe Data Floating

echo "Floating Point : ";
var_dump(1.234);

echo "Floating Point dengan E notation plus (1.2 x 1000) : ";
var_dump(1.2e3);

echo "Floating Point dengan E notation minus (7 x 8.081) : ";
var_dump(7e-3);

echo "Underscore di Floating Point : ";
var_dump(1_234.567);

//// Integer Overflow 

echo "Integer Overflow 32 bit : ";
var_dump(2147483648);

echo "Integer Overflow 64 bit : ";
var_dump(9223372036854775807);
