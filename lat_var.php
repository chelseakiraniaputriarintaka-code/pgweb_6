<?php
// Menampilkan pesan
$sapaan = "Selamat pagi ";
echo "Halo, " . $sapaan;
echo "<br>";

// Menampilkan data array
$hewan = array("Kucing", "Kelinci", "Panda");
echo $hewan[1] . "<br>";

// Operasi penjumlahan
$x = 10;
$y = 5;
$x = $x + $y;
echo $x . "<br>";

// Penjumlahan singkat
$x += $y;
echo $x . "<br>";

// Menggabungkan angka menjadi teks
$x = $x . $y;
echo $x . "<br>";

// Menggabungkan teks secara singkat
$x .= $y;
echo $x;
?>