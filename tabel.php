<?php
$data_penduduk = array(
    array("kecamatan" => "Moyudan", "luas" => 27.62, "jumlah_penduduk" => 31497),
    array("kecamatan" => "Minggir", "luas" => 27.27, "jumlah_penduduk" => 29886),
    array("kecamatan" => "Seyegan", "luas" => 26.63, "jumlah_penduduk" => 47129),
    array("kecamatan" => "Godean",  "luas" => 26.84, "jumlah_penduduk" => 72028),
    array("kecamatan" => "Gamping", "luas" => 29.25, "jumlah_penduduk" => 108675)
);

echo "<table border='1'";
echo "<tr>";
echo "<th>Kecamatan</th>";
echo "<th>Luas</th>";
echo "<th>Jumlah_Penduduk</th>";
echo "</tr>";

foreach ($data_penduduk as $row) {
    echo "<tr>";
    echo "<td>" . $row['kecamatan'] . "</td>";
    echo "<td>" . $row['luas'] . "</td>";
    echo "<td>" . $row['jumlah_penduduk'] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>