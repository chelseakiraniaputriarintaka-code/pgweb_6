<?php
// Deklarasi variabel
$umur = 18;
$tinggi = 160;

// Logika percabangan
if ($umur >= 17 || $tinggi >= 150) {
    echo "Boleh naik wahana <br>";
} elseif ($umur >= 12) {
    echo "Perlu pendampingan <br>";
} else {
    echo "Tidak boleh naik <br>";
}

// Menampilkan pesan akhir
echo "Pemeriksaan selesai";
?>