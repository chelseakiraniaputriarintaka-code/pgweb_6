<?php
/*
$i = 1;
while ($i <10) {
    echo $i;
    $i = $i + 1; // $i++;
}

for($i=1; $i<100; $i++){
echo $i. "<br>";
}
*/
// Deklarasi array
$hobi = array("Berenang", "Melukis", "Koding", "Membaca");

// Perulangan foreach
foreach ($hobi as $value) {
    echo "$value <br>";
}

// Menampilkan isi array dengan for
for ($i = 0; $i < 3; $i++) {
    echo $hobi[$i] . "<br>";
}
?>